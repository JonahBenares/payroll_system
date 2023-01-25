<?php

namespace App\Http\Controllers;

use App\Models\AdjustmentHead;
use App\Models\AdjustmentDetails;
use App\Models\OToffice;
use App\Models\LeaveFailure;
use App\Models\LeaveFailureDetail;
use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Models\CutOff;
use App\Models\JobHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoff=CutOff::all();
        $employees=Employee::where('is_active','1')->orderBy('full_name','ASC')->get();
        return view('ot_office.index',compact('cutoff','employees'));
    }

    public function filter_otoffice(Request $request){
        $cutoff=CutOff::all();
        $employees=Employee::where('is_active','1')->orderBy('full_name','ASC')->get();
        $get_data=Employee::where('id',$request->employee)->first();
        $designation=JobHistory::where('personal_id',$get_data->personal_id)->orderBy('effective_date','DESC')->first();
        $designation_disp=$designation->j_position;
        $employee_id=$get_data->id;
        if($get_data->daily_rate!=0 && $get_data->monthly_rate!=0 || $get_data->daily_rate==0 && $get_data->monthly_rate!=0){
            $salary=$get_data->monthly_rate;
            $daily_rate=$salary*12/313;
        }else if($get_data->daily_rate!=0 && $get_data->monthly_rate==0){
            $salary=$get_data->daily_rate;
            $daily_rate=$salary;
        }else{
            $salary=0;  
            $daily_rate=0;
        }
        
        //Filter Period
        $month_year=$request->year."-".$request->month;
        $cut_off = CutOff::where('cutoff_type',$request->period)->first();
        $date_start=$month_year."-".$cut_off->cutoff_start;
        $date_end=$month_year."-".$cut_off->cutoff_end;
        if($request->period=='MID'){
            $checkyear=date('m',strtotime($date_start));
            if($checkyear=='12'){
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months")).",".date('Y',strtotime($date_end." +1 year"));;
            }else{
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months"));
            }
        }else if($request->period=='EOM'){
            $start=date('Y-m-d',strtotime($date_start));
            $end=date('Y-m-d',strtotime($date_end));
        }
       
        $overtime=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->get();
        $personal_id=$get_data->personal_id;
        $x=0;

        //Calculation For Rates
        //Daily Rate
        //$daily_rate=$salary*12/313;
        //Regular Holiday
        $regular_holiday=$daily_rate;
        //Special Holiday
        $special_holiday=$daily_rate * 0.30;
        //Special Holiday on Restday
        $special_holiday_restday=$daily_rate*1.50;
        //Regular Holiday on Restday
        $reg_holiday_rd=$daily_rate*2.60;
        //Restday
        $restday=$daily_rate*1.3;
       
        //Calculation Overtime
        //Regular OT
        $reg_otcalc=($daily_rate / 8) * 1.25;
        //Restday 2
        $rd_otcalc=($daily_rate / 8 * 1.3);
        //Restday / Special Holiday
        $rdsh_otcalc=($daily_rate / 8 * 1.3) * 1.3;
        //Special Holiday
        $sh_otcalc=($daily_rate + $special_holiday) / 8 * 1.3;
        //Special Holiday on Restday
        $shrd_otcalc=($special_holiday_restday / 8) * 1.3;
        //Regular Holiday
        $rh_otcalc=($daily_rate / 8) * 2.60;
        //Regular Holiday on Restday
        $rhrd_otcalc=($reg_holiday_rd / 8) * 1.3;

        //Calculation Night Premium
        //Regular NP
        $reg_np=$daily_rate / 8 * 0.1;
        //Regular NP OT
        $reg_np_ot=$reg_otcalc * 0.1;
        //Restday / Special Holiday NP
        $rdsh_np=($restday / 8) * 0.1;
        //Restday / Special Holiday NP OT
        $rdsh_np_ot=$rdsh_otcalc * 0.1;
        //Special Holiday on Restday
        $shrd_np=($special_holiday_restday / 8) * 0.1;
        //Special Holiday on Restday OT
        $shrd_np_ot=$shrd_otcalc * 0.1;
        //Regular Holiday NP
        $rh_np=$daily_rate * 2 / 8 * 0.1;
        //Regular Holiday NP OT
        $rh_np_ot=$rh_otcalc * 0.1;
        //Regular Holiday on Restday NP
        $rhrd_np=$reg_holiday_rd / 8 * 0.1;
        //Regular Holiday on Restday NP OT
        $rhrd_np_ot=$rhrd_otcalc * 0.1;
        //Filter Period
        $RD=0;
        $ins_shot=0;
        $ins_shrdot=0;
        $ins_rhot=0;
        $ins_rhrdot=0;
        $ins_regot=0;
        foreach($overtime AS $ot){
            //OVERTIME
            if($ot->reg_day_hr!=0){
                $ins_regot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('reg_day_hr');
            }else{
                $ins_regot=0;
            }

            if($ot->RD_HR!=0){
                $RD=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RD_HR');
            }else{
                $RD=0;
            }

            if($ot->SH_HR!=0){
                $ins_shot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('SH_HR');
            }else{
                $ins_shot=0;
            }

            if($ot->SH_RD_HR!=0){
                $ins_shrdot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('SH_RD_HR');
            }else{
                $ins_shrdot=0;
            }

            if($ot->RH_HR!=0){
                $ins_rhot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_HR');
            }else{
                $ins_rhot=0;
            }

            if($ot->RH_RD_HR!=0){
                $ins_rhrdot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_RD_HR');
            }else{
                $ins_rhrdot=0;
            }

            // NIGHT PREMIUM
            if($ot->reg_day_np_hr!=0){
                $ins_regnpot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('reg_day_np_hr');
            }else{
                $ins_regnpot=0;
            }

            if($ot->reg_np_ot_hr!=0){
                $ins_regnp2ot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('reg_np_ot_hr');
            }else{
                $ins_regnp2ot=0;
            }

            if($ot->RD_SH_NP_HR!=0){
                $ins_rdshot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RD_SH_NP_HR');
            }else{
                $ins_rdshot=0;
            }

            if($ot->RD_SH_NP_OT_HR!=0){
                $ins_rdsh2ot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RD_SH_NP_OT_HR');
            }else{
                $ins_rdsh2ot=0;
            }

            if($ot->SH_RD_NP_HR!=0){
                $ins_shrdnp=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('SH_RD_NP_HR');
            }else{
                $ins_shrdnp=0;
            }

            if($ot->SH_RD_OT_NP_HR!=0){
                $ins_shrdnpot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('SH_RD_OT_NP_HR');
            }else{
                $ins_shrdnpot=0;
            }

            if($ot->RH_NP_RH!=0){
                $ins_rhnpot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_NP_RH');
            }else{
                $ins_rhnpot=0;
            }

            if($ot->RH_OT_NP_HR!=0){
                $ins_rhnp2ot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_OT_NP_HR');
            }else{
                $ins_rhnp2ot=0;
            }

            if($ot->RH_RD_NP_HR!=0){
                $ins_rhrdotnp=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_RD_NP_HR');
            }else{
                $ins_rhrdotnp=0;
            }

            if($ot->RH_RD_OT_NP_HR!=0){
                $ins_rhrd2ot=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$get_data->id)->where('payroll_period',$request->period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('RH_RD_OT_NP_HR');
            }else{
                $ins_rhrd2ot=0;
            }
        }

        $absence_count = LeaveFailureDetail::join('leave_filing_head','leave_filing_head.id','=','leave_filing_detail.leave_filing_head_id')->where('employee_id',$get_data->id)->where('pay_period',$request->period)->where('month',$request->month)->where('year',$request->year)->where('absences','1')->where('filed','0')->whereBetween('date_absent', [$start, $end])->sum('absences');
        $undertime_count = LeaveFailureDetail::join('leave_filing_head','leave_filing_head.id','=','leave_filing_detail.leave_filing_head_id')->where('employee_id',$get_data->id)->where('pay_period',$request->period)->where('month',$request->month)->where('year',$request->year)->where('undertime','1')->where('filed','0')->whereBetween('date_absent', [$start, $end])->sum('undertime_mins');
        $undertime_disp= floor($undertime_count / 60).'.'.($undertime_count -   floor($undertime_count / 60) * 60);
        $adjustment=AdjustmentDetails::join('adjustment_head','adjustment_head.id','=','adjustment_details.adjustment_id')->where('employee_id',$get_data->id)->where('month_year',$month_year)->where('period_type',$request->period)->get();
        return view('ot_office.index',compact('cutoff','employees','employee_id','designation_disp','overtime','daily_rate','salary','restday','special_holiday','special_holiday_restday','regular_holiday','reg_holiday_rd','RD','ins_shot','ins_shrdot','ins_rhot','ins_rhrdot','absence_count','undertime_disp','personal_id','reg_otcalc','ins_regot','sh_otcalc','rhrd_otcalc','reg_np','ins_regnpot','reg_np_ot','ins_regnp2ot','rdsh_np','ins_rdshot','rdsh_np_ot','ins_rdsh2ot','shrd_np','ins_shrdnp','shrd_np_ot','ins_shrdnpot','rh_np','ins_rhnpot','rh_np_ot','ins_rhnp2ot','rhrd_np','ins_rhrdotnp','rhrd_np_ot','ins_rhrd2ot','adjustment'));
    }

    public function fetchEmployee(Request $request)
    {
        $employee_id = $request->employee_id;
        $employees=Employee::where('id',$employee_id)->first();
        $designation=JobHistory::where('personal_id',$employees->personal_id)->orderBy('effective_date','DESC')->first();
        $data=[
            'fullname' => $employees->full_name,
            'designation' => $designation->j_position,
        ];
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $head=AdjustmentHead::updateOrCreate([
            'employee_id'=> $request->employee_id,
            'personal_id'=> $request->personal_id,
            'period_type'=> $request->period_type,
            'month_year'=> $request->month_year,
        ]);
        if($head){
            $adjustment_id=AdjustmentHead::max('id');
            foreach($request->description AS $key => $value){
                $total_amount=$request->amount[$key] * $request->days_hr[$key];
                $res=AdjustmentDetails::updateOrCreate([
                    'adjustment_id'=> $adjustment_id,
                    'description'=> (!empty($request->description[$key])) ? $request->description[$key] : '',
                    'amount'=> (!empty($request->amount[$key])) ? $request->amount[$key] : '0',
                    'days_hr'=> (!empty($request->days_hr[$key])) ? $request->days_hr[$key] : '0',
                    'total_amount'=> (!empty($request->total_amount[$key])) ? $total_amount : '0',
                ]);
            }
            if($res) {  
                return redirect()->route('otOffice.index')->with('success',"Adjustments Added Successfully");
            }else{
                return redirect()->route('otOffice.index')->with('fail',"Error! Try Again!");
                
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function show(OToffice $oToffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function edit(OToffice $oToffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OToffice $oToffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(OToffice $oToffice)
    {
        //
    }
}

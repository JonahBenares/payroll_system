<?php

namespace App\Http\Controllers;

use App\Models\PayrollOvertime;
use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Models\CutOff;
use Illuminate\Http\Request;

class PayrollOvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoff=CutOff::all();
        return view('payroll_overtime.index',compact('cutoff'));
    }

    public function filter_payroll_ot(Request $request){
        if(isset($request->month) && isset($request->year)){
            $month=$request->month;
            $year=$request->year;
        }else{
            $month=date('m');
            $year=date('Y');
        }
        $overtime_report=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->join('employees','employees.id','=','ot_detail.employee_id')->where('payroll_period',$request->period)->where('month_year','LIKE','%'.$year."-".$month.'%')->groupBy('ot_detail.employee_id')->get();
        $x=0;
        $overtime_sum=[];
        $overtime_amount=[];
        foreach($overtime_report AS $t){
            $overtime_sum[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->payroll_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum(\DB::raw('IFNULL(reg_day_hr,0) + IFNULL(RD_HR,0) + IFNULL(SH_RD_HR,0) + IFNULL(SH_HR,0) + IFNULL(RH_HR,0) + IFNULL(RH_RD_HR,0) + IFNULL(reg_day_np_hr,0) + IFNULL(reg_np_ot_hr,0) + IFNULL(SH_RD_NP_HR,0) + IFNULL(SH_OT_NP_HR,0) + IFNULL(SH_RD_OT_NP_HR,0) + IFNULL(RH_NP_HR,0) + IFNULL(RH_RD_NP_HR,0) + IFNULL(RH_RD_OT_NP_HR,0) + IFNULL(RH_OT_NP_HR,0) + IFNULL(RD_SH_NP_HR,0) + IFNULL(RD_SH_NP_OT_HR,0)'));
            $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->payroll_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum('total_amount');
            $x++;
        }
        $cutoff=CutOff::all();
        return view('payroll_overtime.index',compact('overtime_report','overtime_sum','overtime_amount','cutoff'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function show($personal_id,$month_year,$period)
    {
        $cutoff = CutOff::where('cutoff_type',$period)->first();
        $date_start=$month_year."-".$cutoff->cutoff_start;
        $date_end=$month_year."-".$cutoff->cutoff_end;
        if($period=='MID'){
            $checkyear=date('m',strtotime($date_start));
            if($checkyear=='12'){
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months")).",".date('Y',strtotime($date_end." +1 year"));;
            }else{
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months"));
            }
        }else if($period=='EOM'){
            $start=date('Y-m-d',strtotime($date_start));
            $end=date('Y-m-d',strtotime($date_end));
        }
        $name = Employee::where('personal_id',$personal_id)->first();
        $overtime_amount=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$personal_id)->where('payroll_period',$period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('total_amount');
        return view('payroll_overtime.print',compact('name','month_year','period','cutoff','overtime_amount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollOvertime $payrollOvertime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollOvertime $payrollOvertime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollOvertime $payrollOvertime)
    {
        //
    }

    public function printBulk($month_year,$period)
    {
        $cutoff = CutOff::where('cutoff_type',$period)->first();
        $date_start=$month_year."-".$cutoff->cutoff_start;
        $date_end=$month_year."-".$cutoff->cutoff_end;
        if($period=='MID'){
            $checkyear=date('m',strtotime($date_start));
            if($checkyear=='12'){
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months")).",".date('Y',strtotime($date_end." +1 year"));;
            }else{
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months"));
            }
        }else if($period=='EOM'){
            $start=date('Y-m-d',strtotime($date_start));
            $end=date('Y-m-d',strtotime($date_end));
        }
        $printed = OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where("payroll_period",$period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->groupBy('ot_detail.employee_id')->get();
        $x=0;
        $name=array();
        foreach($printed AS $p){
            $name[$x]= Employee::where('personal_id',$p->personal_id)->first();
            $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$p->personal_id)->where('payroll_period',$period)->where('month_year',$month_year)->whereBetween('overtime_date', [$start, $end])->sum('total_amount');
            $x++;
        }
        return view('payroll_overtime.bulk',compact('printed','month_year','period','cutoff','name','overtime_amount'));
    }
}

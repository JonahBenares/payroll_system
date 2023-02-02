<?php

namespace App\Http\Controllers;

use App\Models\OTsite;
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
use App\Models\Location;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OTsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoff=CutOff::all();
        $location=Location::where('location_name','LIKE','%Bago%')->first();
        $employees=Employee::where('is_active','1')->where('emp_location',$location->id)->orderBy('full_name','ASC')->get();
        return view('ot_site.index',compact('cutoff','employees'));
    }

    public function filter_otsite(Request $request){
        $cutoff=CutOff::all();
        $location=Location::where('location_name','LIKE','%Bago%')->first();
        $location_id=$location->id;
        $employees=Employee::where('is_active','1')->where('emp_location',$location->id)->orderBy('full_name','ASC')->get();
        $get_data=Employee::where('id',$request->employee)->where('emp_location',$location->id)->first();
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
                $end=date('Y-m-d',strtotime($date_end." +1 Months"));
                $add_year=date('Y',strtotime($date_end." +1 year"));
            }else{
                $start=date('Y-m-d',strtotime($date_start));
                $end=date('Y-m-d',strtotime($date_end." +1 Months"));
                $add_year=date('Y',strtotime($date_end));
            }
            $start_date=str_pad($request->year, 2, "0", STR_PAD_LEFT)."-".str_pad($request->month, 2, "0", STR_PAD_LEFT)."-".str_pad($cut_off->cutoff_start, 2, "0", STR_PAD_LEFT);
            $end_date=str_pad($add_year, 2, "0", STR_PAD_LEFT)."-".str_pad(date('m',strtotime($end)), 2, "0", STR_PAD_LEFT)."-".str_pad($cut_off->cutoff_end, 2, "0", STR_PAD_LEFT);
            $query="AND STR_TO_DATE(recorded_time,'%Y-%m-%d')>='$start_date' AND STR_TO_DATE(recorded_time,'%Y-%m-%d')<='$end_date'";
        }else if($request->period=='EOM'){
            $start=date('Y-m-d',strtotime($date_start));
            $end=date('Y-m-d',strtotime($date_end));

            $startdisp=date('d',strtotime($date_start));
            $enddisp=date('d',strtotime($date_end));
            $query="AND DAY(recorded_time) BETWEEN '$startdisp' AND '$enddisp'";
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
        $ins_regnpot=0;
        $ins_regnp2ot=0;
        $ins_rdshot=0;
        $ins_rdsh2ot=0;
        $ins_shrdnp=0;
        $ins_shrdnpot=0;
        $ins_rhnpot=0;
        $ins_rhnp2ot=0;
        $ins_rhrdotnp=0;
        $ins_rhrd2ot=0;
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
        
        $adjustment=AdjustmentDetails::join('adjustment_head','adjustment_head.id','=','adjustment_details.adjustment_id')->where('employee_id',$get_data->id)->where('month_year',$month_year)->where('period_type',$request->period)->get(['adjustment_details.id','description','amount','days_hr','total_amount','employee_id']);
        $adjustment_count=AdjustmentDetails::join('adjustment_head','adjustment_head.id','=','adjustment_details.adjustment_id')->where('employee_id',$get_data->id)->where('month_year',$month_year)->where('period_type',$request->period)->count();

        $month=date('m',strtotime($month_year));
        $endmonth=date('m',strtotime($end));
        $year=date('Y',strtotime($month_year));
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in,schedule_type FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE t.personal_id='$get_data->personal_id' AND (MONTH(recorded_time)='$month' OR MONTH(recorded_time)='$endmonth') AND YEAR(recorded_time)='$year' $query GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
        $data2 = array();
        foreach($timedate AS $value){
            $key = date('Y-m-d',strtotime($value->recorded_time));
            if(!isset($data2[$key])) {   
                $data2[$key] = array(
                    'personal_id'=>$value->personal_id,
                    'time_in'=>$value->time_in,
                    'rec_time'=>$value->recorded_time,
                    'schedule_type'=>$value->schedule_type,
                    'recorded_time' => array(),
                    'recorded_date' => array(),
                );
            }        
            $data2[$key]['recorded_time'][] = date('Y-m-d H:i',strtotime($value->recorded_time)).",";  
            $data2[$key]['recorded_date'][] = date('Y-m-d',strtotime($value->recorded_time)).",";  
        }
        $total_hours=[];
        $total_min=[];
        $total_mins=[];
        $overall_time=[];
        $hours=[];
        $minutes=[];
        $date=[];
        $tardy=[];
        $x=0;
        foreach($data2 AS $logs){
            if($logs['schedule_type']=='Regular'){
                $exp=implode("",$logs['recorded_time']);
                $exp_time = explode(',', $exp); 
                $timecheck=date('Hi',strtotime($logs['time_in']));
                if(date('Hi',strtotime($exp_time[0]))>=$timecheck){
                    $timedisp=$exp_time[0];
                }else {
                    $timedisp=date('Y-m-d',strtotime($exp_time[0]))." ".$logs['time_in'];
                }
                $date1 = new \DateTime($timedisp);
                $date2 = new \DateTime($exp_time[1]);
                $interval = $date2->diff($date1);
                $hours[]   = $interval->format('%h'); 
                $minutes[] = $interval->format('%i');
                $expdate=implode("",$logs['recorded_date']);
                $exp_date = explode(',', $expdate); 
                $date[$x]=$exp_date[0];
                $x++;
            }else if($logs['schedule_type']=='Shifting'){
                $timein_shift = date('H:i',strtotime(getMintimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $intime = date('Hi',strtotime(getMintimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $intimemax = date('H',strtotime(getMaxtimein($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $timeout_shift = date('Y-m-d H:i',strtotime(getMintimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $outtime = date('Hi',strtotime(getMintimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $outtimemax = date('Hi',strtotime(getMaxtimeout($logs['schedule_type'],$logs['rec_time'],$logs['personal_id'])));
                $exp=implode("",$logs['recorded_time']);
                $exp_time = explode(',', $exp);
                $nightHoursPerDay=0;
                if($intime<='0600' && ($intime<='1359' || $intime<='1459')) { 
                    $timein=$exp_time[0];
                    $timeout=$exp_time[1];
                    $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                }else if(($intime>='1359' || $intime>='1459') && $intime<='2200' && $exp_time[1]!='') { 
                    $timein=$exp_time[0];
                    $timeout=$exp_time[1];
                    $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                }else if($intimemax<='22' || $intime<='0600') { 
                    if($exp_time[0]!='' && $exp_time[1]==''){
                        $timein=$exp_time[0];
                        $timeout=$timeout_shift;
                        if($timeout!='00:00'){
                            if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                            }else{
                                $sched_time=date('Y-m-d',strtotime($timein)).' 22:00';
                            }
                            $nightHoursPerDay = date('H',strtotime($timeout)) + ( 24 - date('H',strtotime($sched_time)));
                        }else{
                            $sched_time='00-00-0000 00:00';
                        }
                    }else if($exp_time[0]!='' && $exp_time[1]!='' && $intimemax>='06' && $outtimemax>='2200'){
                        $timein=$exp_time[0];
                        $timeout=$exp_time[1];
                        if($timeout!='00:00'){
                            if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                            }else{
                                $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                            }
                        }else{
                            $sched_time='00:00';
                        }
                    }else{
                        if((date('Hi',strtotime($exp_time[1]))<='1359' || date('Hi',strtotime($exp_time[1]))<='1459')){
                            $timein=$exp_time[0];
                            $timeout=$exp_time[1];
                        }else{
                            $timein=$exp_time[1];
                            $timeout=$timeout_shift;
                        }
                        if($timeout!='00:00'){
                            if(date('Hi',strtotime($timein))<='0600' || date('Hi',strtotime($timein))<='0659'){
                                $sched_time=date('Y-m-d',strtotime($timein)).' 06:00';
                            }else if(date('Hi',strtotime($timein))<='1359' || date('Hi',strtotime($timein))<='1459'){
                                $sched_time=date('Y-m-d',strtotime($timein)).' 14:00';
                            }else{
                                $sched_time=date('Y-m-d',strtotime($timein)).' 22:00';
                            }
                            $nightHoursPerDay = date('H',strtotime($timeout)) + ( 24 - date('H',strtotime($sched_time)));
                        }else{
                            $sched_time='00-00-0000 00:00';
                        }
                    }
                }
                if(date('Hi',strtotime($timein))>='0615' && date('Hi',strtotime($timein))<='1400' && date('Hi',strtotime($timein))<='2259'){
                    $timedisp=$timein;
                }else{
                    $timedisp='00:00';
                }

                if(date('Hi',strtotime($timein))>='1415' && (date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }else{
                    $timedisp='00:00';
                }

                if((date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }else{
                    $timedisp='00:00';
                }
                // $date1 = \DateTime::createFromFormat('Y-m-d H:i', $timedisp);
                // $date2 = \DateTime::createFromFormat('Y-m-d H:i', $timeout);
                // $interval = $date1->diff($date2);
                // $hours[] = $interval->h;
                // $minutes[] = $interval->i;
            }
            $check=date('H:i',strtotime($timedisp));
            if($check>$logs['time_in']){
                $start = strtotime($logs['time_in']);
                $end = strtotime($check);
                $diff = ($end - $start);
                $tardy[]=gmdate("H.i",$diff);
            }
            //echo gmdate("H.i",$diff)."-".$check."<br>";
        }
        $tardy_disp=array_sum($tardy);
        return view('ot_site.index',compact('cutoff','employees','employee_id','designation_disp','overtime','daily_rate','salary','restday','special_holiday','special_holiday_restday','regular_holiday','reg_holiday_rd','RD','ins_shot','ins_shrdot','ins_rhot','ins_rhrdot','absence_count','undertime_disp','personal_id','reg_otcalc','ins_regot','sh_otcalc','rhrd_otcalc','reg_np','ins_regnpot','reg_np_ot','ins_regnp2ot','rdsh_np','ins_rdshot','rdsh_np_ot','ins_rdsh2ot','shrd_np','ins_shrdnp','shrd_np_ot','ins_shrdnpot','rh_np','ins_rhnpot','rh_np_ot','ins_rhnp2ot','rhrd_np','ins_rhrdotnp','rhrd_np_ot','ins_rhrd2ot','adjustment','adjustment_count','tardy_disp','location_id'));
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
        if(!isset($request->counterY) || $request->counterY == ''){
            if($request->counter==0) $ctrx = 1;
            else $ctrx = $request->counter;
        } 
        else{
            $ctrx = $request->counterY;
        }
        $head=AdjustmentHead::updateOrCreate([
            'employee_id'=> $request->employee_id,
            'location_id'=> $request->location_id,
            'personal_id'=> $request->personal_id,
            'period_type'=> $request->period_type,
            'month_year'=> $request->month_year,
        ]);
        if($head){
            $adjustment_id=AdjustmentHead::max('id');
            $adjustment_det_id=AdjustmentDetails::max('id');
            foreach($request->description AS $key => $value){
                if(empty($request->adjustment_det_id) || $request->adjustment_det_id[$key]==''){
                    $res=AdjustmentDetails::updateOrCreate([
                        'id'=> $adjustment_det_id,
                        'adjustment_id'=> $adjustment_id,
                        'description'=> (!empty($request->description[$key])) ? $request->description[$key] : '',
                        'amount'=> (!empty($request->amount[$key])) ? $request->amount[$key] : '0',
                        'days_hr'=> (!empty($request->days_hr[$key])) ? $request->days_hr[$key] : '0',
                        'total_amount'=> (!empty($request->total_amount[$key])) ? $request->total_amount[$key] : '0',
                    ]);
                }else{
                    if($ctrx==$request->counter && $request->adjustment_det_id[$key]!=''){
                        $res = AdjustmentDetails::where("id",$request->adjustment_det_id[$key]);
                        $res->update(
                            [
                                'description'=> (!empty($request->description[$key])) ? $request->description[$key] : '',
                                'amount'=> (!empty($request->amount[$key])) ? $request->amount[$key] : '0',
                                'days_hr'=> (!empty($request->days_hr[$key])) ? $request->days_hr[$key] : '0',
                                'total_amount'=> (!empty($request->total_amount[$key])) ? $request->total_amount[$key] : '0',
                            ]
                        );
                    }else if($ctrx>$request->counter && $request->adjustment_det_id[$key]==''){
                        $res=AdjustmentDetails::updateOrCreate(
                            [
                                'adjustment_id'=> $adjustment_id,
                                'description'=> (!empty($request->description[$key])) ? $request->description[$key] : '',
                                'amount'=> (!empty($request->amount[$key])) ? $request->amount[$key] : '0',
                                'days_hr'=> (!empty($request->days_hr[$key])) ? $request->days_hr[$key] : '0',
                                'total_amount'=> (!empty($request->total_amount[$key])) ? $request->total_amount[$key] : '0',
                            ]
                        );
                    }
                }
            }
            if($res) {  
                return redirect()->route('otSite.index')->with('success',"Adjustments Added Successfully");
            }else{
                return redirect()->route('otSite.index')->with('fail',"Error! Try Again!");
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function show(OTsite $oTsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function edit(OTsite $oTsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OTsite $oTsite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,$emp_id)
    {
        AdjustmentDetails::find($id)->delete();
        return redirect()->route('otSite.index')->with('success',"Adjustment Deleted Successfully");
    }
}

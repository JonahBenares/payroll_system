<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\CutOff;
use App\Models\Timekeeping;
use App\Models\Schedule;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OvertimeController extends Controller
{

    public static function AddPlayTime($times) {
        $minutes = 0; //declare minutes either it gives Notice: Undefined variable
        // loop throught all the times
        foreach ($times as $time) {
            list($hour, $minute) = explode(':', $time);
            $minutes += $hour * 60;
            $minutes += $minute;
        }
    
        $hours = floor($minutes / 60);
        $minutes -= $hours * 60;
    
        // returns the time already formatted
        return sprintf('%02d.%02d', $hours, $minutes);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $cutoff=CutOff::all();
        return view('overtime.index',compact('cutoff'));
    }

    // public static function getMintimein($schedule_type,$recorded_time,$personal_id){
    //     if($schedule_type=='Shifting'){
    //         $date=date('Y-m-d',strtotime($recorded_time));
    //         $getmintimein=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date)->min('recorded_time');
    //         return $getmintimein;
    //     }  
    // }

    // public static function getMintimeout($schedule_type,$recorded_time,$personal_id){
    //     if($schedule_type=='Shifting'){
    //         $date2=date('Y-m-d',strtotime($recorded_time." + 1 day"));
    //         $getmintimeout=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date2)->min('recorded_time');
    //         return $getmintimeout;
    //     }  
    // }

    public function filter_overtime(Request $request){
        if(isset($request->month) && isset($request->year)){
            $month=$request->month;
            $year=$request->year;
        }else{
            $month=date('m');
            $year=date('Y');
        }
        if(isset($request->period) && !empty($request->period)){
            $period=$request->period;
            $exp_type=explode('|',$period);
            $exp_period=$exp_type[0];

            if($exp_period=='MID'){
                $exp_d=explode('-',$exp_type[1]);
                $end_date=$year."-".$month."-".$exp_d[1];
                $inc_month=date('m',strtotime($end_date." +1 Months"));
                if($month=='12'){
                    $inc_year=date('Y',strtotime($end_date." +1 year"));
                }else{
                    $inc_year=$year;
                }
                $padded_day1 = str_pad($exp_d[0], 2, "0", STR_PAD_LEFT);
                $padded_day2 = str_pad($exp_d[1], 2, "0", STR_PAD_LEFT);
                $exp_date1=$year."-".$month."-".$padded_day1;
                $exp_date2=$inc_year."-".$inc_month."-".$padded_day2;
                $added_month=date('m',strtotime($exp_date2));
            }else if($exp_period=='EOM'){
                $exp_d=explode('-',$exp_type[1]);
                $padded_day1 = str_pad($exp_d[0], 2, "0", STR_PAD_LEFT);
                $padded_day2 = str_pad($exp_d[1], 2, "0", STR_PAD_LEFT);
                $exp_date1=$year."-".$month."-".$padded_day1;
                $exp_date2=$year."-".$month."-".$padded_day2;
                $added_month=date('m',strtotime($exp_date2));
            }
        }else{
            $period='';
            $exp_date1='';
            $exp_date2='';
            $exp_period='';
        }
       
        $timekeeping = Timekeeping::join('db_payroll.employees', 'db_payroll.employees.personal_id', '=', 'db_hris.timekeeping.personal_id')->select('db_payroll.employees.id', 'db_payroll.employees.personal_id','db_payroll.employees.full_name', 'db_hris.timekeeping.recorded_time', DB::raw('GROUP_CONCAT(db_hris.timekeeping.recorded_time ORDER BY db_hris.timekeeping.recorded_time ASC) as in_out_time'))->where('supervisory','0')->where('is_active','1')->whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->groupBy('db_payroll.employees.personal_id')->get();
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in,schedule_type FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE (MONTH(recorded_time)='$month' OR MONTH(recorded_time)='$added_month') AND YEAR(recorded_time)='$year' AND recorded_time BETWEEN '$exp_date1' AND '$exp_date2' GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
        $getmintimein=[];
        $getmintimeout=[];
        $x=0;
        $overtime_sum=[];
        $overtime_amount=[];
        foreach($timekeeping AS $t){
            $overtime_sum[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('payroll_period',$exp_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum(\DB::raw('IFNULL(reg_day_hr,0) + IFNULL(RD_HR,0) + IFNULL(SH_RD_HR,0) + IFNULL(SH_HR,0) + IFNULL(RH_HR,0) + IFNULL(RH_RD_HR,0) + IFNULL(reg_day_np_hr,0) + IFNULL(reg_np_ot_hr,0) + IFNULL(SH_RD_NP_HR,0) + IFNULL(SH_OT_NP_HR,0) + IFNULL(SH_RD_OT_NP_HR,0) + IFNULL(RH_NP_HR,0) + IFNULL(RH_RD_NP_HR,0) + IFNULL(RH_RD_OT_NP_HR,0) + IFNULL(RH_OT_NP_HR,0) + IFNULL(RD_SH_NP_HR,0) + IFNULL(RD_SH_NP_OT_HR,0)'));
            $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('payroll_period',$exp_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum('total_amount');
            $x++;
        }
        $cutoff=CutOff::all();
        return view('overtime.index',compact('timekeeping','timedate','cutoff','exp_period','month','year','overtime_sum','overtime_amount','getmintimein','getmintimeout'));

        //$timekeeping=Timekeeping::whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->get();

        // $timekeeping=Timekeeping::whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->get();
        // $employees=Employee::where('supervisory','0')->where('is_active','1')->get();
        // $x=0;
        // $overtime_sum=[];
        // $overtime_amount=[];
        // foreach($timekeeping AS $t){
            
        //     $overtime_sum[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum(\DB::raw('IFNULL(reg_day_hr,0) + IFNULL(RD_HR,0) + IFNULL(SH_RD_HR,0) + IFNULL(SH_HR,0) + IFNULL(RH_HR,0) + IFNULL(RH_RD_HR,0) + IFNULL(reg_day_np_hr,0) + IFNULL(reg_np_ot_hr,0) + IFNULL(SH_RD_NP_HR,0) + IFNULL(SH_OT_NP_HR,0) + IFNULL(SH_RD_OT_NP_HR,0) + IFNULL(RH_NP_HR,0) + IFNULL(RH_RD_NP_HR,0) + IFNULL(RH_RD_OT_NP_HR,0) + IFNULL(RH_OT_NP_HR,0) + IFNULL(RD_SH_NP_HR,0) + IFNULL(RD_SH_NP_OT_HR,0)'));
        //     $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('month_year','LIKE','%'.$year."-".$month.'%')->first('total_amount');
        //     $x++;
        // }

        // $timedate=Timekeeping::whereMonth('recorded_time',$month)->whereOr(DB::RAW('month(recorded_time)'), $added_month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->get();
        // foreach($timedate AS $td){
        //     $schedule=Schedule::join('schedule_head', 'schedule_head.schedule_code', '=', 'schedule_code.id')->where('personal_id',$td->personal_id)->value('time_in');
        // }
       
        // $cutoff=CutOff::all();
        
        // return view('overtime.index',compact('timekeeping','employees','timedate','cutoff','exp_period','month','year','overtime_sum','overtime_amount','schedule'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $personal_id = $request->personal_id;
        $overtime_date = $request->overtime_date;
        $exp_date=explode('-',$request->month_year);
        $query='';
        if($request->period=='MID'){
            $add_month=$exp_date[1]+1;
            if($exp_date[1]=='12'){
                $add_year=$exp_date[0]+1;
            }else{
                $add_year=$exp_date[0];
            }
            $cutoff_start=CutOff::where('cutoff_type','MID')->value('cutoff_start');
            $cutoff_end=CutOff::where('cutoff_type','MID')->value('cutoff_end');
            $start_date=str_pad($exp_date[0], 2, "0", STR_PAD_LEFT)."-".str_pad($exp_date[1], 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_start, 2, "0", STR_PAD_LEFT);
            $end_date=str_pad($add_year, 2, "0", STR_PAD_LEFT)."-".str_pad($add_month, 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_end, 2, "0", STR_PAD_LEFT);
            $query="AND recorded_time>='$start_date' AND recorded_time<='$end_date'";
        }else{
            $add_month=$exp_date[1];
            $add_year=$exp_date[0];
            $cutoff_start=CutOff::where('cutoff_type','EOM')->value('cutoff_start');
            $cutoff_end=CutOff::where('cutoff_type','EOM')->value('cutoff_end');
            $query="AND DAY(recorded_time) BETWEEN '$cutoff_start' AND '$cutoff_end'";
        }

        $get_data=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$request->employee_id)->where('personal_id',$request->personal_id)->where('month_year','LIKE','%'.$request->month_year.'%')->where('overtime_date',$request->overtimedate)->first();
      
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in,schedule_type FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE t.personal_id='$personal_id' AND (MONTH(recorded_time)='$exp_date[1]' OR MONTH(recorded_time)='$add_month]') AND (YEAR(recorded_time)='$exp_date[0]' OR YEAR(recorded_time)='$add_year') $query GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
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
        $x=0;
        foreach($data2 AS $logs){
            if($logs['schedule_type']=='Regular'){
                $exp=implode("",$logs['recorded_time']);
                $exp_time = explode(',', $exp); 
                //$timedisp= date('Y-m-d',strtotime($exp_time[0]))." ".$logs['time_in'];
                $timecheck=date('Hi',strtotime($logs['time_in']));
                if(date('Hi',strtotime($exp_time[0]))>=$timecheck){
                    $timedisp=$exp_time[0];
                }else {
                    $timedisp=date('Y-m-d',strtotime($exp_time[0]))." ".$logs['time_in'];
                }
                $date1 = new \DateTime($timedisp);
                $date2 = new \DateTime($exp_time[1]);
                $interval = $date2->diff($date1);
                $hours[$x]   = $interval->format('%h'); 
                $minutes[$x] = $interval->format('%i');

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
                
                // $date1 = new \DateTime($sched_time);
                // $date2 = new \DateTime($timeout);
                // $interval = $date2->diff($date1);
                // $hours[$x]   = ($nightHoursPerDay==0) ? $interval->format('%h') : $nightHoursPerDay; 
                // $minutes[$x] = $interval->format('%i');
                if(date('Hi',strtotime($timein))<='0615' && date('Hi',strtotime($timein))<='1459'){
                    $timedisp=$sched_time;
                }else if(date('Hi',strtotime($timein))>='0615' && date('Hi',strtotime($timein))<='1400' && date('Hi',strtotime($timein))<='2259'){
                    $timedisp=$timein;
                }

                if(date('Hi',strtotime($timein))<='1415' && date('Hi',strtotime($timein))>='0659'){
                    $timedisp=$sched_time;
                }else if(date('Hi',strtotime($timein))>='1415' && (date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }

                if((date('Hi',strtotime($timein))<='2159' || date('Hi',strtotime($timein))<='2259') && date('Hi',strtotime($timein))>='1459'){
                    $timedisp=$sched_time;
                }else if((date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }
                $date1 = \DateTime::createFromFormat('Y-m-d H:i', $timedisp);
                $date2 = \DateTime::createFromFormat('Y-m-d H:i', $timeout);
                $interval = $date1->diff($date2);
                $hours[$x] = $interval->h;
                $minutes[$x] = $interval->i;
                $expdate=implode("",$logs['recorded_date']);
                $exp_date = explode(',', $expdate); 
                $date[$x]=$exp_date[0];
                $x++;   
            }
        }
        return view('overtime.create',compact('get_data','data2','hours','minutes','date'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $get_data=Employee::where('personal_id',$request->personal_id)->first();
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

        //OVERTIME
        if(!empty($request->reg_day)){
            $ins_regot=$reg_otcalc * $request->reg_day;
        }else{
            $ins_regot=0;
        }

        if(!empty($request->rd2)){
            $ins_rd2ot=$rd_otcalc * $request->rd2;
        }else{
            $ins_rd2ot=0;
        }

        if(!empty($request->sh)){
            $ins_shot=$sh_otcalc * $request->sh;
        }else{
            $ins_shot=0;
        }

        if(!empty($request->sh_rd)){
            $ins_shrdot=$shrd_otcalc * $request->sh_rd;
        }else{
            $ins_shrdot=0;
        }

        if(!empty($request->reg_hol)){
            $ins_rhot=$rh_otcalc * $request->reg_hol;
        }else{
            $ins_rhot=0;
        }

        if(!empty($request->rh_rd)){
            $ins_rhrdot=$rhrd_otcalc * $request->rh_rd;
        }else{
            $ins_rhrdot=0;
        }

        // NIGHT PREMIUM
        if(!empty($request->reg_np)){
            $ins_regnpot=$reg_np * $request->reg_np;
        }else{
            $ins_regnpot=0;
        }

        if(!empty($request->regnp_ot)){
            $ins_regnp2ot=$reg_np_ot * $request->regnp_ot;
        }else{
            $ins_regnp2ot=0;
        }

        if(!empty($request->regsh_np)){
            $ins_rdshot=$rdsh_np * $request->regsh_np;
        }else{
            $ins_rdshot=0;
        }

        if(!empty($request->rd2sh_ot)){
            $ins_rdsh2ot=$rdsh_np_ot * $request->rd2sh_ot;
        }else{
            $ins_rdsh2ot=0;
        }

        if(!empty($request->shonrd2_np)){
            $ins_shrdnp=$shrd_np * $request->shonrd2_np;
        }else{
            $ins_shrdnp=0;
        }

        if(!empty($request->shonrd2_npot)){
            $ins_shrdnpot=$shrd_np_ot * $request->shonrd2_npot;
        }else{
            $ins_shrdnpot=0;
        }

        if(!empty($request->rh_np)){
            $ins_rhnpot=$rh_np * $request->rh_np;
        }else{
            $ins_rhnpot=0;
        }

        if(!empty($request->rhnp_ot)){
            $ins_rhnp2ot=$rh_np_ot * $request->rhnp_ot;
        }else{
            $ins_rhnp2ot=0;
        }

        if(!empty($request->rhrd_np)){
            $ins_rhrdotnp=$rhrd_np * $request->rhrd_np;
        }else{
            $ins_rhrdotnp=0;
        }

        if(!empty($request->rhrd2_ot)){
            $ins_rhrd2ot=$rhrd_np_ot * $request->rhrd2_ot;
        }else{
            $ins_rhrd2ot=0;
        }

        $count_rows=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$request->employee_id)->where('personal_id',$request->personal_id)->where('month_year','LIKE','%'.$request->month_year.'%')->where('overtime_date',$request->overtime_date)->count();
        $total_amount=$ins_regot+$ins_rd2ot+$ins_shrdot+$ins_rhot+$ins_rhrdot+$ins_regnpot+$ins_regnp2ot+$ins_rdshot+$ins_rdsh2ot+$ins_rhnpot+$ins_shrdnp+$ins_shrdnpot+$ins_rhnp2ot+$ins_rhrdotnp+$ins_rhrd2ot + $ins_shot;
        $res='';
        $res_update='';

        if($count_rows==0){
            $create=Overtime::create([
                'month_year'=> $request->month_year,
                'payroll_period'=> $request->period,
            ]);
            $lastInsertID = $create->id;
            $res=OvertimeDetails::create([
                'employee_id'=> $request->employee_id,
                'personal_id'=> $request->personal_id,
                'overtime_date'=> $request->overtime_date,
                'ot_head_id'=> $lastInsertID,
                'hourly_rate'=> $get_data->hourly_rate,
                'reg_day'=> $ins_regot,
                'RD'=> $ins_rd2ot,
                'SH'=> $ins_shot,
                'SH_RD'=> $ins_shrdot,
                'RH'=> $ins_rhot,
                'RH_RD'=> $ins_rhrdot,
                'reg_day_np'=> $ins_regnpot,
                'reg_np_ot'=> $ins_regnp2ot,
                'SH_RD_NP'=> $ins_shrdnp,
                'SH_RD_OT_NP'=> $ins_shrdnpot,
                'RD_SH_NP'=> $ins_rdshot,
                'RD_SH_NP_OT'=> $ins_rdsh2ot,
                'SH_OT_NP'=> 0,
                'RH_NP'=> $ins_rhnpot,
                'RH_OT_NP'=> $ins_rhnp2ot,
                'RH_RD_NP'=> $ins_rhrdotnp,
                'RH_RD_OT_NP'=> $ins_rhrd2ot,
                'reg_day_hr'=> $request->reg_day,
                'RD_HR'=> $request->rd2,
                'SH_HR'=> $request->sh,
                'SH_RD_HR'=> $request->sh_rd,
                'RH_HR'=> $request->reg_hol,
                'RH_RD_HR'=> $request->rh_rd,
                'reg_day_np_hr'=> $request->reg_np,
                'reg_np_ot_hr'=> $request->regnp_ot,
                'SH_RD_NP_HR'=> $request->shonrd2_np,
                'SH_RD_OT_NP_HR'=> $request->shonrd2_npot,
                'RD_SH_NP_HR'=> $request->regsh_np,
                'RD_SH_NP_OT_HR'=> $request->rd2sh_ot,
                'SH_OT_NP_HR'=> 0,
                'RH_NP_HR'=> $request->rh_np,
                'RH_OT_NP_HR'=> $request->rhnp_ot,
                'RH_RD_NP_HR'=> $request->rhrd_np,
                'RH_RD_OT_NP_HR'=> $request->rhrd2_ot,
                'total_amount'=> $total_amount,
            ]);
        }else{
            $overtimedet = OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$request->employee_id)->where('personal_id',$request->personal_id)->where('month_year','LIKE','%'.$request->month_year.'%')->where('ot_head_id',$request->ot_head_id);
            $res_update=$overtimedet->update([
                'overtime_date'=> $request->overtime_date,
                'hourly_rate'=> $get_data->hourly_rate,
                'reg_day'=> $ins_regot,
                'RD'=> $ins_rd2ot,
                'SH'=> $ins_shot,
                'SH_RD'=> $ins_shrdot,
                'RH'=> $ins_rhot,
                'RH_RD'=> $ins_rhrdot,
                'reg_day_np'=> $ins_regnpot,
                'reg_np_ot'=> $ins_regnp2ot,
                'SH_RD_NP'=> $ins_shrdnp,
                'SH_RD_OT_NP'=> $ins_shrdnpot,
                'RD_SH_NP'=> $ins_rdshot,
                'RD_SH_NP_OT'=> $ins_rdsh2ot,
                'SH_OT_NP'=> 0,
                'RH_NP'=> $ins_rhnpot,
                'RH_OT_NP'=> $ins_rhnp2ot,
                'RH_RD_NP'=> $ins_rhrdotnp,
                'RH_RD_OT_NP'=> $ins_rhrd2ot,
                'reg_day_hr'=> $request->reg_day,
                'RD_HR'=> $request->rd2,
                'SH_HR'=> $request->sh,
                'SH_RD_HR'=> $request->sh_rd,
                'RH_HR'=> $request->reg_hol,
                'RH_RD_HR'=> $request->rh_rd,
                'reg_day_np_hr'=> $request->reg_np,
                'reg_np_ot_hr'=> $request->regnp_ot,
                'SH_RD_NP_HR'=> $request->shonrd2_np,
                'SH_RD_OT_NP_HR'=> $request->shonrd2_npot,
                'RD_SH_NP_HR'=> $request->regsh_np,
                'RD_SH_NP_OT_HR'=> $request->rd2sh_ot,
                'SH_OT_NP_HR'=> 0,
                'RH_NP_HR'=> $request->rh_np,
                'RH_OT_NP_HR'=> $request->rhnp_ot,
                'RH_RD_NP_HR'=> $request->rhrd_np,
                'RH_RD_OT_NP_HR'=> $request->rhrd2_ot,
                'total_amount'=> $total_amount,
            ]);
        }
        if($res){
            return redirect()->route('ot.create',['employee_id'=>$request->employee_id,'personal_id'=>$request->personal_id, 'month_year'=>$request->month_year,'period'=>$request->period,'overtimedate'=>$request->overtime_date])->with('success',"Overtime Added Successfully");
        }else if($res_update){
            return redirect()->route('ot.create',['employee_id'=>$request->employee_id,'personal_id'=>$request->personal_id, 'month_year'=>$request->month_year,'period'=>$request->period,'overtimedate'=>$request->overtime_date])->with('success',"Overtime Updated Successfully");
        }else{
            return redirect()->route('ot.create',['employee_id'=>$request->employee_id,'personal_id'=>$request->personal_id, 'month_year'=>$request->month_year,'period'=>$request->period,'overtimedate'=>$request->overtime_date])->with('fail',"Error! Try Again!");
        }
    }

    public function fetchTime(Request $request)
    {
        $personal_id = $request->personal_id;
        $overtime_date = $request->overtime_date;
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in,schedule_type FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE t.personal_id='$personal_id' AND recorded_time LIKE '%$overtime_date%' GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
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
                );
            }        
            $data2[$key]['recorded_time'][] = date('Y-m-d H:i',strtotime($value->recorded_time)).",";  
        }
        $total_hours=[];
        $total_min=[];
        $total_mins=[];
        $overall_time=[];
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
                $hours   = $interval->format('%h'); 
                $minutes = $interval->format('%i');
                if($hours>=9 && $minutes>=30){
                    $total_hours[]=$interval->format("%H")*60 - 540;
                    $total_min[]=$interval->format("%i");
                    $total_mins[]=$interval->format("%H:%i");
                }else if($hours>=10){
                    $total_hours[]=$interval->format("%H")*60 - 540;
                    $total_min[]=$interval->format("%i");
                    $total_mins[]=$interval->format("%H:%i");
                }
                $timein=$exp_time[0];
                $timeout=$exp_time[1];
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
                if(date('Hi',strtotime($timein))<='0615' && date('Hi',strtotime($timein))<='1459'){
                    $timedisp=$sched_time;
                }else if(date('Hi',strtotime($timein))>='0615' && date('Hi',strtotime($timein))<='1400' && date('Hi',strtotime($timein))<='2259'){
                    $timedisp=$timein;
                }

                if(date('Hi',strtotime($timein))<='1415' && date('Hi',strtotime($timein))>='0659'){
                    $timedisp=$sched_time;
                }else if(date('Hi',strtotime($timein))>='1415' && (date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }

                if((date('Hi',strtotime($timein))<='2159' || date('Hi',strtotime($timein))<='2259') && date('Hi',strtotime($timein))>='1459'){
                    $timedisp=$sched_time;
                }else if((date('Hi',strtotime($timein))>='2159' || date('Hi',strtotime($timein))>='2259')){
                    $timedisp=$timein;
                }
                $date1 = \DateTime::createFromFormat('Y-m-d H:i', $timedisp);
                $date2 = \DateTime::createFromFormat('Y-m-d H:i', $timeout);
                $interval = $date1->diff($date2);
                $hours    = $interval->h;
                $minutes = $interval->i;
                if($hours>=8 && $minutes>=30){
                    $total_hours[]=$interval->h * 60 - 480;
                    $total_min[]=$interval->i;
                }else if($hours>=10){
                    $total_hours[]=$interval->h * 60 - 480;
                    $total_min[]=$interval->i;
                }
                
                // $date1 = new \DateTime($sched_time);
                // $date2 = new \DateTime($timeout);
                // $interval = $date2->diff($date1);
                // $hours   = ($nightHoursPerDay==0) ? $interval->format('%h') : $nightHoursPerDay; 
                // $minutes = $interval->format('%i');
                // if($hours>=9 && $minutes>=30){
                //     $total_hours[]=$interval->format("%H")*60 - 540;
                //     $total_min[]=$interval->format("%i");
                // }else if($hours>=10){
                //     $total_hours[]=$interval->format("%H")*60 - 540;
                //     $total_min[]=$interval->format("%i");
                // }
            }
        }
        $total_timehour = array_sum($total_hours);
        $total_timemins = array_sum($total_min);
        $total_sumhour=$total_timehour / 60;
        $holiday=Holiday::where('holiday_date',$overtime_date)->first();
        $employees=Employee::where('personal_id',$personal_id)->first();
        $ot_head_id=OvertimeDetails::where('personal_id',$personal_id)->where('overtime_date',$overtime_date)->value('ot_head_id');
        $data=[
            'fullname' => $employees->full_name,
            'ot_head_id' => $ot_head_id,
            'time_in' => date('H:i',strtotime($timein)),
            'time_out' => date('H:i',strtotime($timeout)),
            'total_sumhour' => $total_sumhour,
            'total_timemins' => $total_timemins,
            'holiday' => (!empty($holiday)) ? $holiday->holiday_name : '',
        ];
        return response()->json($data);
        // if(!empty($total_min)){
        //     // echo 'Time In:'.$exp_time[0]." <br>Time Out:".$exp_time[1]." <br>Number of Hours: ".number_format(round(abs($total_sum),2),2)." hrs.";
        //     echo ($total_sumhour!=0) ? "Employee Name: ".$employees->full_name.'<br>Time In:'.$exp_time[0]." <br>Time Out:".$exp_time[1]." <br>Number of Hours: ".$total_sumhour." hr/s. & ".$total_timemins ." min/s." : "Employee Name: ".$employees->full_name.'<br>Time In:'.$exp_time[0]." <br>Time Out:".$exp_time[1]." <br>Number of Hours: ".$total_timemins ." min/s.";
        //     if(!empty($holiday)){
        //         echo "<br>Holiday: ".$holiday->holiday_name." | ".$holiday->holiday_type;
        //     }
        // }else{
        //     echo 'No OT Hours';
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function show(Overtime $overtime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function edit(Overtime $overtime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Overtime $overtime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Overtime  $overtime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Overtime $overtime)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Models\Holiday;
use App\Models\CutOff;
use App\Models\Timekeeping;
use App\Models\TimekeepingLogs;
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
                $inc_year='';
            }
        }else{
            $period='';
            $exp_date1='';
            $exp_date2='';
            $exp_period='';
            $inc_year='';
        }
        $timekeeping=TimekeepingLogs::join('schedule_head','schedule_head.employee_id','=','timekeeping_logs.employee_id')->join('schedule_code','schedule_code.id','=','schedule_head.schedule_code')->join('employees','employees.id','=','timekeeping_logs.employee_id')->where('supervisory','0')->whereOr('supervisory','')->where('is_active','1')->where('period',$exp_period)->where('month',$month)->where('year',$year)->whereBetween('log_date', [$exp_date1, $exp_date2])->groupBy('timekeeping_logs.personal_id')->orderBydesc('employees.personal_id')->get();
        $timedate=TimekeepingLogs::join('schedule_head','schedule_head.employee_id','=','timekeeping_logs.employee_id')->join('schedule_code','schedule_code.id','=','schedule_head.schedule_code')->join('employees','employees.id','=','timekeeping_logs.employee_id')->where('supervisory','0')->whereOr('supervisory','')->where('is_active','1')->where('period',$exp_period)->where('month',$month)->orWhere('month',$added_month)->where('year',$year)->orWhere('year',$inc_year)->whereBetween('log_date', [$exp_date1, $exp_date2])->orderBydesc('employees.personal_id')->get(['full_name','timekeeping_logs.night_shift','timekeeping_logs.personal_id','schedule_type','total_time','nd_hours','regular_hours']);
        // $getmintimein=[];
        // $getmintimeout=[];
        $x=0;
        $overtime_sum=[];
        $overtime_amount=[];
        $total_regular=[];
        $total_night=[];
        //$total_hours=[];
        //$total_min=[];
        //$overall_time=[];
        foreach($timedate AS $t){
            $overtime_sum[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('payroll_period',$exp_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum(\DB::raw('IFNULL(reg_day_hr,0) + IFNULL(RD_HR,0) + IFNULL(SH_RD_HR,0) + IFNULL(SH_HR,0) + IFNULL(RH_HR,0) + IFNULL(RH_RD_HR,0) + IFNULL(reg_day_np_hr,0) + IFNULL(reg_np_ot_hr,0) + IFNULL(SH_RD_NP_HR,0) + IFNULL(SH_OT_NP_HR,0) + IFNULL(SH_RD_OT_NP_HR,0) + IFNULL(RH_NP_HR,0) + IFNULL(RH_RD_NP_HR,0) + IFNULL(RH_RD_OT_NP_HR,0) + IFNULL(RH_OT_NP_HR,0) + IFNULL(RD_SH_NP_HR,0) + IFNULL(RD_SH_NP_OT_HR,0)'));
            $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('personal_id',$t->personal_id)->where('payroll_period',$exp_period)->where('month_year','LIKE','%'.$year."-".$month.'%')->sum('total_amount');
            $x++;
        }
        
        $cutoff=CutOff::all();
        return view('overtime.index',compact('timedate','timekeeping','cutoff','exp_period','month','year','overtime_sum','overtime_amount','total_regular','total_night'));
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
            $query="AND log_date>='$start_date' AND log_date<='$end_date'";
        }else{
            $add_month=$exp_date[1];
            $add_year=$exp_date[0];
            $cutoff_start=CutOff::where('cutoff_type','EOM')->value('cutoff_start');
            $cutoff_end=CutOff::where('cutoff_type','EOM')->value('cutoff_end');
            $query="AND DAY(log_date) BETWEEN '$cutoff_start' AND '$cutoff_end'";
        }

        $get_data=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$request->employee_id)->where('personal_id',$request->personal_id)->where('month_year','LIKE','%'.$request->month_year.'%')->where('overtime_date',$request->overtimedate)->first();
        $timedate = DB::select("SELECT * FROM timekeeping_logs t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE t.personal_id='$personal_id' AND period='$request->period' AND (MONTH(log_date)='$exp_date[1]' OR MONTH(log_date)='$add_month]') AND (YEAR(log_date)='$exp_date[0]' OR YEAR(log_date)='$add_year') $query GROUP BY t.personal_id,log_date ORDER BY log_date ASC");
        //$timedate=TimekeepingLogs::join('schedule_head','schedule_head.employee_id','=','timekeeping_logs.employee_id')->join('schedule_code','schedule_code.id','=','schedule_head.schedule_code')->where('timekeeping_logs.personal_id',$personal_id)->where('period',$request->period)->where('month',$exp_date[1])->orWhere('month',$add_month)->where('year',$exp_date[0])->orWhere('year',$add_year)->whereBetween('log_date', [$exp_date1, $exp_date2])->orderBydesc('employees.personal_id')->get(['full_name','timekeeping_logs.night_shift','timekeeping_logs.personal_id','schedule_type','total_time','nd_hours','regular_hours']);
        
        return view('overtime.create',compact('get_data','timedate'));
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
        //$timedate = DB::select("SELECT t.personal_id,log_date, GROUP_CONCAT(log_date) AS timer,t.time_in,schedule_type FROM timekeeping_logs t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE t.personal_id='$personal_id' AND log_date LIKE '%$overtime_date%' GROUP BY t.personal_id,log_date ORDER BY log_date ASC");
        
        $timedate=TimekeepingLogs::join('schedule_head','schedule_head.employee_id','=','timekeeping_logs.employee_id')->join('schedule_code','schedule_code.id','=','schedule_head.schedule_code')->where('timekeeping_logs.personal_id',$personal_id)->where('log_date',$overtime_date)->get(['timekeeping_logs.night_shift','schedule_type','total_time','nd_hours','regular_hours','timekeeping_logs.time_in','timekeeping_logs.time_out']);
        // $total_hours=[];
        // $total_min=[];
        // $total_mins=[];
        $time_difference=0;
        foreach($timedate AS $t){
            if($t->schedule_type=='regular'){
                $hours=date('H',strtotime($t->total_time));
                $minutes=date('i',strtotime($t->total_time));
                if($hours>=9 && $minutes>=30){
                    $time_difference+=$t->total_time*60-540;
                }else if($hours>=10){
                    $time_difference+=$t->total_time*60-540;   
                }
            }else if($t->schedule_type=='shifting'){
                if($t->night_shift==1){
                    $hours=date('H',strtotime($t->total_time));
                    $minutes=date('i',strtotime($t->total_time));
                    if($hours>=8 && $minutes>=30){
                        $time_difference+=$t->regular_hours;  
                    }else if($hours>=10){
                        $time_difference+=$t->regular_hours;  
                    } 
                }else{
                    $hours=date('H',strtotime($t->total_time));
                    $minutes=date('i',strtotime($t->total_time));
                    if($hours>=8 && $minutes>=30){
                        $time_difference+=$t->total_time*60-480;
                    }else if($hours>=10){
                        $time_difference+=$t->total_time*60-480;   
                    }
                }
            }
            
            $holiday=Holiday::where('holiday_date',$overtime_date)->first();
            $employees=Employee::where('personal_id',$personal_id)->first();
            $ot_head_id=OvertimeDetails::where('personal_id',$personal_id)->where('overtime_date',$overtime_date)->value('ot_head_id');
            if($t->night_shift==1){
                $time_calculation=number_format($time_difference,2);
            }else{
                $time_calculation=round(abs($time_difference) / 60,2);
            }

            $exp_timecalc=explode('.',$time_calculation);
            $time_hours=$exp_timecalc[0];
            $time_minute=$exp_timecalc[1];
            $data=[
                'fullname' => $employees->full_name,
                'ot_head_id' => $ot_head_id,
                'time_in' => date('H:i',strtotime($t->time_in)),
                'time_out' => date('H:i',strtotime($t->time_out)),
                'total_sumhour' =>$time_hours,
                'total_timemins' => $time_minute,
                'holiday' => (!empty($holiday)) ? $holiday->holiday_name : '',
            ];
        }
        
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

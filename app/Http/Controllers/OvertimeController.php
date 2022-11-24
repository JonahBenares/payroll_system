<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Models\CutOff;
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
            }else if($exp_period=='EOM'){
                $exp_d=explode('-',$exp_type[1]);
                $padded_day1 = str_pad($exp_d[0], 2, "0", STR_PAD_LEFT);
                $padded_day2 = str_pad($exp_d[1], 2, "0", STR_PAD_LEFT);
                $exp_date1=$year."-".$month."-".$padded_day1;
                $exp_date2=$year."-".$month."-".$padded_day2;
            }
        }else{
            $period='';
            $exp_date1='';
            $exp_date2='';
            $exp_period='';
        }
       
        $timekeeping = DB::table('db_hris.timekeeping')->join('db_payroll.employees', 'db_payroll.employees.personal_id', '=', 'db_hris.timekeeping.personal_id')->select('db_payroll.employees.id', 'db_payroll.employees.personal_id','db_payroll.employees.full_name', 'db_hris.timekeeping.recorded_time', DB::raw('GROUP_CONCAT(db_hris.timekeeping.recorded_time ORDER BY db_hris.timekeeping.recorded_time ASC) as in_out_time'))->where('supervisory','0')->where('is_active','1')->whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->groupBy('db_payroll.employees.personal_id')->get();
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE MONTH(recorded_time)='$month' AND YEAR(recorded_time)='$year' AND recorded_time BETWEEN '$exp_date1' AND '$exp_date2' GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
        $cutoff=CutOff::all();
        return view('overtime.index',compact('timekeeping','timedate','cutoff','exp_period','month','year'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('overtime.create');
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
        //Restday / Special Holiday
        $rdsh_otcalc=($daily_rate / 8 * 1.3) * 1.3;
        //Special Holiday
        $sh_otcalc=($daily_rate + $special_holiday) / 8 * 1.3;
        //Special Holiday on Restday
        $shrd_otcalc=($special_holiday_restday / 8) * 1.3;
        //Regular Holiday on Restday
        $rhrd_otcalc=($reg_holiday_rd / 8) * 1.3;
        //Regular Holiday
        $rh_otcalc=($daily_rate / 8) * 2.60;

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
            $ins_rd2ot=$rdsh_otcalc * $request->rd2;
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
            $ins_rhrdot=$rdsh_np * $request->rh_rd;
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
            $ins_rhrdot=$rhrd_np * $request->rhrd_np;
        }else{
            $ins_rhrdot=0;
        }

        if(!empty($request->rhrd2_ot)){
            $ins_rhrd2ot=$rhrd_np_ot * $request->rhrd2_ot;
        }else{
            $ins_rhrd2ot=0;
        }

        $create=Overtime::create([
            'month_year'=> $request->month_year,
            'payroll_period'=> $request->period,
        ]);
        $lastInsertID = $create->id;
        $total_amount=$ins_regot+$ins_rd2ot+$ins_shrdot+$ins_rhot+$ins_rhrdot+$ins_regnpot+$ins_regnp2ot+$ins_rdshot+$ins_rdsh2ot+$ins_rhnpot+$ins_shrdnp+$ins_shrdnpot+$ins_rhnp2ot+$ins_rhrdot+$ins_rhrd2ot;
        $res=OvertimeDetails::create([
            'employee_id'=> $request->employee_id,
            'personal_id'=> $request->personal_id,
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
            'RH_RD_NP'=> $ins_rhrdot,
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
            'RH_RD_NP_HR'=> $request->rhrd2_np,
            'RH_RD_OT_NP_HR'=> $request->rhrd2_ot,
            'total_amount'=> $total_amount,
        ]);
        // if($res){
        //     return redirect()->route('ot.index')->with('success',"Overtime Added Successfully");
        // }else{
        //     return redirect()->route('ot.index')->with('fail',"Error! Try Again!");
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

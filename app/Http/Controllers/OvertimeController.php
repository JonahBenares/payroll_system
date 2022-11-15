<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
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
    public function index()
    {
        if(isset($_GET['month']) && isset($_GET['year'])){
            $month=$_GET['month'];
            $year=$_GET['year'];
        }else{
            $month=date('m');
            $year=date('Y');
        }
        if(isset($_GET['period']) && !empty($_GET['period'])){
            $period=$_GET['period'];
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
       
        $timekeeping = DB::table('db_hris.timekeeping')->join('db_payroll.employees', 'db_payroll.employees.personal_id', '=', 'db_hris.timekeeping.personal_id')->select('db_hris.timekeeping.id', 'db_hris.timekeeping.personal_id','db_payroll.employees.full_name', 'db_hris.timekeeping.recorded_time', DB::raw('GROUP_CONCAT(db_hris.timekeeping.recorded_time ORDER BY db_hris.timekeeping.recorded_time ASC) as in_out_time'))->where('supervisory','0')->where('is_active','1')->whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->whereBetween('recorded_time', [$exp_date1, $exp_date2])->groupBy('db_payroll.employees.personal_id')->get();
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE MONTH(recorded_time)='$month' AND YEAR(recorded_time)='$year' AND recorded_time BETWEEN '$exp_date1' AND '$exp_date2' GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
        $cutoff=CutOff::all();
        return view('overtime.index',compact('timekeeping','timedate','cutoff'));
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
        $salary_hist = DB::table('db_hris.job_history')->where('personal_id',$request->personal_id)->limit(1)->orderBy('effective_date', 'DESC')->get('salary');
        foreach($salary_hist AS $shs){
            $salary=$shs->salary;
        }
        //Calculation For Rates
        //Daily Rate
        $daily_rate=$salary*12/313;
        //Regular Holiday
        $regular_holiday=$daily_rate;
        //Special Holiday
        $special_holiday=$daily_rate*0.30;
        //Special Holiday on Restday
        $special_holiday_restday=$daily_rate*1.50;
        //Regular Holiday on Restday
        $reg_holiday_rd=$daily_rate*2.60;
        //Restday
        $restday=$daily_rate*1.30;

        //Calculation Overtime
        //Regular OT
        $reg_otcalc=$daily_rate / 8 * 1.25;
        //Restday / Special Holiday
        $rdsh_otcalc=$daily_rate / 8 * 1.30 * 1.30;
        //Special Holiday on Restday
        $shrd_otcalc=$special_holiday_restday / 8 * 1.30;
        //Regular Holiday on Restday
        $rhrd_otcalc=$reg_holiday_rd / 8 * 1.30;
        //Regular Holiday
        $rh_otcalc=$daily_rate / 8 * 2.60;

        //Calculation Night Premium
        //Regular NP
        $reg_np=$daily_rate/ 8 * 0.1;
        //Regular NP OT
        $reg_np_ot=$reg_otcalc * 0.1;
        //Restday / Special Holiday NP
        $rdsh_np=$restday / 8 * 0.1;
        //Restday / Special Holiday NP OT
        $rdsh_np_ot=$rdsh_otcalc * 0.1;
        //Special Holiday on Restday
        $shrd_np=$special_holiday_restday / 8 * 0.1;
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
        echo $rhrd_np_ot;
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

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
        $period=$_GET['period'];
        $timekeeping = DB::table('db_hris.timekeeping')->join('db_payroll.employees', 'db_payroll.employees.personal_id', '=', 'db_hris.timekeeping.personal_id')->select('db_hris.timekeeping.id', 'db_hris.timekeeping.personal_id','db_payroll.employees.full_name', 'db_hris.timekeeping.recorded_time', DB::raw('GROUP_CONCAT(db_hris.timekeeping.recorded_time ORDER BY db_hris.timekeeping.recorded_time ASC) as in_out_time'))->where('supervisory','0')->where('is_active','1')->whereMonth('recorded_time',$month)->whereYear('recorded_time', $year)->groupBy('db_payroll.employees.personal_id')->get();
        $timedate = DB::select("SELECT t.personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer,time_in FROM db_hris.timekeeping t INNER JOIN schedule_head sh ON t.personal_id=sh.personal_id INNER JOIN schedule_code sc ON sh.schedule_code=sc.id WHERE MONTH(recorded_time)='10' AND YEAR(recorded_time)='2022' GROUP BY t.personal_id,recorded_time ORDER BY recorded_time ASC");
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
        DB::table('ot_head')->insert($data);
        DB::table('ot_details')->insert($data);
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

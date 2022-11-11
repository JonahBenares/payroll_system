<?php

namespace App\Http\Controllers;

use App\Models\Overtime;
use App\Models\Employee;
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
        // $timekeeping = DB::select("SELECT MIN(recorded_time) AS time_in, MAX(recorded_time) AS time_out, full_name  FROM db_payroll.employees e INNER JOIN db_hris.timekeeping t ON t.personal_id=e.personal_id WHERE MONTH(t.recorded_time)='10' AND YEAR(t.recorded_time)='2022' GROUP BY e.personal_id ORDER BY e.full_name ASC");
        // $employees=Employee::all()->sortBy('full_name');
        // $timekeeping = DB::select("SELECT GROUP_CONCAT(recorded_time) AS time, e.full_name,t.recorded_time,e.personal_id FROM db_payroll.employees e INNER JOIN db_hris.timekeeping t ON t.personal_id=e.personal_id WHERE MONTH(t.recorded_time)='10' AND YEAR(t.recorded_time)='2022'  ORDER BY t.recorded_time,t.personal_id ASC");

        $timekeeping = DB::table('db_hris.timekeeping')->join('db_payroll.employees', 'db_payroll.employees.personal_id', '=', 'db_hris.timekeeping.personal_id')->select('db_hris.timekeeping.id', 'db_hris.timekeeping.personal_id','db_payroll.employees.full_name', 'db_hris.timekeeping.recorded_time', DB::raw('GROUP_CONCAT(db_hris.timekeeping.recorded_time ORDER BY db_hris.timekeeping.recorded_time ASC) as in_out_time'))->where('supervisory','0')->where('is_active','1')->whereMonth('recorded_time','10')->whereYear('recorded_time', '2022')->groupBy('db_payroll.employees.personal_id')->get();
        // $timedate = DB::select("SELECT * FROM db_hris.timekeeping WHERE MONTH(recorded_time)='10' AND YEAR(recorded_time)='2022' ORDER BY recorded_time ASC");
        $timedate = DB::select("SELECT personal_id,recorded_time, GROUP_CONCAT(recorded_time) AS timer FROM db_hris.timekeeping t WHERE MONTH(recorded_time)='10' AND YEAR(recorded_time)='2022' GROUP BY personal_id,recorded_time ORDER BY recorded_time ASC");
        // $x=0;
        // $time_in=array();
        // $time_out=array();
        // $overall_time=array();
        // foreach($timekeeping AS $e){
        //     $time_in[$x] = DB::table('db_hris.timekeeping')->where('personal_id', '=', $e->personal_id)->whereMonth('recorded_time','10')->whereYear('recorded_time', '2022')->min('recorded_time');
        //     $time_out[$x] = DB::table('db_hris.timekeeping')->where('personal_id', '=', $e->personal_id)->whereMonth('recorded_time','10')->whereYear('recorded_time', '2022')->max('recorded_time');
        //     $x++;
        // }
        return view('overtime.index',compact('timekeeping','timedate'));
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

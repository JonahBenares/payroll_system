<?php

namespace App\Http\Controllers;

use App\Models\ChangeSchedule;
use App\Models\Schedule;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChangeScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $change_sched=ChangeSchedule::join('employees','employees.id','=','change_schedule.employee_id')->join('schedule_code','schedule_code.id','=','change_schedule.schedule_code')->where('cancel','0')->get(['change_schedule.id','month_year','date_applied','full_name','time_in','time_out','start_date','end_date']);
        return view('change_sched.index',compact('change_sched'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedule=Schedule::all();
        $employees=Employee::where('is_active','1')->orderBy('full_name','ASC')->get();
        return view('change_sched.create',compact('employees','schedule'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp=Employee::where('id',$request->employee)->where('is_active','1')->first();
        $month_year=$request->year."-".$request->month;
        $res=ChangeSchedule::create(
            [
                'date_applied'=> $request->date_applied,
                'employee_id'=> $request->employee,
                'personal_id'=> $emp->personal_id,
                'schedule_code'=> $request->schedule_code,
                'month_year'=> $month_year,
                'start_date'=> $request->start_date,
                'end_date'=> $request->end_date,
                'cancel'=> 0,
            ]
        );

        if($res) {  
            return redirect()->route('changeSched.create')->with('success',"Changed Schedule Successfully");
        }else{
            return redirect()->route('changeSched.create')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ChangeSchedule  $changeSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(ChangeSchedule $changeSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ChangeSchedule  $changeSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $change_schedule=ChangeSchedule::where('id',$id)->get();
        $schedule=Schedule::all();
        $employees=Employee::where('is_active','1')->orderBy('full_name','ASC')->get();
        return view('change_sched.edit',compact('change_schedule','schedule','employees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChangeSchedule  $changeSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $change_sched = ChangeSchedule::find($id);
        $month_year=$request->year."-".$request->month;
        $emp=Employee::where('id',$request->employee)->where('is_active','1')->first();
        $change_sched->update(
            [
                'date_applied' => $request->date_applied,
                'employee_id' => $request->employee,
                'personal_id' => $emp->personal_id,
                'month_year' => $month_year,
                'schedule_code' => $request->schedule_code,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'cancel'=> 0,
            ]
        );
        return redirect()->route('changeSched.edit',$id)->with('success',"Change Schedule Updated Successfully");
    }

    public function cancel_schedule(Request $request){
        $change_schedule = ChangeSchedule::find($request->checker_id);
        $change_schedule->update(
            [
                'cancel_date' => $request->cancel_date,
                'cancel_reason' => $request->cancel_reason,
                'cancel'=> 1,
            ]
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ChangeSchedule  $changeSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ChangeSchedule $changeSchedule)
    {
        //
    }
}

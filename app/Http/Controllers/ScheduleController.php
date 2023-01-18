<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Controllers\Controller;


class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sched = Schedule::all();
        return view ('schedule.index')->with('sched', $sched);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule=new Schedule();
        $schedule->schedule_code=$request->schedule_code;
        $schedule->time_in=$request->time_in;
        $schedule->time_out=$request->time_out;
        $res = $schedule->save();
        if($res){
            return redirect()->route('schedules.create')->with('success',"Schedule Added Successfully");
        }else{
            return redirect()->route('schedules.create')->with('fail',"Error! Try Again!");
        }
        //return redirect('schedules')->with('flash_message', 'Schedule Successfully Addedd!'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sched = Schedule::find($id);
        return view('schedule.show')->with('schedule', $sched);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sched = Schedule::find($id);
        return view('schedule.edit')->with('schedule', $sched);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sched = Schedule::find($id);
        $input = $request->all();
        $sched->update($input);
        return redirect()->route('schedules.edit',$id)->with('success',"Schedule Updated Successfully"); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Schedule::destroy($id);
        return redirect()->route('schedules.index')->with('success',"Schedule Deleted Successfully");
    }
}

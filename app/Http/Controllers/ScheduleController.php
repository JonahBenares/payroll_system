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
        $input = $request->all();
        Schedule::create($input);
        return redirect('schedules')->with('flash_message', 'Schedule Successfully Addedd!'); 
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
        return redirect('schedules')->with('flash_message', 'Schedule Successfully Updated!'); 
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
        return redirect('schedules')->with('flash_message', 'Schedule Successfully deleted!');
    }
}

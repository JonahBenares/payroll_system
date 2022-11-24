<?php

namespace App\Http\Controllers;

use App\Models\ShiftSchedule;
use App\Models\Schedule;
use App\Models\Employee;
use Illuminate\Http\Request;

class ShiftScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule=Schedule::all();
        $employees=Employee::all();
        return view("shift_sched.index", compact('schedule','employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schedule=Schedule::all();
        $employees=Employee::all();
        return view('shift_sched.create' , compact('schedule','employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShiftSchedule $shiftSchedule)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\LeaveFailure;
use Illuminate\Http\Request;

class LeaveFailureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("leave.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("leave.create");
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
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveFailure $leaveFailure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function edit(LeaveFailure $leaveFailure)
    {
        return view("leave.edit");

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeaveFailure $leaveFailure)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveFailure $leaveFailure)
    {
        //
    }
}

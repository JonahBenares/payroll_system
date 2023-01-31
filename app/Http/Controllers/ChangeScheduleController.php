<?php

namespace App\Http\Controllers;

use App\Models\ChangeSchedule;
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
        return view();git
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    public function edit(ChangeSchedule $changeSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ChangeSchedule  $changeSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ChangeSchedule $changeSchedule)
    {
        //
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

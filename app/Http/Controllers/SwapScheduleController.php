<?php

namespace App\Http\Controllers;

use App\Models\SwapSchedule;
use Illuminate\Http\Request;

class SwapScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('swap.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('swap.create');

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
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(SwapSchedule $swapSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(SwapSchedule $swapSchedule)
    {
        return view('swap.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SwapSchedule $swapSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SwapSchedule  $swapSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(SwapSchedule $swapSchedule)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AdjustmentRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdjustmentRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('adjustments.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adjustments.create');
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
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function show(AdjustmentRate $adjustmentRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function edit(AdjustmentRate $adjustmentRate)
    {
        return view('adjustments.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdjustmentRate $adjustmentRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdjustmentRate  $adjustmentRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdjustmentRate $adjustmentRate)
    {
        //
    }
}

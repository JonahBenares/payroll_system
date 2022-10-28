<?php

namespace App\Http\Controllers;

use App\Models\HmoRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HmoRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('hmo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hmo.create');
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
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function show(HmoRate $hmoRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function edit(HmoRate $hmoRate)
    {
        return view('hmo.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HmoRate $hmoRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HmoRate  $hmoRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(HmoRate $hmoRate)
    {
        //
    }
}

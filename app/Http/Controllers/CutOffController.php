<?php

namespace App\Http\Controllers;

use App\Models\CutOff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CutOffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cutoff.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cutoff.create');
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
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function show(CutOff $cutOff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function edit(CutOff $cutOff)
    {
        return view('cutoff.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CutOff $cutOff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CutOff  $cutOff
     * @return \Illuminate\Http\Response
     */
    public function destroy(CutOff $cutOff)
    {
        //
    }
}

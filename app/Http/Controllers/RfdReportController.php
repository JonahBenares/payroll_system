<?php

namespace App\Http\Controllers;

use App\Models\RfdReport;
use Illuminate\Http\Request;

class RfdReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('report_rfd.index');
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
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function show(RfdReport $rfdReport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function edit(RfdReport $rfdReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RfdReport $rfdReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RfdReport  $rfdReport
     * @return \Illuminate\Http\Response
     */
    public function destroy(RfdReport $rfdReport)
    {
        //
    }


    public function print(RfdReport $rfdReport)
    {
        return view('report_rfd.print');
    }
}

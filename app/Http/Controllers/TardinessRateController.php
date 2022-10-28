<?php

namespace App\Http\Controllers;

use App\Models\TardinessRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TardinessRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tardiness.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tardiness.create');
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
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function show(TardinessRate $tardinessRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function edit(TardinessRate $tardinessRate)
    {
        return view('tardiness.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TardinessRate $tardinessRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TardinessRate  $tardinessRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(TardinessRate $tardinessRate)
    {
        //
    }
}

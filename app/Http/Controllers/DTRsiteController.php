<?php

namespace App\Http\Controllers;

use App\Models\DTRsite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DTRsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dtr_site.index');
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
     * @param  \App\Models\DTRsite  $dTRsite
     * @return \Illuminate\Http\Response
     */
    public function show(DTRsite $dTRsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTRsite  $dTRsite
     * @return \Illuminate\Http\Response
     */
    public function edit(DTRsite $dTRsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTRsite  $dTRsite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTRsite $dTRsite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTRsite  $dTRsite
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTRsite $dTRsite)
    {
        //
    }
}

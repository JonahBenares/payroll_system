<?php

namespace App\Http\Controllers;

use App\Models\OTsite;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ot_site.index');
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
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function show(OTsite $oTsite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function edit(OTsite $oTsite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OTsite $oTsite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OTsite  $oTsite
     * @return \Illuminate\Http\Response
     */
    public function destroy(OTsite $oTsite)
    {
        //
    }
}

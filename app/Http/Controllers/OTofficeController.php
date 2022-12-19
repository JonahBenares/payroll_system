<?php

namespace App\Http\Controllers;

use App\Models\OToffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OTofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('ot_office.index');
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
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function show(OToffice $oToffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function edit(OToffice $oToffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OToffice $oToffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OToffice  $oToffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(OToffice $oToffice)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\DTRoffice;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DTRofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dtr_office.index');
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
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function show(DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTRoffice $dTRoffice)
    {
        //
    }
}

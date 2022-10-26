<?php

namespace App\Http\Controllers;

use App\Models\AllowanceRate;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AllowanceRateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masterfile.allowance_rate_list');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterfile.allowance_rate_add');
        
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
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function show(AllowanceRate $allowanceRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function edit(AllowanceRate $allowanceRate)
    {
        return view('masterfile.allowance_rate_update');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AllowanceRate $allowanceRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AllowanceRate  $allowanceRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(AllowanceRate $allowanceRate)
    {
        //
    }
}

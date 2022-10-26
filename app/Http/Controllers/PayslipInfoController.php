<?php

namespace App\Http\Controllers;

use App\Models\PayslipInfo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayslipInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('masterfile.payslip_info_list');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masterfile.payslip_info_add');
        
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
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function show(PayslipInfo $payslipInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(PayslipInfo $payslipInfo)
    {
        return view('masterfile.payslip_info_update');
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayslipInfo $payslipInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayslipInfo  $payslipInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayslipInfo $payslipInfo)
    {
        //
    }
}

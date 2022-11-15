<?php

namespace App\Http\Controllers;

use App\Models\PayrollAllowance;
use Illuminate\Http\Request;

class PayrollAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payroll_allowance.index');
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
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollAllowance $payrollAllowance)
    {
        return view('payroll_allowance.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function printBulk()
    {
        return view('payroll_allowance.bulk');
    }
}

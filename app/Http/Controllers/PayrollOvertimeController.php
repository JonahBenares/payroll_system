<?php

namespace App\Http\Controllers;

use App\Models\PayrollOvertime;
use Illuminate\Http\Request;

class PayrollOvertimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payroll_overtime.index');
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
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollOvertime $payrollOvertime)
    {
        return view('payroll_overtime.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollOvertime $payrollOvertime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollOvertime $payrollOvertime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollOvertime  $payrollOvertime
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollOvertime $payrollOvertime)
    {
        //
    }

    public function printBulk(PayrollOvertime $payrollOvertime)
    {
        return view('payroll_overtime.bulk');
    }
}

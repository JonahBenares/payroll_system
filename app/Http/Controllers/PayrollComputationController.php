<?php

namespace App\Http\Controllers;

use App\Models\PayrollComputation;
use Illuminate\Http\Request;

class PayrollComputationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('payroll_comp.index');
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
     * @param  \App\Models\PayrollComputation  $payrollComputation
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollComputation $payrollComputation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollComputation  $payrollComputation
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollComputation $payrollComputation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollComputation  $payrollComputation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollComputation $payrollComputation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollComputation  $payrollComputation
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollComputation $payrollComputation)
    {
        //
    }
}

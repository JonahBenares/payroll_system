<?php

namespace App\Http\Controllers;

use App\Models\EmployeeDeduction;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeDeductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('emp_deduction.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('emp_deduction.create');
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
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeDeduction $employeeDeduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('emp_deduction.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmployeeDeduction $employeeDeduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeDeduction  $employeeDeduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeDeduction $employeeDeduction)
    {
        //
    }
}

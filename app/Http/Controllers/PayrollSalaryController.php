<?php

namespace App\Http\Controllers;

use App\Models\PayrollSalary;
use App\Models\CutOff;
use App\Models\Employee;
use Illuminate\Http\Request;

class PayrollSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cutoff = CutOff::all();
        $filters = array(
            'month'=>'',
            'year'=>'',
            'cutoff'=>''
        );
        $employee_list=array();
        if($request->has('month')){
            $filters = array(
                'month'=>$request->month,
                'year'=>$request->year,
                'cutoff'=>$request->cutoff
            );

            $employees = Employee::all();
            foreach($employees AS $emp){
                $employee_list[] = array(
                    'id'=>$emp->id,
                    'name'=>getEmployeeName($emp->id)
                );
            }
            $employee_list = collect($employee_list)->sortBy('name')->toArray();
        }
        return view('payroll_salary.index',compact('cutoff','filters','employee_list'));
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
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollSalary $payrollSalary)
    {
        return view('payroll_salary.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollSalary $payrollSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollSalary $payrollSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollSalary $payrollSalary)
    {
        //
    }


    public function printBulk()
    {
        return view('payroll_salary.bulk');
    }
}

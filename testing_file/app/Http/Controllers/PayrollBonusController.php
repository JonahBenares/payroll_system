<?php

namespace App\Http\Controllers;

use App\Models\PayrollBonus;
use App\Models\Employee;
use Illuminate\Http\Request;

class PayrollBonusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(isset($_GET['year'])){
            $year=$_GET['year'];
        }else{
            $year=date('Y');
        }

        if(isset($_GET['bonus_type']) && !empty($_GET['bonus_type'])){
            $bonus_type=$_GET['bonus_type'];
        }else{
            $bonus_type='';
        }
        $bonus_report = Employee::all();
        return view('payroll_bonus.index',compact('bonus_report', 'year', 'bonus_type'));
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
     * @param  \App\Models\PayrollBonus  $payrollBonus
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollBonus $payrollBonus)
    {
        return view('payroll_bonus.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollBonus  $payrollBonus
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollBonus $payrollBonus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollBonus  $payrollBonus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollBonus $payrollBonus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollBonus  $payrollBonus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollBonus $payrollBonus)
    {
        //
    }

    public function printBulk(PayrollBonus $payrollSalary)
    {
        return view('payroll_bonus.bulk');
    }

}

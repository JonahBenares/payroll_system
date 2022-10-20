<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PayrollController extends Controller
{

    public function payroll_salary(){
        return view('payroll.payroll_salary');
    }

    public function payroll_allowance(){
        return view('payroll.payroll_allowance');
    }

    public function payroll_bonus(){
        return view('payroll.payroll_bonus');
    }

    public function payroll_overtime(){
        return view('payroll.payroll_overtime');
    }
}

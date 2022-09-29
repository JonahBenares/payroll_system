<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterfileController extends Controller
{
    public function employee_list(){
        return view('masterfile.employee_list');
    }

    public function schedule_list(){
        return view('masterfile.schedule_list');
    }

    public function calendar_list(){
        return view('masterfile.calendar_list');
    }

    public  function allowance_list(){
        return view('masterfile.allowance_list');
    }

    public  function allowance_rate_list(){
        return view('masterfile.allowance_rate_list');
    }

    public function rates_list(){
        return view('masterfile.rates_list');
    }

    public function deduction_list(){
        return view('masterfile.deduction_list');
    }

    public function statutory_bracket(){
        return view('masterfile.statutory_list');
    }

    
    public function tardiness_rate_list(){
        return view('masterfile.tardiness_rate_list');
    }

    public function cut_off_list(){
        return view('masterfile.cut_off_list');
    }

}

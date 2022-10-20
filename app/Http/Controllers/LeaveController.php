<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function filingLeave(){
        return view('filing.leave_list');
    }

    public function overtime(){
        return view('filing.ot_list');
    }
}

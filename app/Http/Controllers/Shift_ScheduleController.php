<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shift_ScheduleController extends Controller
{
    public function shift_sched(){
        return view('shift_sched.shift_sched_list');
    }
}

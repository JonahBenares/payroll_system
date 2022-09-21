<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterfileController extends Controller
{
    public function index(){
        return view('masterfile.employee_list');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UploadAllowController extends Controller
{
    public function uploadAllowance(){
        return view('upload.upload_allowance');
    }
}

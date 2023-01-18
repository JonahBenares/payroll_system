<?php

namespace App\Http\Controllers;
use App\Models\UploadAllowance;
use App\Models\UploadAllowanceDetail;
use App\Models\UploadAllowanceTime;
use App\Models\PayrollAllowance;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PayrollAllowanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=0;
        $allowance_details=array();
        return view('payroll_allowance.index',compact('allowance_details','id'));
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
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function show($id, $head_id)
    {   
       
         $allowance_head= UploadAllowance::where("id","=",$head_id)->get();
       
        $allowance_time = UploadAllowanceTime::where("allowance_head_id","=",$head_id)
                            ->where("allowance_detail_id","=",$id)
                            ->get();
        $emp = UploadAllowanceDetail::Select('employee_id')
                                ->where("allowance_head_id","=",$head_id)
                                ->where("id","=",$id)
                                ->get();
        $emp_id= $emp[0]['employee_id'];

        $session_id= Auth::id();
        $session = User::Select('name')->where("id","=",$session_id)->get();
        $session_name= $session[0]['name'];
        return view('payroll_allowance.print', compact('id','head_id','emp_id','session_name','allowance_head','allowance_time'));
    }

    public function generate(Request $request){
        $from= $request->input('from');
        $to= $request->input('to');
        $allowance= UploadAllowance::select('id')
                    ->where("from_date","=",$from)
                    ->where("to_date", "=",$to)
                    ->get();

        $id= $allowance[0]['id'];
        
        $allowance_details = UploadAllowanceDetail::where("allowance_head_id","=",$id)
                            ->get();
       
        return view('payroll_allowance.index',compact('allowance_details','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollAllowance  $payrollAllowance
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollAllowance $payrollAllowance)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function printBulk($head_id)
    {
        $details = UploadAllowanceDetail::where('allowance_head_id','=',$head_id)->get();

        $head= UploadAllowance::select('from_date', 'to_date')
                    ->where("id","=",$head_id)
                    ->get();

        $from= $head[0]['from_date'];       
        $to= $head[0]['to_date'];        
        
        $session_id= Auth::id();
        $session = User::Select('name')->where("id","=",$session_id)->get();
        $session_name= $session[0]['name'];
        return view('payroll_allowance.bulk', compact('details','head_id','from','to', 'session_name'));
    }
 
   
}

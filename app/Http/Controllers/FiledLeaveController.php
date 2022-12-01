<?php

namespace App\Http\Controllers;

use App\Models\FiledLeave;
use App\Models\LeaveFailure;
use App\Models\LeaveFailureDetail;
use App\Models\Employee;
use Illuminate\Http\Request;

class FiledLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(isset($_GET['id']) && !empty($_GET['id'])){
            $employee_id=$_GET['id'];
        }else{
            $employee_id='';
        }
        if(isset($_GET['month']) && isset($_GET['year'])){
            $month=$_GET['month'];
            $year=$_GET['year'];
        }else{
            $month=date('m');
            $year=date('Y');
        }
        $employees = Employee::all()->where('is_active', '=', 1);
        $employee_name = Employee::where('id',$employee_id)->first();
        $cancelled = LeaveFailureDetail::join('users', 'users.id', '=', 'leave_filing_detail.cancelled_by')->first();
        $filed = LeaveFailure::join('employees', 'employees.id', '=', 'leave_filing_head.employee_id')
        ->join('leave_filing_detail', 'leave_filing_head_id', '=', 'leave_filing_head.id')
        ->where('filed', '=', 1)->where('month',$month)->where('month',$month)->where('year', $year)->where('employee_id', $employee_id)->groupBy('leave_filing_head.personal_id')->get();
        return view('filed.index',compact('filed','employees','employee_name','cancelled'));
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
     * @param  \App\Models\FiledLeave  $filedLeave
     * @return \Illuminate\Http\Response
     */
    public function show(FiledLeave $filedLeave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FiledLeave  $filedLeave
     * @return \Illuminate\Http\Response
     */
    public function edit(FiledLeave $filedLeave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FiledLeave  $filedLeave
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $filed = LeaveFailureDetail::find($id);
        $current_date_time = date('Y-m-d H:i:s');
        $user = $request->user_id=auth()->id();
        $filed->update([
            'cancel_remarks'=>$request->cancel_remarks,
            'cancel_date'=>$current_date_time,
            'cancelled_by'=>$user,
            'cancelled'=>1,
        ]);
    return redirect()->route('filedleave.index')->with('popup', 'open');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FiledLeave  $filedLeave
     * @return \Illuminate\Http\Response
     */
    public function destroy(FiledLeave $filedLeave)
    {
        //
    }
}

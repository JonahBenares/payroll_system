<?php

namespace App\Http\Controllers;

use App\Models\LeaveFailure;
use App\Models\LeaveFailureDetail;
use App\Models\CutOff;
use App\Models\Employee;
use Illuminate\Http\Request;

class LeaveFailureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        if(isset($_GET['month']) && isset($_GET['year'])){
            $month=$_GET['month'];
            $year=$_GET['year'];
        }else{
            $month=date('m');
            $year=date('Y');
        }
        if(isset($_GET['period']) && !empty($_GET['period'])){
            $period=$_GET['period'];
        }else{
            $period='';
        }
        $cutoff = CutOff::all();
        $leave = LeaveFailure::join('employees', 'employees.id', '=', 'leave_filing_head.employee_id')
        ->join('leave_filing_detail', 'leave_filing_head_id', '=', 'leave_filing_head.id')
        ->selectRaw('count(case when leave_filing_detail.leave_type = "Absent" then 1 end) as count_absent,employees.full_name,leave_filing_detail.leave_filing_head_id')
        ->selectRaw('count(case when leave_filing_detail.leave_type = "Failure to login/logout" then 1 end) as count_ftl')
        ->selectRaw('count(case when leave_filing_detail.leave_type = "Undertime/Tardiness" then 1 end) as count_undertime')
        ->where('is_active', '=', 1)->where('filed', '=', 0)->where('cancelled', '=', 0)->where('month',$month)->where('year', $year)->where('pay_period', $period)->groupBy('leave_filing_head.personal_id')->get();
        return view('leave.index',compact('leave','cutoff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view("leave.create");
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
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function show(LeaveFailure $leaveFailure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function edit($leave_filing_head_id)
    {
        $employee = LeaveFailure::where('leave_filing_head.id',$leave_filing_head_id)->join('employees', 'employees.id', '=', 'leave_filing_head.employee_id')->first();
        $leave = LeaveFailureDetail::where('leave_filing_head_id' ,$leave_filing_head_id)->where('filed', '=', 0)->where('cancelled', '=', 0)->get();
        //$id = LeaveFailureDetail::where('leave_filing_head_id' ,$leave_filing_head_id)->where('filed', '=', 0);
        return view('leave.edit',compact('leave','employee'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $count=count($request->filed);
        for($x=0;$x<$count;$x++){
            $detail_id =  $request->detailid[$x];
            $leave = LeaveFailureDetail::find($detail_id);
            //$input = $request->all();
            $undertime = !empty($request->undertime_mins[$x]) ? $request->undertime_mins[$x] : '';
            $date_filed = !empty($request->date_filed[$x]) ? $request->date_filed[$x] : '';
            $filed = !empty($request->filed[$x]) ? $request->filed[$x] : '0';
            $with_pay = !empty($request->with_pay[$x]) ? $request->with_pay[$x] : '0';
            $pay_percentage = !empty($request->pay_percentage[$x]) ? $request->pay_percentage[$x] : '0';
            $percentage_dec = $pay_percentage / 100;
            $leave->update([
                'undertime_mins'=>$undertime,
                'date_filed'=>$date_filed,
                'filed'=>$filed,
                'with_pay'=>$with_pay,
                'pay_percentage'=>$percentage_dec,
            ]);
        }
        return redirect()->route('leavefailure.index')->with('popup', 'open');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeaveFailure  $leaveFailure
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeaveFailure $leaveFailure)
    {
        //
    }

    // public function cancelLeave(){
    //     return view('leave.cancelleave');
    // }
}

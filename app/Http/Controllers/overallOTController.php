<?php

namespace App\Http\Controllers;

use App\Models\overallOT;
use App\Models\Overtime;
use App\Models\OvertimeDetails;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class overallOTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('overallOT.index');
    }
    

    public function filter_overallot(Request $request){
        $date_from=$request->date_from;
        $date_to=$request->date_to;
        $overtime_report=OvertimeDetails::join('employees','employees.id','=','ot_detail.employee_id')->whereBetween('overtime_date', [$date_from, $date_to])->get();
        $x=0;
        $overtime_sum=[];
        $overtime_amount=[];
        foreach($overtime_report AS $t){
            $overtime_sum[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('overtime_date', $t->overtime_date)->sum(\DB::raw('IFNULL(reg_day_hr,0) + IFNULL(RD_HR,0) + IFNULL(SH_RD_HR,0) + IFNULL(SH_HR,0) + IFNULL(RH_HR,0) + IFNULL(RH_RD_HR,0) + IFNULL(reg_day_np_hr,0) + IFNULL(reg_np_ot_hr,0) + IFNULL(SH_RD_NP_HR,0) + IFNULL(SH_OT_NP_HR,0) + IFNULL(SH_RD_OT_NP_HR,0) + IFNULL(RH_NP_HR,0) + IFNULL(RH_RD_NP_HR,0) + IFNULL(RH_RD_OT_NP_HR,0) + IFNULL(RH_OT_NP_HR,0) + IFNULL(RD_SH_NP_HR,0) + IFNULL(RD_SH_NP_OT_HR,0)'));
            $overtime_amount[$x]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('overtime_date', $t->overtime_date)->sum('total_amount');
            $x++;
        }
        return view('overallOT.index',compact('overtime_report','overtime_sum','overtime_amount','date_from','date_to'));
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
     * @param  \App\Models\overallOT  $overallOT
     * @return \Illuminate\Http\Response
     */
    public function show(overallOT $overallOT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\overallOT  $overallOT
     * @return \Illuminate\Http\Response
     */
    public function edit(overallOT $overallOT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\overallOT  $overallOT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, overallOT $overallOT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\overallOT  $overallOT
     * @return \Illuminate\Http\Response
     */
    public function destroy(overallOT $overallOT)
    {
        //
    }
}

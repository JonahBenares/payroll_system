<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\CutOff;
use App\Models\LeaveFailure;
use App\Models\LeaveFailureDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check_date=date('j');
        $month_disp=date('F');
        $month=date('m');
        $year=date('Y');
        $now=date('Y-m-d');
        $cutoff_mid=CutOff::where('cutoff_type','MID')->first();
        $cutoff_eom=CutOff::where('cutoff_type','EOM')->first();
        if($check_date>=$cutoff_mid->cutoff_start || $check_date<=$cutoff_mid->cutoff_end){
            //echo 'MID';
            $inc_month=date('F',strtotime($now." +1 Months"));
            if($month=='12'){
                $inc_year=date('Y',strtotime($now." +1 year"));
            }else{
                $inc_year=$year;
            }
            $start_date=$month_disp." ".str_pad($cutoff_mid->cutoff_start, 2, "0", STR_PAD_LEFT).",".$year;
            $end_date=$inc_month." ".str_pad($cutoff_mid->cutoff_end, 2, "0", STR_PAD_LEFT).",".$inc_year;
        }else if($check_date>=$cutoff_eom->cutoff_start || $check_date<=$cutoff_eom->cutoff_end){
            //echo 'EOM';
            $start_date=$month_disp." ".str_pad($cutoff_eom->cutoff_start, 2, "0", STR_PAD_LEFT).",".$year;
            $end_date=$month_disp." ".str_pad($cutoff_eom->cutoff_end, 2, "0", STR_PAD_LEFT).",".$year;
        }
        $unfiled_leave=LeaveFailureDetail::where('filed','0')->count();
        return view('dashboard',compact('start_date','end_date','unfiled_leave'));
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
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Dashboard $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Dashboard $dashboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dashboard $dashboard)
    {
        //
    }
}

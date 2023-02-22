<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use App\Models\CutOff;
use App\Models\Reminder;
use App\Models\Holiday;
use App\Models\LeaveFailure;
use App\Models\LeaveFailureDetail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public static function dateDifference($date_1 , $date_2)
    {
        $datetime2 = date_create($date_2);
        $datetime1 = date_create($date_1 );
        $interval = date_diff($datetime2, $datetime1);
    
        return $interval->format('%R%a');
    
    }
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
        $cutoff_count=CutOff::count();
        $start_date='';
        $end_date='';
        if($cutoff_count!=0){
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
        }

        $unfiled_leave=LeaveFailureDetail::where('filed','0')->count();
        $reminders=Reminder::where('done','0')->orderBy('reminder_date')->get();
        $holiday=Holiday::all()->sortBy('holiday_date');
        $day = date('D');
        $nextMonth=date('Y-m-01', strtotime('+1 month'));
        $date = new \DateTime('now');
        $nowTimestamp = $date->getTimestamp();
        $date->modify($nextMonth);
        $firstDayOfNextMonthTimestamp = $date->getTimestamp();
        $nextmonthdisp=($firstDayOfNextMonthTimestamp - $nowTimestamp) / 86400;
        return view('dashboard',compact('start_date','end_date','unfiled_leave','reminders','day','nextmonthdisp','now','holiday'));
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
        $res=Reminder::create(
            [
                'reminder_date'=> $request->reminder_date,
                'reminder'=> $request->reminder,
                'done'=>0
            ]
        );
        if($res){
            return redirect()->route('dashboard')->with('success',"Reminder Added Successfully");
        }else{
            return redirect()->route('dashboard')->with('fail',"Error! Try Again!");
        }
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
    public function update(Request $request, $id)
    {
        $reminders = Reminder::find($id);
        $reminders->update(
            [
                'done' => 1,
            ]
        );
        if($reminders){
            return redirect()->route('dashboard')->with('success',"Reminder Tag as Done Successfully");
        }else{
            return redirect()->route('dashboard')->with('fail',"Error! Try Again!");
        }
    }

    public function update_reminder(Request $request)
    {
        $id=$request->reminder_id;
        $reminders = Reminder::find($id);
        $reminders->update(
            [
                'reminder' => $request->reminder,
                'reminder_date' => $request->reminder_date,
            ]
        );
        if($reminders){
            return redirect()->route('dashboard')->with('success',"Reminder Updated Successfully");
        }else{
            return redirect()->route('dashboard')->with('fail',"Error! Try Again!");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dashboard  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Reminder::find($id)->delete();
        return redirect()->route('dashboard' )->with('fail',"Reminder Deleted Successfully");
    }
}

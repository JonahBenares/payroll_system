<?php

namespace App\Http\Controllers;

use App\Models\DTRoffice;
use App\Models\CutOff;
use App\Models\Location;
use App\Models\Employee;
use App\Models\JobHistory;
use App\Models\Holiday;
use App\Models\OvertimeDetails;
use App\Models\TimekeepingLogs;
use App\Models\Schedule;
use App\Models\ShiftSchedule;
use App\Models\DTRremark;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DTRofficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cutoff=CutOff::all();
        $location=Location::where('location_name','LIKE','%Bacolod%')->first();
        $employees=Employee::where('is_active','1')->where('emp_location',$location->id)->orderBy('full_name','ASC')->get();
        return view('dtr_office.index',compact('cutoff','employees'));
    }


    public function filter_dtroffice(Request $request){
        $cutoff=CutOff::all();
        $location=Location::where('location_name','LIKE','%Bacolod%')->first();
        $employees=Employee::where('is_active','1')->where('emp_location',$location->id)->orderBy('full_name','ASC')->get();
        $get_data=Employee::where('id',$request->employee)->where('emp_location',$location->id)->first();
        $designation=JobHistory::where('personal_id',$get_data->personal_id)->orderBy('effective_date','DESC')->first();
        $designation_disp=$designation->j_position;
        $employee_id=$get_data->id;
        $month_year=$request->year."-".$request->month;
        if($request->period=='MID'){
            $add_month=$request->month+1;
            if($request->month=='12'){
                $add_year=$request->year+1;
            }else{
                $add_year=$request->year;
            }
            $cutoff_start=CutOff::where('cutoff_type','MID')->value('cutoff_start');
            $cutoff_end=CutOff::where('cutoff_type','MID')->value('cutoff_end');
            $start_date=str_pad($request->year, 2, "0", STR_PAD_LEFT)."-".str_pad($request->month, 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_start, 2, "0", STR_PAD_LEFT);
            $end_date=str_pad($add_year, 2, "0", STR_PAD_LEFT)."-".str_pad($add_month, 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_end, 2, "0", STR_PAD_LEFT);
        }else{
            $cutoff_start=CutOff::where('cutoff_type','EOM')->value('cutoff_start');
            $cutoff_end=CutOff::where('cutoff_type','EOM')->value('cutoff_end');
            $start_date=str_pad($request->year, 2, "0", STR_PAD_LEFT)."-".str_pad($request->month, 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_start, 2, "0", STR_PAD_LEFT);
            $end_date=str_pad($request->year, 2, "0", STR_PAD_LEFT)."-".str_pad($request->month, 2, "0", STR_PAD_LEFT)."-".str_pad($cutoff_end, 2, "0", STR_PAD_LEFT);
        }

        $timekeeping=TimekeepingLogs::where('employee_id',$get_data->id)->where('period',$request->period)->whereBetween('log_date', [$start_date, $end_date])->get();
        $datelog=TimekeepingLogs::where('employee_id',$get_data->id)->where('period',$request->period)->whereBetween('log_date', [$start_date, $end_date])->first();
        $time_date=[];
        if(!empty($datelog)){
            $month = date('m',strtotime($datelog->log_date));
            $date = \DateTime::createFromFormat('m', $month);
            for ($i = 0; $i < 2; $i++){
                // Output the month and year
                $time_date[]=$date->format('M');
                // Add 1 month to the date
                $date->add(new \DateInterval('P1M'));
            }
        }
        $reg_day_hr=[];
        $rd_hr=[];
        $sh_hr=[];
        $sh_rd_hr=[];
        $rh_hr=[];
        $rh_rd_hr=[];
        $reg_day_np_hr=[];
        $reg_np_ot_hr=[];
        $rd_sh_np_hr=[];
        $rd_sh_np_ot_hr=[];
        $sh_rd_np_hr=[];
        $sh_rd_ot_np_hr=[];
        $rh_np_hr=[];
        $rh_ot_np_hr=[];
        $rh_rd_np_hr=[];
        $rh_rd_ot_np_hr=[];
        $tardy=[];
        foreach($timekeeping AS $t){
            $reg_day_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('reg_day_hr');
            $rd_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RD_HR');
            $sh_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('SH_HR');
            $sh_rd_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('SH_RD_HR');
            $rh_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_HR');
            $rh_rd_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_RD_HR');

            $reg_day_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('reg_day_np_hr');
            $reg_np_ot_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('reg_np_ot_hr');
            $rd_sh_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RD_SH_NP_HR');
            $rd_sh_np_ot_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RD_SH_NP_OT_HR');
            $sh_rd_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('SH_RD_NP_HR');
            $sh_rd_ot_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('SH_RD_OT_NP_HR');
            $rh_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_NP_HR');
            $rh_ot_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_OT_NP_HR');
            $rh_rd_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_RD_NP_HR');
            $rh_rd_ot_np_hr[]=OvertimeDetails::join('ot_head','ot_head.id','=','ot_detail.ot_head_id')->where('employee_id',$t->employee_id)->where('payroll_period',$t->period)->where('overtime_date', $t->log_date)->value('RH_RD_OT_NP_HR');
            $schedule = ShiftSchedule::where('employee_id',$t->employee_id)->where('month_year',$t->month_year)->first();
            $count = ShiftSchedule::where('employee_id',$t->employee_id)->where('month_year',$t->month_year)->count();
            if($count!=0){
                $schedule_code = Schedule::where('id',$schedule->schedule_code)->first();
            }
            $check=date('H:i',strtotime($schedule_code->time_in));
            $time_in=date('H:i',strtotime($t->time_in));
            if($time_in>=$check){
                $start = strtotime($time_in);
                $end = strtotime($check);
                $diff = ($start - $end);
                $tardy[]=gmdate("H.i",$diff);
            }
        }
        return view('dtr_office.index',compact('cutoff','employees','employee_id','designation_disp','timekeeping','time_date','reg_day_hr','rd_hr','sh_hr','sh_rd_hr','rh_hr','rh_rd_hr','reg_day_np_hr','reg_np_ot_hr','rd_sh_np_hr','rd_sh_np_ot_hr','sh_rd_np_hr','sh_rd_ot_np_hr','rh_np_hr','rh_ot_np_hr','rh_rd_np_hr','rh_rd_ot_np_hr','tardy'));
    }

    public function save_remarks(Request $request){
        $count=DTRremark::where('employee_id',$request->employee_id)->where('date',$request->date)->count();
        $check_id=DTRremark::where('employee_id',$request->employee_id)->where('date',$request->date)->value('id');
        if($count==0){
            $res=DTRremark::create(
                [
                    'personal_id'=> $request->personal_id,
                    'employee_id'=> $request->employee_id,
                    'date'=> $request->date,
                    'remarks'=> $request->remarks
                ]
            );
        }else{
            $res = DTRremark::find($check_id);
            $res->update(
                [
                    'personal_id'=> $request->personal_id,
                    'employee_id'=> $request->employee_id,
                    'date'=> $request->date,
                    'remarks'=> $request->remarks
                ]
            );
        }
        if($res){
            $remarks=DTRremark::where('employee_id',$request->employee_id)->where('date',$request->date)->value('remarks');
            echo $remarks;
        }
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
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function show(DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function edit(DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTRoffice $dTRoffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTRoffice  $dTRoffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTRoffice $dTRoffice)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\PayrollSalary;
use App\Models\CutOff;
use App\Models\PayslipInfo;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Models\ShiftScheduleDetail;
use App\Models\ShiftSchedule;
use App\Models\Timekeeping;
use App\Models\Holiday;
use App\Models\RDHead;
use App\Models\RDDetail;


define('PERCENT_RD_RH','2.6');
define('PERCENT_RD_SH','1.5');

class PayrollSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $cutoff = CutOff::all();
        $filters = array(
            'month'=>'',
            'year'=>'',
            'cutoff'=>''
        );
        $employee_list=array();
        $payslipinfo=array();
        if($request->has('month')){
            $filters = array(
                'month'=>$request->month,
                'year'=>$request->year,
                'cutoff'=>$request->cutoff
            );

            $employees = Employee::all();
            foreach($employees AS $emp){
                $employee_list[] = array(
                    'id'=>$emp->id,
                    'name'=>getEmployeeName($emp->id,$request->month,$request->year,$request->cutoff)
                );
               
            }
            $employee_list = collect($employee_list)->sortBy('name')->toArray();
            $payslipinfo = PayslipInfo::all();
        }
        
        return view('payroll_salary.index',compact('cutoff','filters','employee_list','payslipinfo'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rd_computation($month, $year, $cutoff){
        if(!empty($month)){
    
            $employees = Employee::all();
           
                if( $cutoff== 'EOM'){
                    $cut = CutOff::select('cutoff_start','cutoff_end')
                        ->where("cutoff_type","=",$cutoff)->get();
                    
                    $start=$cut[0]['cutoff_start'];
                    $end=$cut[0]['cutoff_end'];
        
                    $start_date = $year."-".$month."-".$start;
                    $end_date = $year."-".$month."-".$end;
                } else {
                    $cut = CutOff::select('cutoff_start','cutoff_end')
                    ->where("cutoff_type","=",$cutoff)->get();
                
                    $start=$cut[0]['cutoff_start'];
                    $end=$cut[0]['cutoff_end'];
        
                    $start_d = $year."-".$month."-".$start;
                    $end_date = $year."-".$month."-".$end;
        
                    $start_date = date("Y-m-d", strtotime ('-1 month',strtotime ($start_d)));
                }
                $year_month = $year."-".$month;
            

<<<<<<< HEAD
                $save_head_id = RDHead::insertGetId([
                    'salary_year'=>$year,
                    'salary_month'=>$month,
                    'cutoff'=>$cutoff,
                    'created_at'=>date("Y-m-d H:i:s")
                ]);
=======
                // $save_head_id = RDHead::insertGetId([
                //     'salary_year'=>$year,
                //     'salary_month'=>$month,
                //     'cutoff'=>$cutoff
                // ]);
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
            foreach($employees AS $emp){

                     ///////////// get RD within the period of a specific employee////////////////
                    
                    $shifthead_count = ShiftSchedule::select('id')
                    ->where("employee_id","=",$emp->id)
                    ->where("month_year","=",$year_month)
                    ->count();
                
                    if($shifthead_count!=0){
                    

                        $shiftcount =  ShiftSchedule::where("employee_id","=",$emp->id)
                        ->where("month_year","=",$year_month)
                        ->whereBetween('rest_day',[$start_date,$end_date])
                        ->join('schedule_detail', 'schedule_head.id', '=', 'schedule_detail.schedule_head_id')
                        ->count();

<<<<<<< HEAD
=======
                     
                        
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                        if($shiftcount == 0){ ///// if no RD in the given period, then no deduction
                            $rd_deduction = 0;
                        } else {
                            $shiftdetails = ShiftSchedule::select('employee_id','personal_id','rest_day')
                            ->where("employee_id","=",$emp->id)
                            ->where("month_year","=",$year_month)
                            ->whereBetween('rest_day',[$start_date,$end_date])
                            ->join('schedule_detail', 'schedule_head.id', '=', 'schedule_detail.schedule_head_id')
                            ->get();
<<<<<<< HEAD
                        }
=======
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e

                            foreach($shiftdetails AS $sd){
                                $getRDs[] =  $sd->rest_day;
                            }

                            foreach($shiftdetails AS $sdet){
                                $getRDsEmp[] =  array(
                                    'employee_id'=>$sdet->employee_id,
                                    'personal_id'=>$sdet->personal_id,
                                    'rest_days'=>$sdet->rest_day
                                );
                            }
<<<<<<< HEAD
                            // $duty_count = Timekeeping::select('recorded_time')
                            // ->wherein(Timekeeping::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"), $getRDs)
                            // ->where('personal_id',$emp->personal_id)
                            // ->count();
                    }
                }
=======

                            $duty_count = Timekeeping::select('recorded_time')
                            ->wherein(Timekeeping::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"), $getRDs)
                            ->where('personal_id',$emp->personal_id)
                            ->count();

>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                         
                        foreach($getRDsEmp AS $rdemp){

                            $time_count = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                            ->whereDate('recorded_time',$rdemp['rest_days'])
                            ->where('personal_id',$rdemp['personal_id'])
                            ->count();
<<<<<<< HEAD

                       
=======
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                        
                            if($time_count%2==0){ ///// if equal or divisible by 2 ang timekeeping //////////
                                $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                                ->whereDate('recorded_time',$rdemp['rest_days'])
                                ->where('personal_id',$rdemp['personal_id'])
                                ->get();
                                if(!empty($time[0]['personal_id'])){
                              
                                    $start_time = $time[0]['starttime'];
                                    $end_time = $time[0]['endtime'];
                                  
                                    $nightdiff = night_difference(strtotime($start_time),strtotime($end_time));
                                    $ps_id = getPayslipInfo('description', 'Rest Day', 'id');
                                    $nd_id = getPayslipInfo('description', 'Night Premium', 'id');
                                    $rates = getRates($ps_id);
                                    $nd_rate = getRates($nd_id);

                                    $rate_array = explode("_",$rates);
                                    $deduction_type = $rate_array[0];
                                    $adjustment_rate = $rate_array[1];

                                    $nd_array =  explode("_",$nd_rate);
                                    $np_rate = $nd_array[1];

                                    $hours = getTimeDiff($start_time, $end_time);
                                    $hourly_rate = getEmployeeDetails($rdemp['employee_id'], 'hourly_rate');

                                    $holiday = checkHoliday($rdemp['rest_days']);
<<<<<<< HEAD

                                  
                                    ////////////////////////// CHECK IF HOLIDAY ////////////////////////////////
                                    if($holiday == 0 && $nightdiff==0){
                                      
                                        if($deduction_type==1){  //// if percentage
                                            if($hours>=8){
                                                $total_daily_rate =  (8 * $adjustment_rate) * $hourly_rate;
                                            } else {
                                                $total_daily_rate = ($hours * $adjustment_rate) * $hourly_rate;
                                            }
                                        }
                                        $holiday_rate = 0;
                                    } 
                                    
                                    else if($holiday=='Regular'){
=======
                                    //echo $holiday . ", ". $nightdiff . "<br>";
                                    ////////////////////////// CHECK IF HOLIDAY ////////////////////////////////
                                    if($holiday == 0){
                                        if($deduction_type==1){  //// if percentage
                                            if($hours>=8){
                                                $total = ((8/8) * $adjustment_rate) * $hourly_rate;
                                            } else {
                                                $total = (($hours/8) * $adjustment_rate) * $hourly_rate;
                                            }
                                        }
                                    } else if($holiday=='Regular'){
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                                      
                                        if($deduction_type==1){  //// if percentage

                                            if($nightdiff==0){
                                            
                                                if($hours>=8){
<<<<<<< HEAD
                                                    $total_daily_rate = (8 * PERCENT_RD_RH) * $hourly_rate;
                                                } else {
                                                    $total_daily_rate = ($hours * PERCENT_RD_RH) * $hourly_rate;
                                                }

                                                
                                            } else if($nightdiff>0){
                                                
                                                if($nightdiff == $hours){ /// if all hours are with Night Premium
                                                    if($hours>=8){
                                                        $total_daily_rate = ((8 * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                    } else {
                                                        $total_daily_rate = (($hours * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                    }
                                                } else {  ///// if all hours are not night premium
                                                    if($hours<=8){
                                                        $normal = $hours - $nightdiff;
                                                        $normal_calc = ($normal * $hourly_rate) * PERCENT_RD_RH;
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc;
                                                    } else { 
                                                        $normal = $hours - $nightdiff;
                                                        $normal_no_ot = 8 - $nightdiff;
                                                        $normal_calc = (($normal_no_ot * $hourly_rate) * PERCENT_RD_RH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc; 
                                                    }

                                                }
                                            }
                                        }

                                        $holiday_rate = PERCENT_RD_RH;
                                   
=======
                                                    $total = ((8/8) * PERCENT_RD_RH) * $hourly_rate;
                                                } else {
                                                    $total = (($hours/8) * PERCENT_RD_RH) * $hourly_rate;
                                                }
                                            } else if($nightdiff>0){
                                                
                                                if($hours>=8){
                                                    $total = (((8/8) * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                } else {
                                                    $total = ((($hours/8) * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                }
                                            }
                                        }
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                                    } else if($holiday=='Special'){
                                        if($deduction_type==1){  //// if percentage

                                            if($nightdiff==0){
                                                if($hours>=8){
<<<<<<< HEAD
                                                    $total_daily_rate = (8 * PERCENT_RD_SH) * $hourly_rate;
                                                } else {
                                                    $total_daily_rate = ($hours * PERCENT_RD_SH) * $hourly_rate;
                                                }
                                            } else if($nightdiff>0){
                                              

                                                if($nightdiff == $hours){ /// if all hours are with Night Premium
                                                    if($hours>=8){
                                                        $total_daily_rate = ((8 * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                    } else {
                                                        $total_daily_rate = (($hours * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                    }
                                                } else {  ///// if all hours are not night premium
                                                 
                                                    if($hours<8){
                                                        $normal = $hours - $nightdiff;
                                                        $normal_calc = (($normal * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc;
                                                    } else { 
                                                        $normal = $hours - $nightdiff;
                                                        $normal_no_ot = 8 - $nightdiff;
                                                        $normal_calc = (($normal_no_ot * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc; 
                                                    }

                                                }

                                            }
                                        }

                                        $holiday_rate = PERCENT_RD_SH;
                                    } 
                                }
                                  
                                      //////////////////////////  CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                if($holiday==0 && $nightdiff>0){
                                    if($deduction_type==1){  
                                      
                                        $normal = $hours - $nightdiff;
                                        $normal_calc = ($normal * $adjustment_rate) * $hourly_rate;
                                        $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                        $total_daily_rate = $normal_calc + $nd_calc;

                                        if($hours<8){
                                            $normal = $hours - $nightdiff;
                                            $normal_calc = (($normal * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc;
                                        } else { 
                                            $normal = $hours - $nightdiff;
                                            $normal_no_ot = 8 - $nightdiff;
                                            //echo $normal_no_ot . " = " . $adjustment_rate . " = " . $hourly_rate . "<br><br>";
                                            $normal_calc = (($normal_no_ot * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc; 
                                        }

                                    }

                                    $holiday_rate = 0;
                                }
                                // echo "personal_id = " . $rdemp['personal_id'] ."<br>".
                                // "hourly rate = " . $hourly_rate . "<br>".
                                // "start time = " . $start_time . "<br>".
                                // "end time = ". $end_time . "<br>".
                                // "holiday = " . $holiday . "<br> ".
                                // "hours =".$hours."<br>".
                                // "nightdiff = ". $nightdiff . "<br>";
                                // echo "**".$total_daily_rate. "<br><br>";
                               
=======
                                                    $total = ((8/8) * PERCENT_RD_SH) * $hourly_rate;
                                                } else {
                                                    $total = (($hours/8) * PERCENT_RD_SH) * $hourly_rate;
                                                }
                                            } else if($nightdiff>0){
                                                if($hours>=8){
                                                    $total = (((8/8) * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                } else {
                                                    $total = ((($hours/8) * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                }
                                            }
                                        }
                                    } else {
                                        if($deduction_type==1){  //// if percentage
                                            if($hours>=8){
                                                $total = ((8/8) * 3.6) * $hourly_rate;
                                            } else {
                                                $total = (($hours/8) * 3.6) * $hourly_rate;
                                            }
                                        }
                                    }

                                      //////////////////////////  CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                if($holiday==0 && $nightdiff>0){
                                    if($deduction_type==1){  //// if percentage
                                        if($hours>=8){
                                            $rdrate = ((8/8) * $adjustment_rate) * $hourly_rate;
                                            $total = $rdrate*$np_rate;
                                        } else {
                                            $rdrate = (($hours/8) * $adjustment_rate) * $hourly_rate;
                                            $total = $rdrate*$np_rate;
                                        }
                                    }
                                }

                                echo $rdemp['personal_id'] . " - " . $hours . ", ". $hourly_rate .", " .$holiday.",", $nightdiff." = ". $total . "<br>";
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e
                                //////////////////////////  END CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                
                                     ////////////////////////// END CHECK IF HOLIDAY ////////////////////////////////
    
<<<<<<< HEAD
                                
                                    $save = RDDetail::create([
                                        'rd_head_id'=>$save_head_id,
                                        'employee_id'=>$rdemp['employee_id'],
                                        'personal_id'=>$rdemp['personal_id'],
                                        'rd_date'=>$rdemp['rest_days'],
                                        'rd_hours'=>$hours,
                                        'hourly_rate'=>$hourly_rate,
                                        'np_rate'=>$np_rate,
                                        'holiday_rate'=>$holiday_rate,
                                        'rd_rate'=>$adjustment_rate,
                                        'total_rd_amount'=>$total_daily_rate
                                    ]);

                            }
                             
                    
                             
                     }
                        $getRDsEmp=array();
                      
                  
                   
            
=======
                                   // echo $rdemp['rest_days'] . " " . $holiday .", ".$hours." * " . $hourly_rate. " = " . $total. "<br>";
                                    // $save = RDDetail::create([
                                    //     'rd_head_id'=>$save_head_id,
                                    //     'employee_id'=>$rdemp['employee_id'],
                                    //     'personal_id'=>$rdemp['personal_id'],
                                    //     'rd_date'=>$rdemp['rest_days'],
                                    //     'rd_hours'=>$hours,
                                    //     'hourly_rate'=>$hourly_rate,
                                    //     'rd_rate'=>$deduction_rate,
                                    //     'total_rd_amount'=>$total
                                    // ]);

                                }
                             } else { ///// if not equal or divisible by 2 ang timekeeping, get the next day //////////
                                

                                $stime = Timekeeping::selectraw('min(recorded_time) as starttime, personal_id')
                                ->whereDate('recorded_time',$rdemp['rest_days'])
                                ->where('personal_id',$rdemp['personal_id'])
                                ->get();

                                $next_day = date('Y-m-d', strtotime($rdemp['rest_days'] . ' +1 day'));

                                $etime = Timekeeping::selectraw('min(recorded_time) as endtime, personal_id')
                                ->whereDate('recorded_time',$next_day)
                                ->where('personal_id',$rdemp['personal_id'])
                                ->get();

                                $start_time = $stime[0]['starttime'];
                                $end_time = $etime[0]['endtime'];

                                $nightdiff= night_difference(strtotime($start_time),strtotime($end_time));
                                $ps_id = getPayslipInfo('description', 'Rest Day', 'id');
                                $nd_id = getPayslipInfo('description', 'Night Premium', 'id');
                                $rates = getRates($ps_id);
                                $nd_rate = getRates($nd_id);

                                $rate_array = explode("_",$rates);
                                $deduction_type = $rate_array[0];
                                $adjustment_rate = $rate_array[1];

                                $nd_array =  explode("_",$nd_rate);
                                $np_rate = $nd_array[1];

                                $hours = getTimeDiff($start_time, $end_time);
                                $hourly_rate = getEmployeeDetails($rdemp['employee_id'], 'hourly_rate');
                                $holiday = checkHoliday($rdemp['rest_days']);
                               // echo $holiday . "<br>";
                                 ////////////////////////// CHECK IF HOLIDAY ////////////////////////////////

                                if($holiday == 0){
                                    if($deduction_type==1){  //// if percentage
                                        if($hours>=8){
                                            $total = ((8/8) * $adjustment_rate) * $hourly_rate;
                                        } else {
                                            $total = (($hours/8) * $adjustment_rate) * $hourly_rate;
                                        }
                                    }
                                } else if($holiday=='Regular'){
                                    
                                    if($deduction_type==1){  //// if percentage
                                        if($nightdiff==0){
                                            if($hours>=8){
                                                $total = ((8/8) * PERCENT_RD_RH) * $hourly_rate;
                                            } else {
                                                $total = (($hours/8) * PERCENT_RD_RH) * $hourly_rate;
                                            }
                                        } else if($nightdiff>0){
                                            
                                            if($hours>=8){
                                                
                                                $total = (((8/8) * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                            } else {
                                             
                                                $total = ((($hours/8) * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                            }
                                        }
                                    }
                                } else if($holiday=='Special'){
                                    if($deduction_type==1){  //// if percentage
                                        if($nightdiff==0){
                                            if($hours>8){
                                                $total = ((8/8) * PERCENT_RD_SH) * $hourly_rate;
                                            } else {
                                                $total = (($hours/8) * PERCENT_RD_SH) * $hourly_rate;
                                            }
                                        } else if($nightdiff>0){
                                            if($hours>8){
                                                $total = (((8/8) * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                            } else {
                                                $total = ((($hours/8) * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                            }
                                        }
                                    }
                                } else {
                                    if($deduction_type==1){  //// if percentage
                                        if($hours>8){
                                            $total = ((8/8) * 3.6) * $hourly_rate;
                                        } else {
                                            $total = (($hours/8) * 3.6) * $hourly_rate;
                                        }
                                    }
                                }

                                 ////////////////////////// END CHECK IF HOLIDAY ////////////////////////////////

                                //////////////////////////  CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                if($holiday==0 && $nightdiff>0){
                                 
                                    if($deduction_type==1){  //// if percentage
                                        if($hours>8){
                                            $rdrate = ((8/8) * $adjustment_rate) * $hourly_rate;
                                            $total = $rdrate*$np_rate;
                                        } else {
                                            $rdrate = (($hours/8) * $adjustment_rate) * $hourly_rate;
                                            $total = $rdrate*$np_rate;
                                        }
                                    }
                                }

                                echo  $rdemp['personal_id'] . " - " .$hours . ", ". $hourly_rate .", " .$holiday.",", $nightdiff." = ". $total . "<br>";
                                //////////////////////////  END CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////

                               // echo $rdemp['rest_days'] . " " . $holiday . " = " . $total. "<br>";
                                // $save = RDDetail::create([
                                //     'rd_head_id'=>$save_head_id,
                                //     'employee_id'=>$rdemp['employee_id'],
                                //     'personal_id'=>$rdemp['personal_id'],
                                //     'rd_date'=>$rdemp['rest_days'],
                                //     'rd_hours'=>$hours,
                                //     'hourly_rate'=>$hourly_rate,
                                //     'rd_rate'=>$deduction_rate,
                                //     'total_rd_amount'=>$total
                                // ]);

                               
                             }

                           
                        }
                         
                          
                        }   
                        $getRDsEmp=array();
                      
                    }
                   
            }
>>>>>>> cd42ea6e9ee6c5ae455608558455ec8c0d22456e

            
            //$employee_list = collect($employee_list)->sortBy('name')->toArray();
           // $payslipinfo = PayslipInfo::all();
         
        }

    
    }

       /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function show(PayrollSalary $payrollSalary)
    {
        return view('payroll_salary.print');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(PayrollSalary $payrollSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PayrollSalary $payrollSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PayrollSalary  $payrollSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(PayrollSalary $payrollSalary)
    {
        //
    }


    public function printBulk()
    {
        return view('payroll_salary.bulk');
    }
}

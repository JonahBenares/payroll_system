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
use App\Models\AdjCalcHead;
use App\Models\AdjCalcDetail;


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
            
                $counthead= AdjCalcHead::where('salary_month', $month)
                            ->where('salary_year', $year)
                            ->where('cutoff', $cutoff)
                            ->count();
                
<<<<<<< HEAD
                if($counthead==0){
=======
                if($count==0){
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8

                    $save_head_id = AdjCalcHead::insertGetId([
                        'salary_year'=>$year,
                        'salary_month'=>$month,
                        'cutoff'=>$cutoff,
                        'created_at'=>date("Y-m-d H:i:s")
                    ]);
                } else {
                    $getheadid= AdjCalcHead::select('id')
                            ->where('salary_month', $month)
                            ->where('salary_year', $year)
                            ->where('cutoff', $cutoff)
                            ->get();
                    $save_head_id=$getheadid[0]['id'];
                    
                }
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

                        if($shiftcount == 0){ ///// if no RD in the given period, then no deduction
                            $rd_deduction = 0;
                        } else {
                            $shiftdetails = ShiftSchedule::select('employee_id','personal_id','rest_day')
                            ->where("employee_id","=",$emp->id)
                            ->where("month_year","=",$year_month)
                            ->whereBetween('rest_day',[$start_date,$end_date])
                            ->join('schedule_detail', 'schedule_head.id', '=', 'schedule_detail.schedule_head_id')
                            ->get();
                        }

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
                            // $duty_count = Timekeeping::select('recorded_time')
                            // ->wherein(Timekeeping::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"), $getRDs)
                            // ->where('personal_id',$emp->personal_id)
                            // ->count();
                    }
                }
                         
                        foreach($getRDsEmp AS $rdemp){

<<<<<<< HEAD
                            // $time_count = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                            // ->whereDate('recorded_time',$rdemp['rest_days'])
                            // ->where('personal_id',$rdemp['personal_id'])
                            // ->count();

                       
                        
                            // if($time_count%2==0){ ///// if equal or divisible by 2 ang timekeeping //////////
                            //     $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                            //     ->whereDate('recorded_time',$rdemp['rest_days'])
                            //     ->where('personal_id',$rdemp['personal_id'])
                            //     ->get();
                            //    // if(!empty($time[0]['personal_id'])){
                            //         $start_time = $time[0]['starttime'];
                            //         $end_time = $time[0]['endtime'];
                                  
                            //    // }
                            // } else {

                            //     $stime = Timekeeping::selectraw('min(recorded_time) as starttime, personal_id')
                            //     ->whereDate('recorded_time',$rdemp['rest_days'])
                            //     ->where('personal_id',$rdemp['personal_id'])
                            //     ->get();

                            //     $next_day = date('Y-m-d', strtotime($rdemp['rest_days'] . ' +1 day'));
                               
                            //     $etime = Timekeeping::selectraw('min(recorded_time) as endtime, personal_id')
                            //     ->whereDate('recorded_time',$next_day)
                            //     ->where('personal_id',$rdemp['personal_id'])
                            //     ->get();

                            //     $start_time = $stime[0]['starttime'];
                            //     $end_time = $etime[0]['endtime'];

                              
                            // }

                            $time = getEmployeeTime($rdemp['rest_days'],$rdemp['personal_id']);
                            $t=explode("_",$time);
                            $start_time=$t[0];
                            $end_time=$t[1];
=======
                            $time_count = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                            ->whereDate('recorded_time',$rdemp['rest_days'])
                            ->where('personal_id',$rdemp['personal_id'])
                            ->count();

                       
                        
                            if($time_count%2==0){ ///// if equal or divisible by 2 ang timekeeping //////////
                                $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                                ->whereDate('recorded_time',$rdemp['rest_days'])
                                ->where('personal_id',$rdemp['personal_id'])
                                ->get();
                               // if(!empty($time[0]['personal_id'])){
                                    $start_time = $time[0]['starttime'];
                                    $end_time = $time[0]['endtime'];
                                  
                               // }
                            } else {

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

                              
                            }
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8

                            if(!empty($end_time)){
                          
                                
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

                                  
                                    ////////////////////////// CHECK IF HOLIDAY ////////////////////////////////
                                    if($holiday == 0 && $nightdiff==0){
                                      
                                        if($deduction_type==1){  //// if percentage
                                            if($hours>=8){
                                                $total_daily_rate =  (8 * $adjustment_rate) * $hourly_rate;
                                                $rd_amount = (8 * $adjustment_rate) * $hourly_rate;
                                                $holiday_amount=0;
                                                $np_amount=0;
                                                $normal_hours=8;
                                                $np_hours=0;
                                            } else {
                                                $total_daily_rate = ($hours * $adjustment_rate) * $hourly_rate;
                                                $rd_amount = ($hours * $adjustment_rate) * $hourly_rate;
                                                $holiday_amount=0;
                                                $np_amount=0;
                                                $normal_hours=$hours;
                                                $np_hours=0;
                                            }
                                        }
                                        $holiday_rate = 0;
                                    } 
                                    
                                    else if($holiday=='Regular'){
                                      
                                        if($deduction_type==1){  //// if percentage

                                            if($nightdiff==0){
                                            
                                                if($hours>=8){
                                                    $total_daily_rate = (8 * PERCENT_RD_RH) * $hourly_rate;
                                                    $rd_amount = 0;
                                                    $holiday_amount =(8 * PERCENT_RD_RH) * $hourly_rate;
                                                    $np_amount=0;
                                                    $normal_hours=8;
                                                    $np_hours=0;
                                                } else {
                                                    $total_daily_rate = ($hours * PERCENT_RD_RH) * $hourly_rate;
                                                    $rd_amount = 0;
                                                    $holiday_amount =($hours * PERCENT_RD_RH) * $hourly_rate;
                                                    $np_amount=0;
                                                    $normal_hours=$hours;
                                                    $np_hours=0;
                                                }

                                                
                                            } else if($nightdiff>0){
                                                
                                                if($nightdiff == $hours){ /// if all hours are with Night Premium
                                                    if($hours>=8){
                                                        $total_daily_rate = ((8 * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount = ((8 * $hourly_rate) * PERCENT_RD_RH);
                                                        $np_amount = ((8 * $hourly_rate) * PERCENT_RD_RH) * ($np_rate-1);
                                                        $normal_hours=8;
                                                        $np_hours=0;
                                                    } else {
                                                        $total_daily_rate = (($hours * $hourly_rate) * PERCENT_RD_RH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount = ((8 * $hourly_rate) * PERCENT_RD_RH);
                                                        $np_amount = (($hours * $hourly_rate) * PERCENT_RD_RH) * ($np_rate-1);
                                                        $normal_hours=$hours;
                                                        $np_hours=0;
                                                    }
                                                } else {  ///// if all hours are not night premium
                                                    if($hours<8){
                                                        $normal = $hours - $nightdiff;
                                                        $normal_calc = ($normal * $hourly_rate) * PERCENT_RD_RH;
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc;

                                                        $rd_amount = 0;
                                                        $holiday_amount = (8 * $hourly_rate) * PERCENT_RD_RH;
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * ($np_rate-1);

                                                        $normal_hours=$normal;
                                                        $np_hours=$nightdiff;

                                                    } else { 
                                                        $normal = $hours - $nightdiff;
                                                        $normal_no_ot = 8 - $nightdiff;
                                                        $normal_calc = (($normal_no_ot * $hourly_rate) * PERCENT_RD_RH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc; 

                                                        $rd_amount = 0;
                                                        $holiday_amount = ((8 * $hourly_rate) * PERCENT_RD_RH);
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_RH) * ($np_rate-1);

                                                        $normal_hours=$normal_no_ot;
                                                        $np_hours=$nightdiff;
                                                    }

                                                }
                                            }
                                        }

                                        $holiday_rate = PERCENT_RD_RH;
                                   
                                    } else if($holiday=='Special'){
                                        if($deduction_type==1){  //// if percentage

                                            if($nightdiff==0){
                                                if($hours>=8){
                                                    $total_daily_rate = (8 * PERCENT_RD_SH) * $hourly_rate;

                                                    $rd_amount = 0;
                                                    $holiday_amount = (8 * PERCENT_RD_SH) * $hourly_rate;
                                                    $np_amount = 0;
<<<<<<< HEAD

                                                    $normal_hours=8;
                                                    $np_hours=0;

                                                } else {
                                                    $total_daily_rate = ($hours * PERCENT_RD_SH) * $hourly_rate;
                                                    $rd_amount = 0;
                                                    $holiday_amount = ($hours * PERCENT_RD_SH) * $hourly_rate;
                                                    $np_amount = 0;

                                                    $normal_hours=$hours;
                                                    $np_hours=0;
                                                }
                                            } else if($nightdiff>0){
                                              

                                                if($nightdiff == $hours){ /// if all hours are with Night Premium
                                                    if($hours>=8){
                                                        $total_daily_rate = ((8 * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount =((8 * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = ((8 * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);

                                                        $normal_hours=0;
                                                        $np_hours=8;


                                                    } else {
                                                        $total_daily_rate = (($hours * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount =(($hours * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($hours * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=0;
                                                        $np_hours=$hours;
                                                    }
                                                } else {  ///// if all hours are not night premium
                                                 
                                                    if($hours<8){
                                                        $normal = $hours - $nightdiff;
                                                        $normal_calc = (($normal * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc;

                                                        $rd_amount = 0;
                                                        $holiday_amount =(($hours * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=$normal;
                                                        $np_hours=$nightdiff;


=======

                                                    $normal_hours=8;
                                                    $np_hours=0;

                                                } else {
                                                    $total_daily_rate = ($hours * PERCENT_RD_SH) * $hourly_rate;
                                                    $rd_amount = 0;
                                                    $holiday_amount = ($hours * PERCENT_RD_SH) * $hourly_rate;
                                                    $np_amount = 0;

                                                    $normal_hours=$hours;
                                                    $np_hours=0;
                                                }
                                            } else if($nightdiff>0){
                                              

                                                if($nightdiff == $hours){ /// if all hours are with Night Premium
                                                    if($hours>=8){
                                                        $total_daily_rate = ((8 * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount =((8 * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = ((8 * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);

                                                        $normal_hours=0;
                                                        $np_hours=8;


                                                    } else {
                                                        $total_daily_rate = (($hours * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
                                                        $rd_amount = 0;
                                                        $holiday_amount =(($hours * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($hours * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=0;
                                                        $np_hours=$hours;
                                                    }
                                                } else {  ///// if all hours are not night premium
                                                 
                                                    if($hours<8){
                                                        $normal = $hours - $nightdiff;
                                                        $normal_calc = (($normal * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;

                                                        $total_daily_rate = $normal_calc + $nd_calc;

                                                        $rd_amount = 0;
                                                        $holiday_amount =(($hours * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=$normal;
                                                        $np_hours=$nightdiff;


>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8
                                                    } else { 
                                                        $normal = $hours - $nightdiff;
                                                        $normal_no_ot = 8 - $nightdiff;
                                                        $normal_calc = (($normal_no_ot * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;
<<<<<<< HEAD
=======

                                                        $total_daily_rate = $normal_calc + $nd_calc; 

                                                        $rd_amount = 0;
                                                        $holiday_amount =((8 * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=$normal_no_ot;
                                                        $np_hours=$nightdiff;
                                                    }

                                                }

                                            }
                                        }

                                        $holiday_rate = PERCENT_RD_SH;
                                    } 
                                
                                  
                                      //////////////////////////  CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                if($holiday==0 && $nightdiff>0){
                                    if($deduction_type==1){  
                                      
                                        // $normal = $hours - $nightdiff;
                                        // $normal_calc = ($normal * $adjustment_rate) * $hourly_rate;
                                        // $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                        // $total_daily_rate = $normal_calc + $nd_calc;

                                        if($hours<8){
                                            $normal = $hours - $nightdiff;
                                            $normal_calc = (($normal * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc;
                                            $rd_amount =(($hours * $adjustment_rate) * $hourly_rate);
                                            $holiday_amount =0;
                                            $np_amount = (($nightdiff * $adjustment_rate) * $hourly_rate) * ($np_rate-1);

                                            $normal_hours=$normal;
                                            $np_hours=$nightdiff;

                                        } else { 
                                            $normal = $hours - $nightdiff;
                                            $normal_no_ot = 8 - $nightdiff;
                                            //echo $normal_no_ot . " = " . $adjustment_rate . " = " . $hourly_rate . "<br><br>";
                                            $normal_calc = (($normal_no_ot * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc; 

                                            $rd_amount =((8 * $adjustment_rate) * $hourly_rate);
                                            $holiday_amount =0;
                                            $np_amount = (($nightdiff * $adjustment_rate) * $hourly_rate) * ($np_rate-1);
                                            $normal_hours=$normal_no_ot;
                                            $np_hours=$nightdiff;
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
                               
                                //////////////////////////  END CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                
                                     ////////////////////////// END CHECK IF HOLIDAY ////////////////////////////////
                            $counthead= AdjCalcHead::where('salary_month', $month)
                            ->where('salary_year', $year)
                            ->where('cutoff', $cutoff)
                            ->count();
                                    $save = AdjCalcDetail::create([
                                        'adj_calc_head_id'=>$save_head_id,
                                        'employee_id'=>$rdemp['employee_id'],
                                        'personal_id'=>$rdemp['personal_id'],
                                        'rd_date'=>$rdemp['rest_days'],
                                        'rd_hours'=>$hours,
                                        'normal_hours'=>$normal_hours,
                                        'np_hours'=>$np_hours,
                                        'hourly_rate'=>$hourly_rate,
                                        'rd_amount'=>$rd_amount,
                                        'np_rate'=>$np_rate,
                                        'np_amount'=>$np_amount,
                                        'holiday_rate'=>$holiday_rate,
                                        'holiday_amount'=>$holiday_amount,
                                        'rd_rate'=>$adjustment_rate,
                                        'total_amount'=>$total_daily_rate
                                    ]);

                            }
                             
                    
                             
                     }
                        $getRDsEmp=array();
                      
                  
                   
            

            
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
>>>>>>> 25c1ed314941e9c72afe617b7fd45db92cf68dc8

                                                        $total_daily_rate = $normal_calc + $nd_calc; 

                                                        $rd_amount = 0;
                                                        $holiday_amount =((8 * $hourly_rate) * PERCENT_RD_SH);
                                                        $np_amount = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * ($np_rate-1);
                                                        $normal_hours=$normal_no_ot;
                                                        $np_hours=$nightdiff;
                                                    }

                                                }

                                            }
                                        }

                                        $holiday_rate = PERCENT_RD_SH;
                                    } 
                                
                                  
                                      //////////////////////////  CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                if($holiday==0 && $nightdiff>0){
                                    if($deduction_type==1){  
                                      
                                        // $normal = $hours - $nightdiff;
                                        // $normal_calc = ($normal * $adjustment_rate) * $hourly_rate;
                                        // $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                        // $total_daily_rate = $normal_calc + $nd_calc;

                                        if($hours<8){
                                            $normal = $hours - $nightdiff;
                                            $normal_calc = (($normal * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc;
                                            $rd_amount =(($hours * $adjustment_rate) * $hourly_rate);
                                            $holiday_amount =0;
                                            $np_amount = (($nightdiff * $adjustment_rate) * $hourly_rate) * ($np_rate-1);

                                            $normal_hours=$normal;
                                            $np_hours=$nightdiff;

                                        } else { 
                                            $normal = $hours - $nightdiff;
                                            $normal_no_ot = 8 - $nightdiff;
                                            //echo $normal_no_ot . " = " . $adjustment_rate . " = " . $hourly_rate . "<br><br>";
                                            $normal_calc = (($normal_no_ot * $adjustment_rate) * $hourly_rate);
                                            $nd_calc = (($nightdiff * $adjustment_rate) * $hourly_rate) * $np_rate;

                                            $total_daily_rate = $normal_calc + $nd_calc; 

                                            $rd_amount =((8 * $adjustment_rate) * $hourly_rate);
                                            $holiday_amount =0;
                                            $np_amount = (($nightdiff * $adjustment_rate) * $hourly_rate) * ($np_rate-1);
                                            $normal_hours=$normal_no_ot;
                                            $np_hours=$nightdiff;
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
                               
                                //////////////////////////  END CHECK IF NIGHT DIFFERENTIAL ////////////////////////////////
                                
                                     ////////////////////////// END CHECK IF HOLIDAY ////////////////////////////////
                            $countdetail= AdjCalcDetail::where('personal_id', $rdemp['personal_id'])
                            ->where('rd_date',$rdemp['rest_days'])
                            ->count();
                            
                            if($countdetail == 0){

                                    $save = AdjCalcDetail::create([
                                        'adj_calc_head_id'=>$save_head_id,
                                        'employee_id'=>$rdemp['employee_id'],
                                        'personal_id'=>$rdemp['personal_id'],
                                        'rd_date'=>$rdemp['rest_days'],
                                        'rd_hours'=>$hours,
                                        'normal_hours'=>$normal_hours,
                                        'np_hours'=>$np_hours,
                                        'hourly_rate'=>$hourly_rate,
                                        'rd_amount'=>$rd_amount,
                                        'np_rate'=>$np_rate,
                                        'np_amount'=>$np_amount,
                                        'holiday_rate'=>$holiday_rate,
                                        'holiday_amount'=>$holiday_amount,
                                        'rd_rate'=>$adjustment_rate,
                                        'total_amount'=>$total_daily_rate
                                    ]);
                            }

                            }
                             
                    
                             
                     }
                        $getRDsEmp=array();
                      
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


    public function holiday_computation($month, $year, $cutoff){

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
        
            // $counthead= AdjCalcHead::where('salary_month', $month)
            //             ->where('salary_year', $year)
            //             ->where('cutoff', $cutoff)
            //             ->count();
            
            // if($counthead==0){

            //     $save_head_id = AdjCalcHead::insertGetId([
            //         'salary_year'=>$year,
            //         'salary_month'=>$month,
            //         'cutoff'=>$cutoff,
            //         'created_at'=>date("Y-m-d H:i:s")
            //     ]);
            // } else {
            //     $getheadid= AdjCalcHead::select('id')
            //             ->where('salary_month', $month)
            //             ->where('salary_year', $year)
            //             ->where('cutoff', $cutoff)
            //             ->get();
            //     $save_head_id=$getheadid[0]['id'];
                
            // }


            $count_holidays_this_month = Holiday::whereBetween('holiday_date',[$start_date,$end_date])
                                        ->count();

            if($count_holidays_this_month!=0){

                $getholidays =  Holiday::whereBetween('holiday_date',[$start_date,$end_date])
                                ->get();

                foreach($getholidays AS $hol){

                    $getemployees = Timekeeping::whereDate('recorded_time',$hol->holiday_date)->get();

                    $time = getEmployeeTime($hol->holiday_date,$getemployees[0]['personal_id']);
                   
                    $t=explode("_",$time);

                    $start_time=$t[0];
                    $end_time=$t[1];
                    //echo $getemployees[0]['personal_id'] . " =  " . $start_time . " to " . $end_time . "<br>";
                    $hours = getTimeDiff($start_time, $end_time);
                    $hourly_rate = getEmployeeDetails($getemployees[0]['personal_id'], 'hourly_rate');

                    if($hours>=8){
                        $total_amount = (8 * $hourly_rate) * $hol->holiday_rate;  
                    } else {
                        $total_amount = ($np_hours * $hourly_rate) * $hol->holiday_rate;  
                    }

                    //echo $getemployees[0]['personal_id'] . ",  " . $hol->holiday_date. ", " .  $hours . " , " . $hourly_rate . " = " . $total_amount ."<br>";
                    $countdetail= AdjCalcDetail::where('personal_id', $getemployees[0]['personal_id'])
                    ->where('rd_date',$hol->holiday_date)
                    ->count();
                    
                    if($countdetail == 0){

                            $save = AdjCalcDetail::create([
                                'adj_calc_head_id'=>$save_head_id,
                                'employee_id'=>$getemployees[0]['employee_id'],
                                'personal_id'=>$getemployees[0]['personal_id'],
                                'rd_date'=>$hol->holiday_date,
                                'rd_hours'=>$hours,
                                'normal_hours'=>$hours,
                                'np_hours'=>0,
                                'hourly_rate'=>$hourly_rate,
                                'rd_amount'=>0,
                                'np_rate'=>0,
                                'np_amount'=>0,
                                'holiday_rate'=>$hol->holiday_rate,
                                'holiday_amount'=>$total_amount,
                                'rd_rate'=>0,
                                'total_amount'=>$total_amount
                            ]);
                    }
                }
            }

    }
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

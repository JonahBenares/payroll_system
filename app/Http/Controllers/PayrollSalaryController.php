<?php

namespace App\Http\Controllers;

//use App\Models\PayrollSalary;
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
use App\Models\PayslipSalary;
use App\Models\PayslipSalaryDetail;
use App\Models\TimekeepingLogs;


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
        $cutoff_type=$request->cutoff;
        $filters = array(
            'month'=>'',
            'year'=>'',
            'cutoff'=>'',
            'status'=>''
        );
        $employee_list=array();
        $payslipinfo=array();
        $adj_ids=array();
        $less_ids=array();
        $deduction_ids=array();
        $incompletelogs=array();
        if($request->has('month') && $request->status=='incomplete'){
            $filters = array(
                'month'=>$request->month,
                'year'=>$request->year,
                'cutoff'=>$request->cutoff,
                'status'=>$request->status
            );

            $year_month = $request->year."-".$request->month;

           
            $count_inc = TimekeepingLogs::where("month_year", $year_month)->where("period",$request->cutoff)->where("overall_time",NULL)->count();
            
            if($count_inc>0){
               $incompletelogs= TimekeepingLogs::where("month_year", $year_month)->where("period",$request->cutoff)->where("overall_time",NULL)->get();
            }
        }
        if($request->has('month') && $request->status=='generate'){

          
            $filters = array(
                'month'=>$request->month,
                'year'=>$request->year,
                'cutoff'=>$request->cutoff,
                'status'=>$request->status
            );
            $count_head = PayslipSalary::where("salary_year",$request->year)
            ->where("salary_month",$request->month)
            ->Where("cutoff",$request->cutoff)
            ->count();

          
            if($count_head==0){        

                $save_head_id = PayslipSalary::insertGetId([
                    'salary_year'=>$request->year,
                    'salary_month'=>$request->month,
                    'cutoff'=>$request->cutoff,
                    'created_at'=>date("Y-m-d H:i:s")
                ]);
            } else {
                $get_save_head_id =  PayslipSalary::select('id')
                    ->where("salary_year",$request->year)
                    ->where("salary_month",$request->month)
                    ->Where("cutoff",$request->cutoff)
                    ->get();

                $save_head_id=$get_save_head_id[0]['id'];
            }

            $employees = Employee::all();
            foreach($employees AS $emp){
              
                $employee_list[] = array(
                    'id'=>$emp->id,
                    'name'=>getEmployeeName($emp->id),
                    'personal_id'=>$emp->personal_id
                );

                
                $payslipinfo_head = PayslipInfo::select('payslip_info.id AS id','payslip_info.pay_type','payslip_info.editable','payslip_info.description')
                ->where("visible","1")
                ->where("deduction_period",$request->cutoff)
                ->orWhere("deduction_period","")
                ->join("deductions","payslip_info.id","=", "deductions.payslip_info_id")
                ->get();  ///DEDUCTIONS ONLY
            
             
              // echo $emp->id ."<br>";

                foreach($payslipinfo_head AS $ps){
                  
                    if($ps->pay_type =='3'){
                        $amount = getDeductionRate($emp->personal_id,$ps->id);
                    } else {
                        $amount = 0;
                    }

                    $count_details = PayslipSalaryDetail::where("payslip_salary_head_id","$save_head_id")
                    ->where("personal_id",$emp->personal_id)
                    ->Where("payslip_info_id",$ps->id)
                    ->count();

                    if($count_details == 0){
                        $save = PayslipSalaryDetail::create([
                            'payslip_salary_head_id'=>$save_head_id,
                            'employee_id'=>$emp->id,
                            'personal_id'=>$emp->personal_id,
                            'payslip_info_id'=>$ps->id,
                            'description'=>$ps->description,
                            'total_amount'=>$amount,
                            'created_at'=>date("Y-m-d H:i:s")
                            
                        ]);
                    }

                 }


                 $payslipinfo_adj = PayslipInfo::select('payslip_info.id AS id','payslip_info.pay_type','payslip_info.editable','payslip_info.description')
                 ->where("visible","1")
                 ->where("pay_type","1")
                 ->get();

               
                 foreach($payslipinfo_adj AS $adj){

                    if($adj->pay_type =='1'){  ///adjustment    
                     
                         //echo $emp->personal_id . " = " .  $adj->description . " - " . getAdjustmentRate($emp->personal_id, $adj->id, $request->year, $request->month, $request->cutoff) . "<br>";
                         getAdjustmentRate($emp->personal_id, $adj->id, $request->year, $request->month, $request->cutoff);
                    }
                 }

                 $count_details_sal = PayslipSalaryDetail::where("payslip_salary_head_id","$save_head_id")
                 ->where("personal_id",$emp->personal_id)
                 ->Where("payslip_info_id",'0')
                 ->count();

                 if($count_details_sal == 0){
                    $monthly = getSalary("Monthly", $emp->id)/2;
                    $save = PayslipSalaryDetail::create([
                        'payslip_salary_head_id'=>$save_head_id,
                        'employee_id'=>$emp->id,
                        'personal_id'=>$emp->personal_id,
                        'payslip_info_id'=>0,
                        'description'=>'Basic Salary',
                        'total_amount'=>$monthly,
                        'created_at'=>date("Y-m-d H:i:s")
                        
                    ]);
                }

            }  /// end foreach employees
           
             $employee_list = collect($employee_list)->sortBy('name')->toArray();
           
            $payslipinfo= PayslipInfo::where("visible","1")->get();
          
            $adj_ids = "";
            $less_ids="";
            $deduction_ids="";
             foreach($payslipinfo AS $ps){
             
                 if($ps->pay_type == 1){
                     $adj_ids .= $ps->id . "_";

                  
                 }elseif($ps->pay_type == 2){
                     $less_ids .= $ps->id . "_";
                 }elseif($ps->pay_type == 3){
                      $deduc_sched = checkDeductionSchedule($ps->id);

                    if($deduc_sched==$request->cutoff || $deduc_sched == ""){
                        $deduction_ids.= $ps->id."_";
                    }
                 }
             }

            $adj_ids=substr($adj_ids,0,-1);
            $less_ids=substr($less_ids,0,-1);
            $deduction_ids=substr($deduction_ids,0,-1);   

        }
        return view('payroll_salary.index',compact('cutoff','cutoff_type','filters','employee_list','payslipinfo', 'adj_ids', 'less_ids','deduction_ids', 'incompletelogs'));
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
                
                if($counthead==0){

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

                            $time = getEmployeeTime($rdemp['rest_days'],$rdemp['personal_id'], 'time');
                            $t=explode("-",$time);
                            $start_time=$t[0];
                            $end_time=$t[1];

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


                                                    } else { 
                                                        $normal = $hours - $nightdiff;
                                                        $normal_no_ot = 8 - $nightdiff;
                                                        $normal_calc = (($normal_no_ot * $hourly_rate) * PERCENT_RD_SH);
                                                        $nd_calc = (($nightdiff * $hourly_rate) * PERCENT_RD_SH) * $np_rate;

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

    public function adjustment_computation($month, $year, $cutoff){

        $dates = explode("_",$this->period_dates($month, $year, $cutoff));
        $start_date = $dates[0];
        $end_date = $dates[1];

        //echo $start_date . " to " . $end_date;
        $get_logs = TimekeepingLogs::whereBetween('log_date',[$start_date, $end_date])->get();

        $save_head_id = AdjCalcHead::insertGetId([
            'salary_year'=>$year,
            'salary_month'=>$month,
            'cutoff'=>$cutoff,
            'created_at'=>date("Y-m-d H:i:s")
        ]);

        foreach($get_logs AS $logs){

             $getemp = Employee::select('id')->where('personal_id', $logs->personal_id)->get();
             $employee_id = $getemp[0]['id'];

             

                if($logs->night_shift =='1'){
                    if($logs->nd_hours >= 8){
                        $np_hours= 8;
                        $regular_hours =0;

                    } else {
                        $np_hours= $logs->nd_hours;
                        $regular_hours = 8-$logs->nd_hours;
                    }
                } else {
                    $np_hours=0;
                    if($logs->overall_time>=8){
                        $regular_hours = 8;  
                    } else {
                        $regular_hours = $logs->overall_time;
                    }
                }
                
                $hourly_rate = getEmployeeDetails($logs->personal_id, 'hourly_rate');

                if($logs->holiday == '0' && $logs->rest_day == '0' && $logs->night_shift == '0'){
                    
                    $regular_amount = $hourly_rate * $regular_hours;
                    $rest_day=0;
                    $rd_rate=0;
                    $rd_amount=0;
                    $holiday = 0;
                    $holiday_rate = 0;
                    $holiday_amount = 0;
                    $night_premium = 0;
                    $np_rate = 0;
                    $np_amount = 0;
                    
                }
                else if($logs->holiday == '1' && $logs->rest_day == '0' && $logs->night_shift == '0'){
                    $holiday_rate = getHolidayRate($logs->log_date);
                    $hol_amount = ($hourly_rate * $regular_hours) * ($holiday_rate-1);
                    $regular_amount = $hourly_rate * $regular_hours;
                    $rest_day=0;
                    $rd_rate=0;
                    $rd_amount=0;
                    $holiday = 1;
                    $holiday_rate = $holiday_rate;
                    $holiday_amount = 0;

                }
                else if($logs->holiday == '0' && $logs->rest_day == '1' && $logs->night_shift == '0'){
                    
                    $ps_id = getPayslipInfo('description', 'Rest Day', 'id');
                    //$nd_id = getPayslipInfo('description', 'Night Premium', 'id');
                    $rates = getRates($ps_id);
                    //$nd_rate = getRates($nd_id);

                    $restday_rate = $rate_array[1];

                    // $nd_array =  explode("_",$nd_rate);
                    // $np_rate = $nd_array[1];
                    
                    $rdamount = ($hourly_rate * $regular_hours) * (1-$restday_rate);

                    $regular_amount = $hourly_rate * $regular_hours;
                    $rest_day=1;
                    $rd_rate=$restday_rate;
                    $rd_amount=$rdamount;
                    $holiday = 0;
                    $holiday_rate = $holiday_rate;
                    $holiday_amount = 0;

                }
             $save = AdjCalcDetail::create([
                    'adj_calc_head_id'=>$save_head_id,
                    'employee_id'=>$employee_id,
                    'personal_id'=>$logs->personal_id,
                    'log_date'=>$logs->log_date,
                    'regular_hours'=>$regular_hours,
                    'np_hours'=>0,
                    'hourly_rate'=>$hourly_rate,
                    'rd_amount'=>0,
                    'rest_day'=>0,
                    'rd_rate'=>0,
                    'rd_amount'=>0,
                    'holiday'=>0,
                    'holiday_rate'=>$hol->holiday_rate,
                    'holiday_amount'=>$total_amount,
                    'night_premium'=>0,
                    'np_rate'=>0,
                    'np_amount'=>0,
                    'total_amount'=>$total_amount
                ]);
        }

    }

    public function period_dates($month, $year, $cutoff)
    {
        if( $cutoff== 'EOM'){
            $cut = CutOff::select('cutoff_start','cutoff_end')
                ->where("cutoff_type","=",$cutoff)->get();
                
            $start=str_pad($cut[0]['cutoff_start'],2,"0",STR_PAD_LEFT);
            $end=str_pad($cut[0]['cutoff_end'],2,"0",STR_PAD_LEFT);

            $start_date = $year."-".$month."-".$start;
            $end_date = $year."-".$month."-".$end;
        } else {
            $cut = CutOff::select('cutoff_start','cutoff_end')
            ->where("cutoff_type","=",$cutoff)->get();
        
            $start=str_pad($cut[0]['cutoff_start'],2,"0",STR_PAD_LEFT);
            $end=str_pad($cut[0]['cutoff_end'],2,"0",STR_PAD_LEFT);

            $start_d = $year."-".$month."-".$start;
            $end_date = $year."-".$month."-".$end;

            $start_date = date("Y-m-d", strtotime ('-1 month',strtotime ($start_d)));
        }
       // echo getEmployeeTime('2023-01-06','1' );
       return $start_date ." _ ".$end_date;
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

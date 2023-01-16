<?php

namespace App\Http\Controllers;

use App\Models\ShiftSchedule;
use App\Models\ShiftScheduleDetail;
use App\Models\Schedule;
use App\Models\Holiday;
use App\Models\Employee;
use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShiftScheduleController extends Controller
{
   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
     


    public function index(Request $request)
    {
        $departments=Department::all();
        $employees=Employee::all();

        $req = count($request->all());
       
        if($req>0){
            $mo_yr = $request->year."-".$request->month;
            $nodays= Carbon::now()->month($request->month)->daysInMonth;
        } else {
            $mo_yr = date("Y-m");
            $month = date("m");
           
            $nodays= Carbon::now()->month($month)->daysInMonth;
        }

        for($x=1;$x<=$nodays;$x++){
            $date = $mo_yr."-".$x;
            $date = Carbon::createFromFormat('Y-m-d', $date)->format('Y-m-d');
            $day = Carbon::createFromFormat('Y-m-d', $date)->format('D');
            $firstletter = mb_substr($day,0,1);
            $no_of_days[] = array(
                "number"=>$x,
                "days"=>$firstletter,
                "date_shift"=>$date
            );
        }
        return view("shift_sched.index", compact('departments', 'employees','no_of_days','nodays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function get_employee_sched($employee_id, $date){
        $year = date("Y",strtotime($date));
        $year_mo = date("Y-m",strtotime($date));
       
        $holiday = Holiday::where('holiday_date','=',$date)
        ->where('calendar_year','=',$year)
        ->get();

        $holidaycount = count($holiday); 
        //return $holidaycount;
        if($holidaycount>0){
            $type = Holiday::select('holiday_type')->where('holiday_date', $date)->get();
            if($type = "Regular"){
                $shift = "RH";
            } else if($type = "Special"){
                $shift = "SH";
            } else {
                $shift = "H";
            }
        } else {
            $get_rd = ShiftSchedule::select('schedule_head.employee_id','schedule_head.schedule_code')
                        ->join('schedule_detail','schedule_detail.schedule_head_id','=','schedule_head.id')
                        ->where('schedule_head.employee_id','=',$employee_id)
                        ->where('schedule_detail.rest_day','=',$date)
                        ->get();

            $count_rd = count($get_rd);
            if($count_rd>0){
                $shift = "RD";
            } else{

                $get_code = ShiftSchedule::select('schedule_code')
                        ->where('employee_id','=',$employee_id)
                        ->where('month_year','=',$year_mo)
                        ->get();
                $code_count=count($get_code);
                if($code_count>0){
                    $shift=$get_code[0]['schedule_code'];
                } else {
                    $shift="";
                }
                
            }
        }
        return $shift;

    }

    public function create()
    {
        $schedule=Schedule::all();
        $employees=Employee::all();
        
        return view('shift_sched.create' , compact('schedule','employees'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $monthName=Carbon::createFromDate($request->year, $request->month);
        
        $mo_name= $monthName->format('F');
        
        if($request->sched_type == 'regular'){
            $rd1 = $request->rest_day1;
            $rd2 = $request->rest_day2;
            foreach($request->employee AS $emp_id){
            
                if($request->alternate == '1'){
                
                    if($request->alternate_RD == 'rd1'){ //Rest day1 is chosen for alternate option
                        $rest_days = $this->alternate_RD($rd1,$mo_name,$request->year,$request->restdays);
                        $rest_days2= $this->get_restdays("",$rd2,$mo_name,$request->year);
                    } else if($request->alternate_RD == 'rd2'){ //Rest day2 is chosen for alternate option
                        $rest_days = $this->alternate_RD($rd2,$mo_name,$request->year,$request->restdays);
                        $rest_days2= $this->get_restdays($rd1,"",$mo_name,$request->year);
                    }
                
                } else { // NO ALTERNATE RESTDAYS
                    $rest_days = $this->get_restdays($rd1,$rd2,$mo_name,$request->year);
                    
                }

                $personal_id = Employee::find($emp_id)->personal_id;
                $month_year = $request->year."-".$request->month;
                    $shift_id = ShiftSchedule::insertGetId([
                        'employee_id'=>$emp_id,
                        'personal_id'=>$personal_id,
                        'schedule_code'=>$request->schedule_code,
                        'month_year'=>$month_year,
                        'schedule_type'=>$request->sched_type,
                        'alternate'=>$request->alternate,
                        'alternate_week'=>$request->restdays,
                        'alternate_rd'=>$request->alternate_RD,
                        'rd1_day'=>$request->rest_day1,
                        'rd2_day'=>$request->rest_day2,
                    ]);
                    
                
                    foreach($rest_days AS $rdd){
                        if(!empty($rdd)){
                            ShiftScheduleDetail::create([
                                'schedule_head_id'=>$shift_id,
                                'rest_day'=>$rdd
                            ]);
                        }
                    }

                    if(!empty($rest_days2)){
                        foreach($rest_days2 AS $rdd2){
                            if(!empty($rdd2)){
                                ShiftScheduleDetail::create([
                                    'schedule_head_id'=>$shift_id,
                                    'rest_day'=>$rdd2
                                ]);
                            }
                        }
                    }
                }
            } else if($request->sched_type == 'shifting'){
                $e=0;
                foreach($request->employee_shift AS $empshift_id){

                    $personal_id = Employee::find($empshift_id)->personal_id;
                    $month_year = $request->year."-".$request->month;
                        $shift_id = ShiftSchedule::insertGetId([
                            'employee_id'=>$empshift_id,
                            'personal_id'=>$personal_id,
                            'schedule_code'=>$request->schedule_code,
                            'month_year'=>$month_year,
                            'schedule_type'=>$request->sched_type,
                        ]);
                        
                      
                    
                      
                            $rds = explode(",",$request->restdays_shift[$e]);
                            foreach($rds AS $rd){
                                ShiftScheduleDetail::create([
                                        'schedule_head_id'=>$shift_id,
                                         'rest_day'=>$rd
                                        ]);
                            }
                            // 
                        $e++;
                    }
                }

                return redirect()->route('shiftschedule.index')->with('success',"Shift Schedule added successfully!");
     }
     
      
         

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */


     public function get_restdays($rd1,$rd2,$mo_name,$year){
        for($x=1;$x<=5;$x++){
            $ordinal = $this->get_ordinal($x);
            if(!empty($rd1)){
                $restdays[] = new Carbon($ordinal .' ' .$rd1. ' of '.$mo_name.' '. $year);
            }
            if(!empty($rd2)){
                $restdays[] = new Carbon($ordinal .' ' .$rd2. ' of '.$mo_name.' '. $year);
            }
        }

        foreach($restdays AS $d){
            $monthName= $d->format('F');

            if($mo_name == $monthName){ //checker if it's still on the same month
               $final_rd[] = $d;
            } 
        }

        return $final_rd;
     }

     public function alternate_RD($rest, $mo_name,$year,$restdays){
        //echo "**".$rest;
        
        if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
            $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
            $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
            $thirdRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

            $monthName= $thirdRD->format('F');

            if($mo_name == $monthName){
                $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
            } else {
                $lastRD="";
            }

        } else if($restdays == 'rd_option2'){ //if 2,4 alternate RD is chosen
            $firstRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
            $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
            $lastRD ="";
        }
       
      
        $start = new Carbon('first '.$rest. ' of '.$mo_name . ' '. $year);
        $second = new Carbon('second '.$rest. ' of '.$mo_name . ' '. $year);
        $third = new Carbon('third '.$rest. ' of '.$mo_name . ' '. $year);
        $fourth = new Carbon('fourth '.$rest. ' of '.$mo_name . ' '. $year);
        $fifth = new Carbon('fifth '.$rest. ' of '.$mo_name . ' '. $year);
        $first_weekend=$this->check_holiday(date("Y-m-d",strtotime($start)),$year);
        $second_weekend=$this->check_holiday(date("Y-m-d",strtotime($second)),$year);
        $third_weekend=$this->check_holiday(date("Y-m-d",strtotime($third)),$year);
        $fourth_weekend=$this->check_holiday(date("Y-m-d",strtotime($fourth)),$year);
        $fifth_weekend=$this->check_holiday(date("Y-m-d",strtotime($fifth)),$year);

          /************ if holiday is on the first weekend************/
        echo  $first_weekend . " - " . $second_weekend. " - " . $third_weekend. " - " . $fourth_weekend. " - " . $fifth_weekend ."<br>";
        if($first_weekend == 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
           
            $rd = array($firstRD, $secondRD, $lastRD);

        } else if($first_weekend > 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
            // first weekend holiday only
            //echo 'hi';
            if($restdays == 'rd_option1'){ //if 1,3,5 alternate RD is chosen
               
                $firstRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
            } else { 
                //if 2,4 alternate RD is chosen
               
                 $firstRD="";
                 $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                 $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                
                 $monthName= $tRD->format('F');

                 if($mo_name == $monthName){
                     $lastRD=$tRD;
                 } else {
                     $lastRD="";
                 }
               
            }

            $rd=array($firstRD,$secondRD,$lastRD);
           
        } else if($first_weekend > 0 && $second_weekend > 0 && $third_weekend == 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
            // first and second weekend holiday 
        
            if($restdays == 'rd_option1'){ //if 1,3,5 alternate RD is chosen
            
                $firstRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD = "";
                $tRD= new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                    $monthName= $tRD->format('F');

                    if($mo_name == $monthName){
                        $lastRD=$tRD;
                    } else {
                        $lastRD="";
                    }

            } else { 
                //if 2,4 alternate RD is chosen
               
                 $firstRD=new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                 $secondRD =  "";
                 $lastRD="";
                
            }
            //echo $firstRD. " - " .$secondRD . " - " . $lastRD ."<br>";
            $rd=array($firstRD,$secondRD,$lastRD);

          
        } else if($first_weekend > 0 && $second_weekend == 0 && $third_weekend > 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
            // first and third weekend holiday 
       
            if($restdays == 'rd_option1'){ //if 1,3,5 alternate RD is chosen
              
                $firstRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  "";
                $tRD= new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                $monthName= $tRD->format('F');

                    if($mo_name == $monthName){
                        $lastRD=$tRD;
                    } else {
                        $lastRD="";
                    }
            } else { 
                //if 2,4 alternate RD is chosen
               
                 $firstRD=new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                 $secondRD =  "";
                 $lastRD="";
                
            }
            //echo $firstRD. " - " .$secondRD . " - " . $lastRD ."<br>";
            $rd=array($firstRD,$secondRD,$lastRD);
           
        } else if($first_weekend > 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend > 0 && $fifth_weekend ==0){
            // first and fourth weekend holiday 
       
            if($restdays == 'rd_option1'){ //if 1,3,5 alternate RD is chosen
              
                $firstRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  "";
                $tRD= new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                $monthName= $tRD->format('F');

                    if($mo_name == $monthName){
                        $lastRD=$tRD;
                    } else {
                        $lastRD="";
                    }
            } else { 
                //if 2,4 alternate RD is chosen
               
                 $firstRD=new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                 $secondRD =  "";
                 $lastRD="";
                
            }
            //echo $firstRD. " - " .$secondRD . " - " . $lastRD ."<br>";
            $rd=array($firstRD,$secondRD,$lastRD);
           
        } else if($first_weekend > 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend == 0 && $fifth_weekend > 0){
            // first and fifth weekend holiday 
       
            if($restdays == 'rd_option1'){ //if 1,3,5 alternate RD is chosen
              
                $firstRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
               
            } else { 
                //if 2,4 alternate RD is chosen
               
                 $firstRD=new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                 $secondRD =  "";
                 $lastRD="";
                
            }
            //echo $firstRD. " - " .$secondRD . " - " . $lastRD ."<br>";
            $rd=array($firstRD,$secondRD,$lastRD);
        
        }

            /************ if holiday is on the second weekend************/
        else if($first_weekend == 0 && $second_weekend > 0 && $third_weekend == 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
               
                if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                    $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                    $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                    $lastRD="";
                } else { //if 2,4 alternate RD is chosen
                    $firstRD="";
                    $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                  
                    $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
    
                    $monthName= $tRD->format('F');
    
                    if($mo_name == $monthName){
                        $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                    } else {
                        $lastRD="";
                    }
                }
    
                $rd=array($firstRD,$secondRD,$lastRD);
         }
        else if($first_weekend == 0 && $second_weekend > 0 && $third_weekend > 0 && $fourth_weekend ==0 && $fifth_weekend ==0){
            /*********** second and third weekend holiday ************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  "";
                $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

                $monthName= $tRD->format('F');

                if($mo_name == $monthName){
                    $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                } else {
                    $lastRD="";
                }
            } else { //if 2,4 alternate RD is chosen
                $firstRD="";
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
            }

            $rd=array($firstRD,$secondRD,$lastRD);
        }  else if($first_weekend == 0 && $second_weekend > 0 && $third_weekend == 0 && $fourth_weekend > 0 && $fifth_weekend ==0){
            /*********** second and third weekend holiday ************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  "";
                $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

                $monthName= $tRD->format('F');

                if($mo_name == $monthName){
                    $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                } else {
                    $lastRD="";
                }
            } else { //if 2,4 alternate RD is chosen
                $firstRD= new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD = "";
                $lastRD="";
            }

            $rd=array($firstRD,$secondRD,$lastRD);

        }  else if($first_weekend == 0 && $second_weekend > 0 && $third_weekend == 0 && $fourth_weekend == 0 && $fifth_weekend > 0){
            /*********** second and third weekend holiday ************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";

               
            } else { //if 2,4 alternate RD is chosen
                $firstRD=new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD = "";
                $lastRD="";
            }

            $rd=array($firstRD,$secondRD,$lastRD);

        }
      
            /************ if holiday is on the third weekend************/
       else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend > 0 && $fourth_weekend == 0 && $fifth_weekend == 0){
           
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
            } else { //if 2,4 alternate RD is chosen
                $firstRD="";
                $secondRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

                $monthName= $tRD->format('F');

                if($mo_name == $monthName){
                    $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                } else {
                    $lastRD="";
                }
            }

            $rd=array($firstRD,$secondRD,$lastRD);
        }  else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend > 0 && $fourth_weekend > 0 && $fifth_weekend == 0){
           /************ if holiday is on the third and fourth weekend************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  "";
                $tRD = new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

                $monthName= $tRD->format('F');

                if($mo_name == $monthName){
                    $lastRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);
                } else {
                    $lastRD="";
                }
            } else { //if 2,4 alternate RD is chosen
                $firstRD="";
                $secondRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
            }

            $rd=array($firstRD,$secondRD,$lastRD);
        } else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend > 0 && $fourth_weekend == 0 && $fifth_weekend > 0){
           /************ if holiday is on the third and fifth weekend************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";

            } else { //if 2,4 alternate RD is chosen
                $firstRD="";
                $secondRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD="";
            }

            $rd=array($firstRD,$secondRD,$lastRD);

        }

           /************ if holiday is on the fourth weekend************/
          
        else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend > 0 && $fifth_weekend == 0){
              
               if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                   $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                   $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                   $lastRD=  "";

               } else { //if 2,4 alternate RD is chosen
                   $firstRD="";
                   $secondRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                   $tRD=new Carbon('fifth '.$rest. ' of '.$mo_name.' '. $year);

                   $monthName= $tRD->format('F');

                   if($mo_name == $monthName){
                       $lastRD= $tRD;
                   } else {
                       $lastRD="";
                   }

               }

               $rd=array($firstRD,$secondRD,$lastRD);
           } else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend > 0 && $fifth_weekend > 0){
              /************ if holiday is on the fourth and fifth weekend************/
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD=  "";

            } else { //if 2,4 alternate RD is chosen
                $firstRD="";
                $secondRD =  new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD=  "";

            }

            $rd=array($firstRD,$secondRD,$lastRD);

        }
            /************ if holiday is on the fifth weekend************/
          
         else if($first_weekend == 0 && $second_weekend == 0 && $third_weekend == 0 && $fourth_weekend == 0 && $fifth_weekend > 0){
              
                
            if($restdays == 'rd_option1'){  //if 1,3,5 alternate RD is chosen
                $firstRD =  new Carbon('first '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('third '.$rest. ' of '.$mo_name.' '. $year);
                $lastRD=  "";

            } else { //if 2,4 alternate RD is chosen
                $firstRD=new Carbon('second '.$rest. ' of '.$mo_name.' '. $year);
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);

                $lastRD="";
            }
            $rd=array($firstRD,$secondRD,$lastRD);
        }
    
          
         $data  = array_unique($rd);
         
         return $data;  
          
     }
    public function check_holiday($rd,$year){

        $holiday= Holiday::where('holiday_date','=',$rd)
        ->where('calendar_year','=',$year)
        ->get();

        $holidaycount = count($holiday); 
       
        return $holidaycount;
    }

    public function fetchEmployees(Request $request)
    {
      
        $employees = Employee::select('id','full_name')->orderBy('full_name', 'ASC')->get();
        return response()->json($employees);
    }

    public function show(ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function get_ordinal($number){
        if($number =='1'){
            $ordinal ='first';
        } else if($number =='2'){
            $ordinal = 'second';
        } else if($number =='3'){
            $ordinal = 'third';
        }else if($number =='4'){
            $ordinal = 'fourth';
        }else if($number =='5'){
            $ordinal = 'fifth';
        }

        return $ordinal;
    }
    public function edit(ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShiftSchedule $shiftSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShiftSchedule  $shiftSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShiftSchedule $shiftSchedule)
    {
        //
    }
}

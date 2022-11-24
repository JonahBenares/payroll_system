<?php

namespace App\Http\Controllers;

use App\Models\ShiftSchedule;
use App\Models\Schedule;
use App\Models\Holiday;
use App\Models\Employee;
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
     


    public function index()
    {
        
        return view("shift_sched.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        
        $rd1 = $request->rest_day1;
        $rd2 = $request->rest_day2;
    
        if($request->alternate == '1'){
           
            if($request->alternate_RD == 'rd1'){ //Rest day1 is chosen for alternate option
                $this->alternate_RD($rd1,$mo_name,$request->year,$request->restdays);
            } else if($request->alternate_RD == 'rd2'){ //Rest day2 is chosen for alternate option
                $this->alternate_RD($rd2,$mo_name,$request->year,$request->restdays);
            }
        
        } else { // NO ALTERNATE RESTDAYS
                $this->get_restdays($rd1,$rd2,$mo_name,$request->year);
            
        }

        foreach($request->employee AS $key=>$value){
            echo $key . " " . $value."<br>";

        }
     
      
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
            $restdays[] = new Carbon($ordinal .' ' .$rd1. ' of '.$mo_name.' '. $year);
            $restdays[] = new Carbon($ordinal .' ' .$rd2. ' of '.$mo_name.' '. $year);
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
                $firstRD="";
                $secondRD =  new Carbon('fourth '.$rest. ' of '.$mo_name.' '. $year);
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
         

            foreach($data AS $d){
                    echo $d . "<br>";
            }
           
          
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
      
        $employees = Employee::select('id','full_name')->get();
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

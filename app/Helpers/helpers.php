<?php
use App\Models\Timekeeping;
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\EmployeeHMO;
use App\Models\CutOff;
use App\Models\BusinessUnit;
use App\Models\Deduction;
use App\Models\UploadAllowanceDetail;
use App\Models\UploadAllowanceTime;
use App\Models\ShiftScheduleDetail;
use App\Models\ShiftSchedule;
use App\Models\PayslipInfo;
use App\Models\AllowanceRate;
use App\Models\AdjustmentRate;
use App\Models\LeaveFailure;
use App\Models\Holiday;
use App\Models\ChangeSchedule;
use App\Models\EmployeeDeduction;
use App\Models\StatutoryBracket;

define('START_NIGHT_HOUR','22');
define('START_NIGHT_MINUTE','00');
define('START_NIGHT_SECOND','00');
define('END_NIGHT_HOUR','06');
define('END_NIGHT_MINUTE','00');
define('END_NIGHT_SECOND','00');
/**

 * Write code on Method

 *

 * @return response()

 */

if (!function_exists('getTimeDiff')) {

     function getTimeDiff($starttime,$endtime){
        if($starttime>=14 && $endtime <=10){
            $start = date("Y-m-d")." " . $starttime;
            $end =  date('Y-m-d', strtotime($start . ' +1 day')) . " ".$endtime;
        } else {
            $start = $starttime;
            $end = $endtime;
        }
        $t1=strtotime($start); 
        $t2=strtotime($end); 
      
        $hours = (($t2- $t1)/60)/60;  
        //$hours= round(abs($t1-$t2)/60,2);
    

      
        return abs($hours);
    }
}

function getMintimein($schedule_type,$recorded_time,$personal_id){
    if($schedule_type=='Shifting'){
        $date=date('Y-m-d',strtotime($recorded_time));
        $getmintimein=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date)->min('recorded_time');
        return $getmintimein;
    }  
}

function getMaxtimein($schedule_type,$recorded_time,$personal_id){
    if($schedule_type=='Shifting'){
        $date=date('Y-m-d',strtotime($recorded_time));
        $getmintimein=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date)->max('recorded_time');
        return $getmintimein;
    }  
}

function getMintimeout($schedule_type,$recorded_time,$personal_id){
    if($schedule_type=='Shifting'){
        $date2=date('Y-m-d',strtotime($recorded_time." + 1 day"));
        $getmintimeout=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date2)->min('recorded_time');
        return $getmintimeout;
    }  
}


if (!function_exists('getEmployeeTime')) {


    function getEmployeeTime($recorded_time, $personal_id){

        // $begin = new DateTime($start);
        // $end = new DateTime($end_time);
        
        // $interval = DateInterval::createFromDateString('1 day');
        // $period = new DatePeriod($begin, $interval, $end);

       
        // foreach ($period as $dt) {
        //     $recorded_time = $dt->format("Y-m-d");
         
        //     $year_month = $dt->format("Y-m");
            $year_month = date("Y-m",strtotime($recorded_time));

            $getnightshift = ShiftSchedule::where('personal_id', $personal_id)
                        ->where('month_year', $year_month)
                        ->get();

            $nightshift = $getnightshift[0]['night_shift'];

            $time_count = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
            ->whereDate('recorded_time',$recorded_time)
            ->where('personal_id',$personal_id)
            ->count();

           // echo $recorded_time . ", " . $personal_id . " = " .$time_count . "<br>";

            if($time_count%2==0){ ///// if equal or divisible by 2 ang timekeeping, complete logs //////////
                if($nightshift == 0){  // if dayshift

                    $changeschedNS = checkChangeScheduleNS($personal_id, $recorded_time); //check if there's changesched  
                    if($changeschedNS == 0 || $changeschedNS == 'none'){ //still dayshift
                        $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                        ->whereDate('recorded_time',$recorded_time)
                        ->where('personal_id',$personal_id)
                        ->get();


                        $start_time = $time[0]['starttime'];
                        $end_time = $time[0]['endtime'];
                    } else {  // if change sched is night shift

                        $stime = Timekeeping::selectraw('max(recorded_time) as starttime, personal_id')
                        ->whereDate('recorded_time',$recorded_time)
                        ->where('personal_id',$personal_id)
                        ->get();
        
                        $next_day = date('Y-m-d', strtotime($recorded_time . ' +1 day'));
                    
                        $etime = Timekeeping::selectraw('min(recorded_time) as endtime, personal_id')
                        ->whereDate('recorded_time',$next_day)
                        ->where('personal_id',$personal_id)
                        ->get();
        
                        $start_time = $stime[0]['starttime'];
                        $end_time = $etime[0]['endtime'];

                    }
                } else {  // if nightshift
                   //echo "nightshift";

                    $changeschedNS = checkChangeScheduleNS($personal_id, $recorded_time); //check if there's changesched  
                    if($changeschedNS == 0){ // dayshift
                        $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                        ->whereDate('recorded_time',$recorded_time)
                        ->where('personal_id',$personal_id)
                        ->get();


                        $start_time = $time[0]['starttime'];
                        $end_time = $time[0]['endtime'];

                        //echo 'changesched';
                    } else { //nightshift
                        $stime = Timekeeping::selectraw('max(recorded_time) as starttime, personal_id')
                        ->whereDate('recorded_time',$recorded_time)
                        ->where('personal_id',$personal_id)
                        ->get();
        
                        $next_day = date('Y-m-d', strtotime($recorded_time . ' +1 day'));
                    
                        $etime = Timekeeping::selectraw('min(recorded_time) as endtime, personal_id')
                        ->whereDate('recorded_time',$next_day)
                        ->where('personal_id',$personal_id)
                        ->get();
        
                        $start_time = $stime[0]['starttime'];
                        $end_time = $etime[0]['endtime'];
                    }
                }

                
                
          
           // $time = $start_time."_".$end_time;
            } else { ///// incomplete logs //////
              
               
                $changeschedNS = checkChangeScheduleNS($personal_id, $recorded_time); //check if there's changesched
                
               // echo $changeschedNS;
                if($changeschedNS == 1 || $changeschedNS == 'none'){ // nightshift
            
                    $stime = Timekeeping::selectraw('max(recorded_time) as starttime, personal_id')
                    ->whereDate('recorded_time',$recorded_time)
                    ->where('personal_id',$personal_id)
                    ->get();

                    $next_day = date('Y-m-d', strtotime($recorded_time . ' +1 day'));
                
                    $etime = Timekeeping::selectraw('min(recorded_time) as endtime, personal_id')
                    ->whereDate('recorded_time',$next_day)
                    ->where('personal_id',$personal_id)
                    ->get();

                    $start_time = $stime[0]['starttime'];
                        
                    $year = date("Y",strtotime($recorded_time));
                    $month = date("m",strtotime($recorded_time));
                    
                    $count_leave = LeaveFailure::join('leave_filing_detail', 'leave_filing_head.id','=','leave_filing_detail.leave_filing_head_id')
                    ->where('date_absent',$recorded_time)
                    ->where('personal_id',$personal_id)
                    ->where('filed','!=','0')
                    ->count();

                   // echo "leave=".$count_leave . "<br>";
                    if($count_leave!=0){
                        $get_actual_time = LeaveFailure::join('leave_filing_detail', 'leave_filing_head.id','=','leave_filing_detail.leave_filing_head_id')
                        ->where('date_absent',$recorded_time)
                        ->where('personal_id',$personal_id)
                        ->where('filed','!=','0')
                        ->get();

                        $end_time = $get_actual_time[0]['actual_time'];
                    } else {
                        $end_time= $etime[0]['endtime'];
                    }

                 
                } else { /// dayshift

                    $time = Timekeeping::selectraw('min(recorded_time) as starttime, max(recorded_time) as endtime, personal_id')
                    ->whereDate('recorded_time',$recorded_time)
                    ->where('personal_id',$personal_id)
                    ->get();


                    $start_time = $time[0]['starttime'];
                    $end_time = $time[0]['endtime'];



                }

                // ShiftSchedule::select('schedule_head.employee_id','schedule_head.schedule_code')
                //             ->join('schedule_detail','schedule_detail.schedule_head_id','=','schedule_head.id')
                //             ->where('schedule_head.employee_id','=',$employee_id)
                //             ->where('schedule_detail.rest_day','=',$date)
                //             ->get();
            
                
                
            }

            if(!empty($end_time) && !empty($start_time)){
             echo  $start_time . " - " . $end_time . "<br>";
             echo getTimeDiff($start_time, $end_time);
            }
        }

        //echo  $time;
   // }
}

if (!function_exists('checkChangeScheduleNS')) {
   
    function checkChangeScheduleNS($personal_id, $date){

        $cs_count= ChangeSchedule::select('night_shift')
        ->where("personal_id","=",$personal_id)
        ->where("start_date", "<=", $date)
        ->where("end_date", ">=", $date)
        ->count(); 
        if($cs_count != 0){
            $cs= ChangeSchedule::select('night_shift')
            ->where("personal_id","=",$personal_id)
            ->where("start_date", "<=", $date)
            ->where("end_date", ">=", $date)
            ->get();

            $ns= $cs[0]['night_shift'];

            return $ns;
        } else {
            return 'none';
        }
    }
}

if (!function_exists('getEmployeeName')) {
    
    function getEmployeeName($id){
        $emp= Employee::select('full_name')
        ->where("id","=",$id)
        ->get();

        $name= $emp[0]['full_name'];

        return $name;
    }
}

if (!function_exists('getEmployeeDetails')) {
    
    function getEmployeeDetails($id,$column){
        $emp= Employee::select($column)
        ->where("id","=",$id)
        ->get();

        $name= $emp[0][$column];

        return $name;
    }
}

if (!function_exists('getPayslipInfo')) {
    
    function getPayslipInfo($wherecol, $whereval, $column){
        $ps= PayslipInfo::select($column)
        ->where($wherecol,"=",$whereval)
        ->get();

        $col= $ps[0][$column];

        return $col;
    }
}

if (!function_exists('getRates')) {
    
    function getRates($ps_id){
        $ps= AdjustmentRate::select('deduction_type', 'rate_amount')
        ->where("payslip_info_id","=",$ps_id)
        ->get();

        $deduction_type= $ps[0]['deduction_type'];
        $rate_amount= $ps[0]['rate_amount'];

        $return_val = $deduction_type."_".$rate_amount;

        return $return_val;
    }
}

if (!function_exists('checkHoliday')) {
    function checkHoliday($date){
        $count= Holiday::select('holiday_type')
        ->where("holiday_date","=",$date)
        ->count();

        if($count>0){
            $hol= Holiday::select('holiday_type')
            ->where("holiday_date","=",$date)
            ->get();
            $holiday_type= $hol[0]['holiday_type'];
        } else {
            $holiday_type=0;
        }
       
        return $holiday_type;
    }
}

if (!function_exists('getAllowanceName')) {
    function getAllowanceName($id){
        $emp= Allowance::select('allowance_name')
        ->where("id","=",$id)
        ->get();

        $name= $emp[0]['allowance_name'];

        return $name;
    }
}

if (!function_exists('getCompanyName')) {

    function getCompanyName($id){
        $bu= BusinessUnit::select('bu_name')
        ->where("bu_id","=",$id)
        ->get();

        $name= $bu[0]['bu_name'];

        return $name;
    }
}

if (!function_exists('getCompanyLongName')) {
    
    function getCompanyLongName($id){
        $bu= BusinessUnit::select('long_name')
        ->where("bu_id","=",$id)
        ->get();

        $name= $bu[0]['long_name'];

        return $name;
    }
}

if (!function_exists('getBUName')) {
    
    function getBUName($employee_id){

        $get_bu= Employee::select('business_unit')
        ->where("id","=",$employee_id)
        ->get();

        $bu= $get_bu[0]['business_unit'];

        $bu_name= BusinessUnit::select('bu_name')
        ->where("id","=",$bu)
        ->get();

        $name= $bu_name[0]['bu_name'];

        return $name;
    }
}

if (!function_exists('getAllowance')) {
    
    function getAllowance($id, $head_id, $type){
        $emp= UploadAllowanceDetail::select('allowance_amount', 'total_allowance')
        ->where("id","=",$id)
        ->where("allowance_head_id","=",$head_id)
        ->get();

        if($type=='amount'){
            $amount= $emp[0]['allowance_amount'];
        } else if($type=='total'){
            $amount= $emp[0]['total_allowance'];
        }

        return $amount;
    }
}

if (!function_exists('getHMODependent')) {

    function getHMODependent($emp_id, $type){
        $count= EmployeeHMO::select('no_of_dependent')
        ->where("employee_id","=",$emp_id)
        ->where("hmo_rate_id","=",$type)
        ->count();
        
        if($count>0){
            $emp= EmployeeHMO::select('no_of_dependent')
            ->where("employee_id","=",$emp_id)
            ->where("hmo_rate_id","=",$type)
            ->get();
            $dependent= $emp[0]['no_of_dependent'];
        } else {
            $dependent = "";
        }
        return $dependent;
    }
 }

function getMaxtimeout($schedule_type,$recorded_time,$personal_id){
    if($schedule_type=='Shifting'){
        $date2=date('Y-m-d',strtotime($recorded_time." + 1 day"));
        $getmintimeout=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date2)->max('recorded_time');
        return $getmintimeout;
    }  

}

if (!function_exists('getAllowanceTime')) {
    function getAllowanceTime($allowance_head_id, $allowance_detail_id){
        $time= UploadAllowanceTime::where("allowance_head_id","=",$allowance_head_id)
        ->where("allowance_detail_id","=",$allowance_detail_id)
        ->get();
        
        return $time;
    }
 }

 if (!function_exists('getSalary')) {
    function getSalary($type, $employee_id){

        if($type=='Monthly'){
            $emp_rate= Employee::select('monthly_rate')
                ->where("id","=",$employee_id)->get();
            $rate=$emp_rate[0]['monthly_rate'];
        }
        return $rate;
       
    }
 }


if (!function_exists('night_difference')) {
    function night_difference($start_work,$end_work)
    {
        $start_night = mktime(START_NIGHT_HOUR,START_NIGHT_MINUTE,START_NIGHT_SECOND,date('m',$start_work),date('d',$start_work),date('Y',$start_work));
        $end_night   = mktime(END_NIGHT_HOUR,END_NIGHT_MINUTE,END_NIGHT_SECOND,date('m',$start_work),date('d',$start_work) + 1,date('Y',$start_work));

        if($start_work >= $start_night && $start_work <= $end_night)
        {
            if($end_work >= $end_night)
            {
                return ($end_night - $start_work) / 3600;
            }
            else
            {
                return ($end_work - $start_work) / 3600;
            }
        }
        elseif($end_work >= $start_night && $end_work <= $end_night)
        {
            if($start_work <= $start_night)
            {
                return ($end_work - $start_night) / 3600;
            }
            else
            {
                return ($end_work - $start_work) / 3600;
            }
        }
        else
        {
            if($start_work < $start_night && $end_work > $end_night)
            {
                return ($end_night - $start_night) / 3600;
            }
            return 0;
        }
    }

}

if (!function_exists('checkDeductionSchedule')) {
    function checkDeductionSchedule($payslip_info_id){

        $get_sched= Deduction::select('deduction_period')
            ->where("payslip_info_id","=",$payslip_info_id)->get();
        $sched=$get_sched[0]['deduction_period'];
     
        return $sched;
       
    }
 }

 if (!function_exists('getDeductionRate')) {
    function getDeductionRate($personal_id, $payslip_info_id){
       
        if($payslip_info_id == 8){ ////SSS Premium
                $getrate = Employee::select('monthly_rate')
                ->where("personal_id","=",$personal_id)->get();
                
                $rate=$getrate[0]['monthly_rate'];

            
                $get_count= StatutoryBracket::select('deduction_amount')
                    ->where("payslip_info_id","=",$payslip_info_id)
                    ->where("salary_from", "<=", $rate)
                    ->where("salary_to", ">=", $rate)
                    ->count();
                
                
                if($get_count==0){
                    $ded=0;
                } else {

                    $get_dd= StatutoryBracket::select('deduction_amount')
                    ->where("payslip_info_id","=",$payslip_info_id)
                    ->where("salary_from", "<=", $rate)
                    ->where("salary_to", ">=", $rate)
                    ->get();

                    $ded=$get_dd[0]['deduction_amount'];
                }
            
            
            
            } else {
                $get_count= EmployeeDeduction::select('employee_rate')
                ->where("payslip_info_id","=",$payslip_info_id)
                ->where("personal_id", "=", $personal_id)
                ->count();
            
                
                    if($get_count==0){
                        $ded=0;
                    } else {

                        $get_dd= EmployeeDeduction::select('employee_rate')
                        ->where("payslip_info_id","=",$payslip_info_id)
                        ->where("personal_id", "=", $personal_id)
                        ->get();

                        $ded=$get_dd[0]['employee_rate'];
                    }
                
            } 
            return $ded;
    }

}

?>
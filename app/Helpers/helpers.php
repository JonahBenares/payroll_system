<?php
use App\Models\Timekeeping;
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\EmployeeHMO;
use App\Models\CutOff;
use App\Models\BusinessUnit;
use App\Models\UploadAllowanceDetail;
use App\Models\UploadAllowanceTime;
use App\Models\ShiftScheduleDetail;
use App\Models\ShiftSchedule;
use App\Models\PayslipInfo;
use App\Models\AllowanceRate;
use App\Models\AdjustmentRate;
use App\Models\Holiday;

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
      
        $hours = floor((($t2- $t1)/60)/60);  
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

?>
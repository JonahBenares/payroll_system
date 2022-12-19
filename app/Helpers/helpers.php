<?php
use App\Models\Timekeeping;
<<<<<<< HEAD
use App\Models\Employee;
use App\Models\Allowance;
use App\Models\EmployeeHMO;
use App\Models\BusinessUnit;
use App\Models\UploadAllowanceDetail;
=======
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7

/**

 * Write code on Method

 *

 * @return response()

 */

if (!function_exists('getTimeDiff')) {

     function getTimeDiff($starttime,$endtime){

        $t1=strtotime($starttime); 
        $t2=strtotime($endtime); 
        $hours = floor((($t2- $t1)/60)/60);  
        return abs($hours);
    }
<<<<<<< HEAD
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

if (!function_exists('getAllowanceName')) {
    
    function getAllowanceName($id){
        $emp= Allowance::select('allowance_name')
        ->where("id","=",$id)
        ->get();

        $name= $emp[0]['allowance_name'];

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
=======

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

    function getMaxtimeout($schedule_type,$recorded_time,$personal_id){
        if($schedule_type=='Shifting'){
            $date2=date('Y-m-d',strtotime($recorded_time." + 1 day"));
            $getmintimeout=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date2)->max('recorded_time');
            return $getmintimeout;
        }  
>>>>>>> d70a7c8ec4bc9e6a7b0c7c7276d5f94475f75ca7
    }
 }

function getMaxtimeout($schedule_type,$recorded_time,$personal_id){
    if($schedule_type=='Shifting'){
        $date2=date('Y-m-d',strtotime($recorded_time." + 1 day"));
        $getmintimeout=Timekeeping::where('personal_id',$personal_id)->where(DB::raw("(STR_TO_DATE(recorded_time,'%Y-%m-%d'))"),$date2)->max('recorded_time');
        return $getmintimeout;
    }  

}

?>
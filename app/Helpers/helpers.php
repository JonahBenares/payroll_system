<?php
use App\Models\Timekeeping;

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
    }
}
?>
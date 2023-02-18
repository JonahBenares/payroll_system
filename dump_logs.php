<?php 
define('START_NIGHT_HOUR','22');
define('START_NIGHT_MINUTE','00');
define('START_NIGHT_SECOND','00');
define('END_NIGHT_HOUR','06');
define('END_NIGHT_MINUTE','00');
define('END_NIGHT_SECOND','00');

function getTimeDiff($starttime,$endtime){
   

    $datetime1 = new DateTime($starttime);
    $datetime2 = new DateTime($endtime);
    $interval = $datetime1->diff($datetime2);
    return $interval->format('%h') .".".$interval->format('%i');

}
function lz($num)
{
    return (strlen($num) < 2) ? "0{$num}" : $num;
}
function convertTime($dec)
{
    $seconds = ($dec * 3600);
    $hours = floor($dec);
    $seconds -= $hours * 3600;
    $minutes = floor($seconds / 60);
    $seconds -= $minutes * 60;
    return lz($hours).".".lz($minutes);
}

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

    $con_hris=mysqli_connect("localhost","root","","db_hris_new");
    $con_payroll=mysqli_connect("localhost","root","","db_payroll");

    $get_logs = mysqli_query($con_hris,"SELECT DISTINCT DATE_FORMAT(recorded_time, '%Y-%m-%d') as logs, personal_id FROM timekeeping WHERE log_type != '' AND dump_logs='0'");
    while($fetch_logs = mysqli_fetch_array($get_logs)){

        
       $logs[] = array(
        'logs'=> $fetch_logs['logs'],
        'personal_id'=>$fetch_logs['personal_id']
       );
    }

    foreach($logs AS $l){

        $time_in ="";
        $time_out="";
        $break_in = "";
        $break_out = "";
        $incomplete = 0;
        $incomplete_desc = "";
        $nightdiff=0;
        $nd_hours=0;
       
        $get_time = mysqli_query($con_hris, "SELECT * FROM timekeeping WHERE DATE_FORMAT(recorded_time, '%Y-%m-%d')= '$l[logs]' AND personal_id = '$l[personal_id]' AND log_type != '' AND dump_logs ='0'");
        while($fetch_time = mysqli_fetch_array($get_time)){
            
           
            $get_emp = mysqli_query($con_payroll, "SELECT id FROM employees WHERE personal_id = '$l[personal_id]'");
            $fetch_emp = mysqli_fetch_array($get_emp);
            $emp_id = $fetch_emp['id'];

            $check_date = mysqli_query($con_payroll, "SELECT id FROM timekeeping_logs WHERE personal_id = '$l[personal_id]' AND log_date = '$l[logs]'");
            $fetch_date = mysqli_fetch_array($check_date);
            $count_date=mysqli_num_rows($check_date);

            $month_year = date("Y-m", strtotime($l['logs']));
          

            $check_night = mysqli_query($con_payroll, "SELECT night_shift FROM schedule_head WHERE month_year='$month_year' and personal_id = '$l[personal_id]'");
            $fetch_night = mysqli_fetch_array($check_night);
            $night_shift = $fetch_night['night_shift'];

            $check_change_sched = mysqli_query($con_payroll, "SELECT night_shift FROM change_schedule WHERE start_date <= '$l[logs]' AND end_date >= '$l[logs]'  and personal_id = '$l[personal_id]'");
            $fetch_change_sched = mysqli_fetch_array($check_change_sched);
            $rows_change_sched = mysqli_num_rows($check_change_sched);



            if($night_shift == 0){
                if($fetch_change_sched['night_shift'] == 0 || $rows_change_sched == 0){
                    if($fetch_time['log_type'] == 'Time in'){
                        $time_in = $fetch_time['recorded_time'];
                    } else if($fetch_time['log_type'] == 'Time out'){
                        $time_out = $fetch_time['recorded_time'];
                    } else if($fetch_time['log_type'] == 'Break in'){
                        $break_in .= $fetch_time['recorded_time'] . ", ";
                    } else if($fetch_time['log_type'] == 'Break out'){
                        $break_out .= $fetch_time['recorded_time']. ", ";
                    }
                    $nightdiff=0;
                } else {
                    $next_day = date('Y-m-d', strtotime($l['logs'] . ' +1 day'));
                    $get_out = mysqli_query($con_hris, "SELECT * FROM timekeeping WHERE DATE_FORMAT(recorded_time, '%Y-%m-%d')= '$next_day' AND personal_id = '$l[personal_id]' AND log_type != '' AND dump_logs ='0'");
                    $fetch_out = mysqli_fetch_array($get_out);
                  
                     if($fetch_time['log_type'] == 'Time in'){
                        $time_in = $fetch_time['recorded_time'];
                     } 
                    if($fetch_out['log_type'] == 'Time out'){
                        $time_out = $fetch_out['recorded_time'];
                    }
                    $nightdiff=1;
                    $nd_hours=night_difference(strtotime($time_in),strtotime($time_out));
                }


            } else {

                if($fetch_change_sched['night_shift'] == 1 || $rows_change_sched == 0){
                    $next_day = date('Y-m-d', strtotime($l['logs'] . ' +1 day'));
                    $get_out = mysqli_query($con_hris, "SELECT * FROM timekeeping WHERE DATE_FORMAT(recorded_time, '%Y-%m-%d')= '$next_day' AND personal_id = '$l[personal_id]' AND log_type != '' AND dump_logs ='0'");
                    $fetch_out = mysqli_fetch_array($get_out);
                
                    if($fetch_time['log_type'] == 'Time in'){
                        $time_in = $fetch_time['recorded_time'];
                    } 
                    if($fetch_out['log_type'] == 'Time out'){
                        $time_out = $fetch_out['recorded_time'];
                    }
                    $nightdiff=1;
                    $nd_hours=night_difference(strtotime($time_in),strtotime($time_out));
                    
                } else {
                    if($fetch_time['log_type'] == 'Time in'){
                        $time_in = $fetch_time['recorded_time'];
                    } else if($fetch_time['log_type'] == 'Time out'){
                        $time_out = $fetch_time['recorded_time'];
                    } else if($fetch_time['log_type'] == 'Break in'){
                        $break_in .= $fetch_time['recorded_time'] . ", ";
                    } else if($fetch_time['log_type'] == 'Break out'){
                        $break_out .= $fetch_time['recorded_time']. ", ";
                    }
                    $nightdiff=0;
                }
            }

            $check_inc = mysqli_query($con_hris, "SELECT * FROM incomplete_logs WHERE DATE_FORMAT(incomplete_date, '%Y-%m-%d')= '$l[logs]' AND personal_id = '$l[personal_id]'");
            $fetch_inc = mysqli_fetch_array($check_inc);
            $count_inc=mysqli_num_rows($check_inc);
            if($count_inc>0){
                $incomplete='1';
                $incomplete_desc = $fetch_inc['log_type'];

            }

           // $total_time = number_format($total_time,2);
           //echo $fetch_time['personal_id'] ." = ".  $time_in . " - ".  $time_out . " - ".  $break_in . " - ".  $break_out . " <br> ";
            //echo $l['personal_id'] . " - " . $time_in . " to " . $time_out . "<br>";
            // $break_in = substr($break_in, 0, -2);
            // $break_out = substr($break_out, 0, -2);
            if(!empty($time_in) || !empty($time_out) || !empty($break_in) || !empty($break_out)){
                $day = date('d',strtotime($l['logs']));
                $year = date('Y',strtotime($l['logs']));
                $month = date('m',strtotime($l['logs']));
                $get_period = mysqli_query($con_payroll, "SELECT * FROM cutoff WHERE cutoff_type ='EOM'");
                $fetch_period = mysqli_fetch_array($get_period);
                 for($x=$fetch_period['cutoff_start'];$x<=$fetch_period['cutoff_end'];$x++){
                    $eom_arr[] = $x;
                   
                 }
                
                if(in_array($day,$eom_arr)){
                    $period = 'EOM';
                } else {
                    $period = 'MID';
                }

                //echo $year. " - " . $month . " - ". $day. "<br>";

                if($count_date == 0){
                   
                    $insert = mysqli_query($con_payroll, "INSERT INTO timekeeping_logs (employee_id, personal_id, year, month, period, log_date, time_in, time_out, break_in, break_out, incomplete, incomplete_time_desc, night_shift, nd_hours)
                                        VALUES ('$emp_id', '$l[personal_id]', '$year', '$month', '$period','$l[logs]', '$time_in', '$time_out', '$break_in', '$break_out', '$incomplete', '$incomplete_desc','$nightdiff','$nd_hours')");
                    //echo $fetch_time['personal_id'] ." = ".  $time_in . " - ".  $time_out . " - ".  $break_in . " - ".  $break_out . " <br> ";
                } else {
                    $update = mysqli_query($con_payroll,"UPDATE timekeeping_logs SET time_in = '$time_in', time_out = '$time_out', break_in = '$break_in',
                                break_out='$break_out', incomplete = '$incomplete', incomplete_time_desc = '$incomplete_desc', night_shift='$nightdiff', nd_hours='$nd_hours'
                                WHERE log_date = '$l[logs]' AND personal_id = '$l[personal_id]'");
                }
            }

          $update_dump_logs= mysqli_query($con_hris, "UPDATE timekeeping SET dump_logs = '1' WHERE id = '$fetch_time[id]'");
         }
    }


    //////////////////////////////////////////////////////////// CALCULATE OVERALL AND REGULAR HOURS ///////////////////////////////////////////

    
    foreach($logs AS $l){
        $total_break=0;
        $regular_hours=0;
       
       
        $get_complete = mysqli_query($con_payroll, "SELECT * FROM timekeeping_logs WHERE log_date = '$l[logs]' AND personal_id = '$l[personal_id]' AND incomplete!='1'");
        while($fetch_complete = mysqli_fetch_array($get_complete)){
               
                    $time_in = $fetch_complete['time_in'];
                    $time_out = $fetch_complete['time_out'];
                    $total_time = getTimeDiff($time_in,$time_out);

                    $break_out = $fetch_complete['break_out'];
                    $break_in = $fetch_complete['break_in'];

                    $break_in_array = explode(", ", $break_in);
                    $break_out_array = explode(", ", $break_out);

                    $breakin_size = sizeof($break_in_array) - 1;
                    $breakout_size = sizeof($break_out_array) - 1;

                
                    for($x=0; $x<$breakin_size; $x++){
                        $total_break += getTimeDiff($break_out_array[$x],$break_in_array[$x]);
                    } 
                   
                    if($total_break!=0){
                        $overall =$total_time-$total_break;
                        $diff= convertTime($overall);
                    } else {
                        $overall=$total_time;
                        $diff= $total_time;
                    }
                    if($fetch_complete['night_shift'] == 1){
                        $regular_hours = $overall - $fetch_complete['nd_hours'];
                    }
            

         
            //echo $fetch_complete['personal_id'] . " - ". $time_in . " to " . $time_out . " = " . $total_time . ", " . $total_break." - " . $diff . "<br>";
               // echo $l['logs'] ." = " . $l['personal_id'] . " - " . $holidays . "<br>";
            $update = mysqli_query($con_payroll,"UPDATE timekeeping_logs SET total_time='$total_time', total_breaktime='$total_break', overall_time='$diff',
                             regular_hours = '$regular_hours' WHERE log_date = '$l[logs]' AND personal_id = '$l[personal_id]'");
       
        }

    }

    //////////////////////////////////////////////////////////// GET HOLIDAYS AND REST DAYS ///////////////////////////////////////////
    foreach($logs AS $l){

        $holidays = 0;
        $rest_day=0;
        $get_holidays =  mysqli_query($con_payroll, "SELECT id FROM holidays WHERE holiday_date = '$l[logs]'");
        $row_holidays =  mysqli_num_rows($get_holidays);
        $get_complete = mysqli_query($con_payroll, "SELECT * FROM timekeeping_logs WHERE log_date = '$l[logs]' AND personal_id = '$l[personal_id]'");
        while($fetch_complete = mysqli_fetch_array($get_complete)){
            $getrestday = mysqli_query($con_payroll, "SELECT SH.id FROM schedule_head SH INNER JOIN schedule_detail SD ON SH.id = sd.schedule_head_id 
            WHERE SH.personal_id = '$l[personal_id]' AND SD.rest_day = '$l[logs]'");
            $rows_restday = mysqli_num_rows($getrestday);

            if($rows_restday > 0){
            $rest_day=1;
            }
            if($row_holidays>0){
            $holidays=1;
            }

            $update = mysqli_query($con_payroll,"UPDATE timekeeping_logs SET holiday='$holidays', rest_day='$rest_day' WHERE log_date = '$l[logs]' AND personal_id = '$l[personal_id]'");

        }
    }
   
    
?>

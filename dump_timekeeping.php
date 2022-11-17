<?php
 //$con_online=mysqli_connect("cenpripower.com","admin_hris","1t@dm1N_cenpri","db_humanresource");
 $con_online=mysqli_connect("localhost","root","","db_hris_new");
 $con_local=mysqli_connect("localhost","root","","db_payroll");

 $today = date("Y-m-d h:i:sa");
 $current = date("Y-m-d");
 $month = date('m', strtotime($current));
 $year = date('Y', strtotime($current));
 $day = date('d', strtotime($current));
 $days=cal_days_in_month(CAL_GREGORIAN,$month,$year);


//To get all active employees in payroll system and recorded time
    $mysqli_list=mysqli_query($con_local,"SELECT personal_id, id FROM employees where is_active='1'");
        while($row_list = mysqli_fetch_array($mysqli_list)){

                $get_earliest = mysqli_query($con_online,"SELECT MIN(recorded_time) as earliest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND DATE_FORMAT(recorded_time,'%Y-%m-%d') = '$current'");
                $fetch_earliest = mysqli_fetch_array($get_earliest);
                $earliest = date('H:i:s', strtotime($fetch_earliest['earliest']));
                $e_time = strtotime($earliest);
                $e_minutes = date('i', $e_time);
            
                $get_latest = mysqli_query($con_online,"SELECT MAX(recorded_time) as latest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND DATE_FORMAT(recorded_time,'%Y-%m-%d') = '$current'");
                $fetch_latest = mysqli_fetch_array($get_latest);
                $latest = date('H:i:s', strtotime($fetch_latest['latest']));
                $l_time = strtotime($latest);
                $l_minutes = date('i', $l_time);

                $hourdiff = round((strtotime($latest) - strtotime($earliest))/3600, 1);
                $minsdiff = round(abs($l_minutes - $e_minutes)/60, 2);
                $total_mins = ($hourdiff * 60) + $minsdiff;
                if($total_mins < 540){
                    $total_undertime_min = 540 - $total_mins;
                }else{
                    $total_undertime_min = '';
                }
//To get latest time from online timekeeping
    $mysqli_count=mysqli_query($con_online,"SELECT personal_id, recorded_time  FROM timekeeping where DATE_FORMAT(recorded_time,'%Y-%m-%d') = '$current'");
        $count_rows_list=mysqli_num_rows($mysqli_count);
            while($row_online = mysqli_fetch_array($mysqli_count)){
                //For Absent
                $total_absences = "0";
                $total_ftl = "0";
                $total_undertime = "0";
                $total_under_min = "0";
                if($row_list['personal_id'] != $row_online['personal_id']){
                    $date_absent = $current;
                    $absences = "1";
                    $total_absences += $absences;
                    $leave_type = "Absent";
                }elseif($count_rows_list % 2 != 0){
                //For FTL
                    $date_absent = $current;
                    $ftl = "1";
                    $total_ftl += $ftl;
                    $leave_type = "FTL";
                //For Undertime
                }elseif($hourdiff < 9 || !empty($total_undertime_min)){
                    $date_absent = $row_online['recorded_time'];
                    $undertime = "1";
                    $total_undertime += $undertime;
                    $total_under_min = $total_undertime_min;
                    $leave_type = "Undertime";
                }
if($total_absences != 0 || $total_ftl != 0 || $total_undertime != 0){
    $mysqli_local=mysqli_query($con_local,"SELECT * FROM leave_filing_head where personal_id = '$row_list[personal_id]' AND month = '$month' AND year = '$year'");
    $count_rows_local=mysqli_num_rows($mysqli_local);

    if($count_rows_local == 0 || empty($count_rows_local)){
    // $query = "INSERT INTO leave_filing_head(employee_id, personal_id, month, year, pay_period, absences, ftl, undertime, total_undertime, created_at) 
    //                     VALUES('$row_list[id]','$row_list[personal_id]','$month','$year','0','$total_absences','$total_ftl','$total_undertime','$total_under_min','$today')";

    // if(mysqli_query($con_local,$query)){ 
    //  $headid = mysqli_insert_id($con_local); 
    //  $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
    //                      VALUES ('$headid','$date_absent','$total_under_min','$leave_type','$today')");
    //  }
  } else {
    while($row_local1 = mysqli_fetch_array($mysqli_local)){
            $u_absences = $row_local1['absences'] + $total_absences;
            $u_ftl = $row_local1['ftl'] + $total_ftl;
            $u_undertime = $row_local1['undertime'] + $total_undertime;
            $u_total_undertime = $row_local1['total_undertime'] + $total_undertime;

    // $con_local->query("UPDATE leave_filing_head SET absences = '$u_absences', ftl='$u_ftl', undertime='$u_undertime', total_undertime='$u_total_undertime' , updated_at='$today' 
    //                             WHERE personal_id = '$row_local1[personal_id]'");

    // $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
    //         VALUES ('$row_local1[id]','$date_absent','','$leave_type','$today')");
                }
            }
        }
    }
}
 ?>
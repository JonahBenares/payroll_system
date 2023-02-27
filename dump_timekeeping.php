<?php
 //$con_online=mysqli_connect("cenpripower.com","admin_hris","1t@dm1N_cenpri","db_humanresource");
 $con_online=mysqli_connect("localhost","root","","db_hris");
 $con_local=mysqli_connect("localhost","root","","db_payroll_new");

 $today = date("Y-m-d h:i:sa");
 //$current = date("Y-m-d");
 $current = '2023-01-07';
 $current1=date('Y-m-d', strtotime($current));
 $previous=date('Y-m-d', strtotime('-1 day', strtotime($current)));
 $next=date('Y-m-d', strtotime('+1 day', strtotime($current)));
//$current1 = date('Y-m-d', strtotime("12/15/2022"));
 $month = date('m', strtotime($current));
 $year = date('Y', strtotime($current));
 $year_month = $year . "-".$month;
 

//  $mysqli_mid=mysqli_query($con_local,"SELECT * FROM cutoff WHERE cutoff_type='MID'");
//  $fetch_mid = mysqli_fetch_array($mysqli_mid);
//     $next_month = $month+1;
//     $mid_cutoff_start = $fetch_mid['cutoff_start'];
//     $mid_cutoff_end = $fetch_mid['cutoff_end'];
//     $yr_mo =$year ."-".$next_month;
//     $ms=$year_month."-".$mid_cutoff_start;
//     $me=$yr_mo."-".$mid_cutoff_end;
//     $mid_start=date("Y-m-d",strtotime($ms));
//     $mid_end= date("Y-m-d",strtotime($me));
//     $mid_period = 'MID';

$mysqli_eom=mysqli_query($con_local,"SELECT * FROM cutoff WHERE cutoff_type='EOM'");
$fetch_eom = mysqli_fetch_array($mysqli_eom);
    $eom_cutoff_start = $fetch_eom['cutoff_start'];
    $eom_cutoff_end = $fetch_eom['cutoff_end'];
    $yr_mo=$year_month;
    $es=$year_month."-".$eom_cutoff_start;
    $ee=$yr_mo."-".$eom_cutoff_end;
    $eom_start=date("Y-m-d",strtotime($es));
    $eom_end= date("Y-m-d",strtotime($ee));
    $eom_period = 'EOM';

    $pay_period = '';
    if(($current1 >= $eom_start) && ($current1 <= $eom_end)){
        $pay_period = $eom_period;
    }else{
        $pay_period = 'MID';
    }

    $mysqli_list=mysqli_query($con_local,"SELECT personal_id, supervisory, id FROM employees where is_active='1'");
        while($row_list = mysqli_fetch_array($mysqli_list)){

                $mysqli_shifting=mysqli_query($con_local,"SELECT schedule_type FROM schedule_head where employee_id = '$row_list[id]' AND month_year = '$year_month'");
                $row_shift = mysqli_fetch_array($mysqli_shifting);
                $count_rows_shift=mysqli_num_rows($mysqli_shifting);

                $get_time_in = mysqli_query($con_local,"SELECT time_in FROM schedule_head INNER JOIN schedule_code ON schedule_head.schedule_code = schedule_code.id WHERE personal_id = '$row_list[personal_id]'");
                $fetch_time_in = mysqli_fetch_array($get_time_in);
                $count_time_in=mysqli_num_rows($get_time_in);


        if($count_rows_shift > 0 && $count_time_in > 0){
            if($row_shift['schedule_type'] == 'regular'){
                $get_earliest = mysqli_query($con_online,"SELECT MIN(recorded_time) as earliest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p != '1'");
                $fetch_earliest = mysqli_fetch_array($get_earliest);
                if($fetch_earliest['earliest'] <= $fetch_time_in['time_in']){
                    $earliest = date('H:i:s', strtotime($fetch_time_in['time_in']));
                }else{
                    $earliest = date('H:i:s', strtotime($fetch_earliest['earliest']));
                }
                $e_time = strtotime($earliest);
                $e_minutes = date('i', $e_time);
            
                $get_latest = mysqli_query($con_online,"SELECT MAX(recorded_time) as latest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p != '1'");
                $fetch_latest = mysqli_fetch_array($get_latest);
                $latest = date('H:i:s', strtotime($fetch_latest['latest']));
                $l_time = strtotime($latest);
                $l_minutes = date('i', $l_time);

                $hourdiff = round((strtotime($latest) - strtotime($earliest))/3600, 1);
                $minsdiff = round(abs($l_minutes - $e_minutes)/60, 2);
                $total_mins = ($hourdiff * 60) + $minsdiff;

            }else if($row_shift['schedule_type'] == 'shifting'){
            $get_latest = mysqli_query($con_online,"SELECT MIN(recorded_time) as latest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p != '1'");
            $fetch_latest = mysqli_fetch_array($get_latest);
            $latest = date('H:i:s', strtotime($fetch_latest['latest']));
            $l_time = strtotime($latest);
            $l_minutes = date('i', $l_time);

            $first_day = date('Y-m-d', strtotime($fetch_latest['latest']));
            $next=date('Y-m-d', strtotime('-1 day', strtotime($first_day)));

            $get_earliest = mysqli_query($con_online,"SELECT MIN(recorded_time) as earliest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p = '1'  AND recorded_time LIKE '$next%'");
            $fetch_earliest = mysqli_fetch_array($get_earliest);
            $count_earliest=mysqli_num_rows($get_earliest);
                if($count_earliest != 0){
                    if($fetch_earliest['earliest'] <= $fetch_time_in['time_in']){
                        $earliest = date('H:i:s', strtotime($fetch_time_in['time_in']));
                    }else{
                        $earliest = date('H:i:s', strtotime($fetch_earliest['earliest']));
                    }
                    $e_time = strtotime($earliest);
                    $e_minutes = date('i', $e_time);
    
                    $hourdiff = round((strtotime($latest) - strtotime($earliest))/3600, 1);
                    $minsdiff = round(abs($l_minutes - $e_minutes)/60, 2);
                    $total_mins = ($hourdiff * 60) + $minsdiff;
                }else{
                    $hourdiff = 0;
                    $minsdiff = 0;
                    $total_mins = 0;
            }
        }
    }

    $holiday = mysqli_query($con_local,"SELECT holiday_date FROM holidays where holiday_date='$current'");
    $count_holiday=mysqli_num_rows($holiday);
    $swap = mysqli_query($con_local,"SELECT shift_from_rd FROM swap where personal_id='$row_list[personal_id]'");
    $count_swap=mysqli_num_rows($swap);
    $rest_day = mysqli_query($con_local,"SELECT schedule_detail.rest_day FROM schedule_head INNER JOIN schedule_detail ON schedule_head.id = schedule_detail.schedule_head_id where schedule_head.personal_id='$row_list[personal_id]' AND schedule_detail.rest_day='$current'");
    $count_restday=mysqli_num_rows($rest_day);

    $mysqli_count_online=mysqli_query($con_online,"SELECT personal_id, recorded_time FROM timekeeping where dump_p != '1' AND personal_id = '$row_list[personal_id]'");
    $count_rows_online=mysqli_num_rows($mysqli_count_online);
    $row_online = mysqli_fetch_array($mysqli_count_online);

    $mysqli_count_ftl=mysqli_query($con_local,"SELECT * FROM leave_filing_head lfh INNER JOIN leave_filing_detail lfd ON lfh.id = lfd.leave_filing_head_id where date_absent = '$previous' AND personal_id='$row_list[personal_id]' AND leave_type='Failure to login/logout' AND filed !='1'");
    $row_ftl = mysqli_fetch_array($mysqli_count_ftl);
    $count_rows_ftl=mysqli_num_rows($mysqli_count_ftl);

        $total_absences = 0;
        $total_ftl = 0;
        $total_undertime = 0;
        $total_under_min = 0;
    
           if(($count_rows_online == 0 || $total_mins == 240) && $count_holiday == 0  && $count_swap == 0 && $count_restday == 0){
                    $date_absent = $current;
                    $absences = "1";
                    $total_absences += $absences;
                    $leave_type = "Absent";
                
            }else if($count_rows_online % 2 != 0){
                    $date_absent = $row_online['recorded_time'];
                    $ftl = "1";
                    $total_ftl += $ftl;
                    $leave_type = "Failure to login/logout";
            }else if($count_rows_online == 2 && $count_rows_ftl == 1 && $row_shift['schedule_type'] == 'shifting'){

                $ftl_latest = $row_ftl['ftl'] - 1;
                $detail_id = mysqli_query($con_local,"SELECT id FROM leave_filing_detail where leave_filing_head_id = '$row_ftl[leave_filing_head_id]'");
                $row_detail = mysqli_fetch_array($detail_id);
                $update_ftl =mysqli_query($con_local, "UPDATE leave_filing_head SET ftl='$ftl_latest' WHERE personal_id='$row_list[personal_id]'");
                $delete_ftl = mysqli_query($con_local,"DELETE FROM leave_filing_detail WHERE id = '$row_detail[id]'");

                $get_latest_min = mysqli_query($con_online,"SELECT MAX(recorded_time) as latest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p != '1'");
                    $fetch_latest_min = mysqli_fetch_array($get_latest_min);
                    $latest_min = date('H:i:s', strtotime($fetch_latest_min['latest']));
                    $date_absent = $latest_min;
                    $ftl = "1";
                    $total_ftl += $ftl;
                    $leave_type = "Failure to login/logout";
            }else if($count_rows_online == 1 && $count_rows_ftl == 0 && $row_shift['schedule_type'] == 'shifting'){
                    $date_absent = $row_online['recorded_time'];
                    $ftl = "1";
                    $total_ftl += $ftl;
                    $leave_type = "Failure to login/logout";
            }else if($hourdiff < 9 && $total_mins != 0 && $count_rows_online !=0){
                if($row_list['supervisory'] == 1){
                    $date_absent = 'Pay Period';
                    //$undertime = "1";
                    $total_undertime = "1";
                    $total_under_min = 540 - $total_mins;
                    $leave_type = "Undertime/Tardiness";
                }else{
                    $date_absent = $row_online['recorded_time'];
                    $undertime = "1";
                    $total_undertime += $undertime;
                    $total_under_min = 540 - $total_mins;
                    $leave_type = "Undertime/Tardiness";
                }
            }

            //echo $hourdiff ." - ". $earliest ." - ". $latest ." - ". $row_list["personal_id"] ." - ". $leave_type."<br>";

if($total_absences != 0 || $total_ftl != 0 || $total_undertime != 0){
    $mysqli_local=mysqli_query($con_local,"SELECT * FROM leave_filing_head where personal_id = '$row_list[personal_id]' AND (month = '$month' AND year = '$year' AND pay_period='$pay_period')");
    $count_rows_local=mysqli_num_rows($mysqli_local);

    if($count_rows_local == 0 || empty($count_rows_local)){
    $query = "INSERT INTO leave_filing_head(employee_id, personal_id, month, year, pay_period, absences, ftl, undertime, total_undertime, created_at) 
                        VALUES('$row_list[id]','$row_list[personal_id]','$month','$year','$pay_period','$total_absences','$total_ftl','$total_undertime','$total_under_min','$today')";

    if(mysqli_query($con_local,$query)){ 
     $headid = mysqli_insert_id($con_local); 
     $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
                         VALUES ('$headid','$date_absent','$total_under_min','$leave_type','$today')");
     }
  } else {
    while($row_local1 = mysqli_fetch_array($mysqli_local)){
        $mysqli_details=mysqli_query($con_local,"SELECT undertime_mins FROM leave_filing_Detail WHERE leave_filing_head_id = '$row_local1[id]'");
        $row_details = mysqli_fetch_array($mysqli_details);
            $u_absences = $row_local1['absences'] + $total_absences;
            $u_ftl = $row_local1['ftl'] + $total_ftl;
            if($row_list['supervisory'] == 1){
                $u_undertime = 1;
                $prev_undertime = $row_local1['total_undertime'] + $total_under_min;
                if($prev_undertime != 0){
                    $final_undertime = 540 - $prev_undertime;
                }
                if($final_undertime != 0){
                    $u_total_undertime = $final_undertime;
                }
            }else{
                $u_undertime = $row_local1['undertime'] + $total_undertime;
                $final_undertime = 0;
                $u_total_undertime = $row_local1['total_undertime'] + $total_under_min;
            }

    $con_local->query("UPDATE leave_filing_head SET absences = '$u_absences', ftl='$u_ftl', undertime='$u_undertime', total_undertime='$u_total_undertime' , updated_at='$today' WHERE id = '$row_local1[id]'");

    if($row_list['supervisory'] == 1 && $leave_type == 'Undertime/Tardiness' && $final_undertime != 0){
        $con_local->query("UPDATE leave_filing_detail SET undertime_mins='$final_undertime' WHERE leave_filing_head_id = '$row_local1[id]'");
    }else{
        $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
            VALUES ('$row_local1[id]','$date_absent','$total_under_min','$leave_type','$today')");
    }
                }
            }
        }

    $mysqli_count_online1=mysqli_query($con_online,"SELECT personal_id, recorded_time FROM timekeeping where dump_p != '1' AND personal_id = '$row_list[personal_id]'");
    while($row_online2 = mysqli_fetch_array($mysqli_count_online1)){
       $update_local =$con_online->query("UPDATE timekeeping SET dump_p='1' WHERE personal_id='$row_online2[personal_id]'");
    }
}
 ?>
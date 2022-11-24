<?php
 //$con_online=mysqli_connect("cenpripower.com","admin_hris","1t@dm1N_cenpri","db_humanresource");
 $con_online=mysqli_connect("localhost","root","","db_hris");
 $con_local=mysqli_connect("localhost","root","","db_payroll");

 $today = date("Y-m-d h:i:sa");
 $current = date("Y-m-d");
 $current1=date('Y-m-d', strtotime($current));
//$current1 = date('Y-m-d', strtotime("12/15/2022"));
 $month = date('m', strtotime($current));
 $year = date('Y', strtotime($current));
 $year_month = $year . "-".$month;

 $mysqli_mid=mysqli_query($con_local,"SELECT * FROM cutoff WHERE cutoff_type='MID'");
 $fetch_mid = mysqli_fetch_array($mysqli_mid);
    $next_month = $month+1;
    $mid_cutoff_start = $fetch_mid['cutoff_start'];
    $mid_cutoff_end = $fetch_mid['cutoff_end'];
    $yr_mo =$year ."-".$next_month;
    $ms=$year_month."-".$mid_cutoff_start;
    $me=$yr_mo."-".$mid_cutoff_end;
    $mid_start=date("Y-m-d",strtotime($ms));
    $mid_end= date("Y-m-d",strtotime($me));
    $mid_period = 'MID';

// $mysqli_eom=mysqli_query($con_local,"SELECT * FROM cutoff WHERE cutoff_type='EOM'");
// $fetch_eom = mysqli_fetch_array($mysqli_eom);
//     $eom_cutoff_start = $fetch_eom['cutoff_start'];
//     $eom_cutoff_end = $fetch_eom['cutoff_end'];
//     $yr_mo=$year_month;
//     $es=$year_month."-".$eom_cutoff_start;
//     $ee=$yr_mo."-".$eom_cutoff_end;
//     $eom_start=date("Y-m-d",strtotime($es));
//     $eom_end= date("Y-m-d",strtotime($ee));
        //$eom_period = 'EOM';

    $pay_period = '';
    if(($current1 >= $mid_start) && ($current1 <= $mid_end)){
        $pay_period = $mid_period;
    }else{
        $pay_period = 'EOM';
    }
//To get all active employees in payroll system and recorded time
    $mysqli_list=mysqli_query($con_local,"SELECT personal_id, id FROM employees where is_active='1'");
    //$row_list = mysqli_fetch_array($mysqli_list);
        while($row_list = mysqli_fetch_array($mysqli_list)){

                $get_earliest = mysqli_query($con_online,"SELECT MIN(recorded_time) as earliest FROM timekeeping WHERE personal_id = '$row_list[personal_id]' AND dump_p != '1'");
                $fetch_earliest = mysqli_fetch_array($get_earliest);
                $earliest = date('H:i:s', strtotime($fetch_earliest['earliest']));
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

//To get latest time from online timekeeping
    $holiday = mysqli_query($con_local,"SELECT holiday_date FROM holidays where holiday_date='$current'");
    $count_holiday=mysqli_num_rows($holiday);
    $swap = mysqli_query($con_local,"SELECT shift_from_rd FROM swap where personal_id='$row_list[personal_id]'");
    $count_swap=mysqli_num_rows($swap);
    $rest_day = mysqli_query($con_local,"SELECT schedule_detail.rest_day FROM schedule_head INNER JOIN schedule_detail ON schedule_head.id = schedule_detail.schedule_head_id where schedule_head.personal_id='$row_list[personal_id]' AND schedule_detail.rest_day='$current'");
    $count_restday=mysqli_num_rows($rest_day);

    $mysqli_count_online=mysqli_query($con_online,"SELECT personal_id, recorded_time FROM timekeeping where dump_p != '1' AND personal_id = '$row_list[personal_id]'");
    $count_rows_online=mysqli_num_rows($mysqli_count_online);
    $row_online = mysqli_fetch_array($mysqli_count_online);

    //echo $count_rows_online."<br>";

        //while($row_online = mysqli_fetch_array($mysqli_count_online)){
        // $mysqli_count_local=mysqli_query($con_local,"SELECT leave_filing_head.personal_id, leave_filing_detail.date_absent FROM leave_filing_head INNER JOIN leave_filing_detail ON leave_filing_head.id = leave_filing_detail.leave_filing_head_id where leave_filing_head.personal_id='$row_online[personal_id]' AND date_absent = '$current'");
        // $count_rows_local=mysqli_num_rows($mysqli_count_local);

        // $total_count = $count_rows_online + $count_rows_local;


    //$row_list1 = mysqli_fetch_array($mysqli_list);

    //while($row_online = mysqli_fetch_array($mysqli_count_online)){
        $total_absences = "0";
        $total_ftl = "0";
        $total_undertime = "0";
        $total_under_min = "0";
    
           if(($count_rows_online == 0 || $total_mins == 240) && $count_holiday == 0  && $count_swap == 0 && $count_restday == 0){
                    $date_absent = $current;
                    $absences = "1";
                    $total_absences += $absences;
                    $leave_type = "Absent";
                
            }else if($count_rows_online % 2 != 0){
                    $date_absent = $current;
                    $ftl = "1";
                    $total_ftl += $ftl;
                    $leave_type = "Failure to login/logout";

            }else if($hourdiff < 9 && $total_mins != 0 && $count_rows_online !=0){
                    $date_absent = $row_online['recorded_time'];
                    $undertime = "1";
                    $total_undertime += $undertime;
                    $total_under_min = 540 - $total_mins;
                    $leave_type = "Undertime/Tardiness";
            }
            echo $count_rows_online."-".$row_list['personal_id']."-".$leave_type."-".$total_under_min."-".$total_mins."<br>";

        

// if($total_absences != 0 || $total_ftl != 0 || $total_undertime != 0){
//     $mysqli_local=mysqli_query($con_local,"SELECT * FROM leave_filing_head where personal_id = '$row_list[personal_id]' AND (month = '$month' AND year = '$year' AND pay_period='$pay_period')");
//     $count_rows_local=mysqli_num_rows($mysqli_local);

//     if($count_rows_local == 0 || empty($count_rows_local)){
//     $query = "INSERT INTO leave_filing_head(employee_id, personal_id, month, year, pay_period, absences, ftl, undertime, total_undertime, created_at) 
//                         VALUES('$row_list[id]','$row_list[personal_id]','$month','$year','$pay_period','$total_absences','$total_ftl','$total_undertime','$total_under_min','$today')";

//     if(mysqli_query($con_local,$query)){ 
//      $headid = mysqli_insert_id($con_local); 
//      $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
//                          VALUES ('$headid','$date_absent','$total_under_min','$leave_type','$today')");
//      }
//   } else {
//     while($row_local1 = mysqli_fetch_array($mysqli_local)){
//             $u_absences = $row_local1['absences'] + $total_absences;
//             $u_ftl = $row_local1['ftl'] + $total_ftl;
//             $u_undertime = $row_local1['undertime'] + $total_undertime;
//             $u_total_undertime = $row_local1['total_undertime'] + $total_under_min;

//     $con_local->query("UPDATE leave_filing_head SET absences = '$u_absences', ftl='$u_ftl', undertime='$u_undertime', total_undertime='$u_total_undertime' , updated_at='$today' WHERE id = '$row_local1[id]'");

//     $con_local->query("INSERT INTO leave_filing_detail (leave_filing_head_id, date_absent, undertime_mins, leave_type, created_at) 
//             VALUES ('$row_local1[id]','$date_absent','$total_under_min','$leave_type','$today')");
//                 }
//             }
//         }

// $mysqli_count_online1=mysqli_query($con_online,"SELECT personal_id, recorded_time FROM timekeeping where dump_p != '1' AND personal_id = '$row_list[personal_id]'");
// while($row_online2 = mysqli_fetch_array($mysqli_count_online1)){
//     $update_local =$con_online->query("UPDATE timekeeping SET dump_p='1' WHERE personal_id='$row_online2[personal_id]'");
// }

//UPDATE `timekeeping` SET `dump_p` = '1';


     }
 ?>
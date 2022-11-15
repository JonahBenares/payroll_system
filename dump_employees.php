<?php
 //$con_online=mysqli_connect("cenpripower.com","admin_hris","1t@dm1N_cenpri","db_humanresource");
 $con_online=mysqli_connect("localhost","root","","db_hris_new");
 $con_local=mysqli_connect("localhost","root","","db_payroll");

 $mysqli_online=mysqli_query($con_online,"SELECT personal_id, lname, fname, emp_num, current_bu, current_dept, current_location, supervisor FROM personal_data WHERE emp_status = 'Regular' OR emp_status = 'Trainee'
                        OR emp_status = 'Probationary' OR emp_status = 'Project Based'");
 $count_rows_online=mysqli_num_rows($mysqli_online);


 $mysqli_local=mysqli_query($con_local,"SELECT * FROM employees");
 $count_rows_local=mysqli_num_rows($mysqli_local);

 if($count_rows_online > $count_rows_local){

    while($row_online=mysqli_fetch_array($mysqli_online)){

        $fullname = $row_online['lname']. ", ". $row_online['fname'];

        $check_local = mysqli_query($con_local,"SELECT count(id) AS ct FROM employees WHERE personal_id = '$row_online[personal_id]'");
        $check_fetch=mysqli_fetch_array($check_local);
        if($check_fetch['ct'] == 0){

             $con_local->query("INSERT INTO employees (personal_id, full_name, emp_num, business_unit, department, supervisory, emp_location, is_active) 
                        VALUES ('$row_online[personal_id]', '$fullname','$row_online[emp_num]','$row_online[current_bu]','$row_online[current_dept]','$row_online[supervisor]','$row_online[current_location]','1')"); 
        }
    }
 } else {
        $mysqli_local2=mysqli_query($con_local,"SELECT personal_id FROM employees");
        while($fetch_local2 = mysqli_fetch_array($mysqli_local2)){
            
            $mysqli_online2=mysqli_query($con_online,"SELECT personal_id, current_bu, current_dept, current_location, emp_status FROM personal_data WHERE personal_id = '$fetch_local2[personal_id]'");
            $fetch_online2 = mysqli_fetch_array($mysqli_online2);
            if($fetch_online2['emp_status'] == 'Regular' || $fetch_online2['emp_status'] == 'Trainee' || $fetch_online2['emp_status'] == 'Probationary' || $fetch_online2['emp_status'] == 'Project Based'){
                $is_active=1;
            } else {
                $is_active=0;
            }
                $con_local->query("UPDATE employees SET business_unit = '$fetch_online2[current_bu]', department='$fetch_online2[current_dept]', emp_location='$fetch_online2[current_location]', is_active='$is_active' 
                                WHERE personal_id = '$fetch_local2[personal_id]'");
            
        }
       

 }


 mysqli_query($con_local,"DELETE FROM departments");
 $mysqli_online_dept=mysqli_query($con_online,"SELECT * FROM department");
 while($fetch_dept = mysqli_fetch_array($mysqli_online_dept)){
    $con_local->query("INSERT INTO departments (dept_id, dept_name) VALUES ('$fetch_dept[dept_id]','$fetch_dept[dept_name]')");

 }

 mysqli_query($con_local,"DELETE FROM business_units");
 $mysqli_online_bu=mysqli_query($con_online,"SELECT * FROM business_unit");
 while($fetch_bu = mysqli_fetch_array($mysqli_online_bu)){
    $con_local->query("INSERT INTO business_units (bu_id, bu_name) VALUES ('$fetch_bu[bu_id]','$fetch_bu[bu_name]')");

 }

 mysqli_query($con_local,"DELETE FROM locations");
 $mysqli_online_loc=mysqli_query($con_online,"SELECT * FROM location");
 while($fetch_loc = mysqli_fetch_array($mysqli_online_loc)){
    $con_local->query("INSERT INTO locations (loc_id, location_name) VALUES ('$fetch_loc[location_id]','$fetch_loc[location_name]')");

 }



 ?>
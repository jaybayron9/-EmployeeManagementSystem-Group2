<?php
include("../db/db.php");


if(isset($_POST['update'])){



$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$position = $_POST['position'];
$startDate = $_POST['startDate'];
$department = $_POST['department'];
$eid = $_POST['eid'];



$getDepartment = mysqli_query($web_db, "SELECT * from department_tbl where department_name = '$department'");

$department_data = mysqli_fetch_array($getDepartment);


$department_id = $department_data['department_id'];


$addEmployee = mysqli_query($web_db, "UPDATE employee_tbl set employee_fname = '$fname', employee_mname = '$mname', employee_lname = '$lname', employee_position = '$position', employee_startDate = '$startDate', department_id = '$department_id' where employee_id = '$eid'");



header("location: ../dashboard.php");



}



?>
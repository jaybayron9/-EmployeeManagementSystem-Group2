<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$fname = $form_data->fname;
$lname = $form_data->lname;
$position = $form_data->position;
$startDate = $form_data->startDate;
$department = $form_data->department;
$eid = $form_data->employee_id;


$addEmployee = mysqli_query($web_db, "UPDATE employee_tbl set employee_fname = '$fname', employee_lname = '$lname', employee_position = '$position', employee_startDate = '$startDate', department_id = '$department' where employee_id = '$eid'");




?>
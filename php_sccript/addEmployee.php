<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$fname = $form_data->fname;
$mname = $form_data->mname;
$lname = $form_data->lname;
$position = $form_data->position;
$startDate = $form_data->startDate;
$department = $form_data->department;

$addEmployee = mysqli_query($web_db, "INSERT INTO employee_tbl (employee_fname, employee_mname, employee_lname, employee_startDate, employee_position, department_id) VALUES ('$fname','$mname', '$lname', '$startDate', '$position', '$department')");




?>
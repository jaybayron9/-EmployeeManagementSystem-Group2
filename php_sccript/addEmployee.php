<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$fname = $form_data->fname;
$lname = $form_data->lname;
$position = $form_data->position;
$startDate = $form_data->startDate;
$department = $form_data->department;

$addEmployee = mysqli_query($web_db, "INSERT INTO employee_tbl (employee_fname, employee_lname, employee_startDate, employee_position, department_id) VALUES ('$fname', '$lname', '$startDate', '$position', '$department')");




?>
<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$department_name = $form_data->department_name;
$department_description = $form_data->department_description;


$insert_department = mysqli_query($web_db, "INSERT INTO department_tbl (department_name, department_description) VALUES ('$department_name', '$department_description')");




?>		
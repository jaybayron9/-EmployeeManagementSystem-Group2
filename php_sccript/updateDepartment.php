<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$did = $form_data->department_id;
$department = $form_data->department;
$description = $form_data->description;


$archiveDepartment = mysqli_query($web_db, "UPDATE department_tbl set department_name = '$department', department_description = '$description' where department_id = '$did'");




?>		
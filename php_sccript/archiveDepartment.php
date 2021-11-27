<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$did = $form_data->department_id;


$archiveDepartment = mysqli_query($web_db, "UPDATE department_tbl set department_status = 'ARCHIVE' where department_id = '$did'");




?>		
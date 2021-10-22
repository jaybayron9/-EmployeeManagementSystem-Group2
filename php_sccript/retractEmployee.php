<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$status = $form_data->status;
$remarks = $form_data->remarks;
$endDate = $form_data->endDate;
$eid = $form_data->employee_id;


$addEmployee = mysqli_query($web_db, "UPDATE employee_tbl set employee_status = '$status', employee_remarks = '$remarks', employee_endDate = '$endDate' where employee_id = '$eid'");




?>
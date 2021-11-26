<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$did = $form_data->department_id;




$deleteDepartment = mysqli_query($web_db, "DELETE from department_tbl where department_id = '$did'");


?>		
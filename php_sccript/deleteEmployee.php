<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$eid = $form_data->employee_id;




$deleteEmployee = mysqli_query($web_db, "DELETE from employee_tbl where employee_id = '$eid'");


?>		
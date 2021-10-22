<?php
include("../db/db.php");


$form_data = json_decode(file_get_contents("php://input"));
$status = $form_data->employee_status;

$getActiveEmployee = mysqli_query($web_db, "SELECT * from employee_tbl INNER JOIN department_tbl on department_tbl.department_id = employee_tbl.department_id where employee_status = '$status'");
$leave_btn = "";

$data_count = mysqli_num_rows($getActiveEmployee);


if($data_count > 0){

while($row = mysqli_fetch_array($getActiveEmployee)){
if($row['employee_status'] == "EMPLOYED"){

$leave_btn = "block";

}else{
	$leave_btn = "none";
}


$fullname = $row['employee_fname']." ".$row['employee_lname'];

	$data[] = array("fullname"=>$fullname, "position"=>$row['employee_position'], "department"=>$row['department_name'], "startDate"=>$row['employee_startDate'], "endDate"=>$row['employee_endDate'], "remarks"=>$row['employee_remarks'], "status"=>$row['employee_status'], "leave_btn"=>$leave_btn, "employee_id"=>$row['employee_id'], "fname"=>$row['employee_fname'], "lname"=>$row['employee_lname'], "department_id"=>$row['department_id']);
}


}else{
	$data[] = array("fullname"=>"No Data", "position"=>"No Data", "department"=>"No Data", "startDate"=>"No Data", "endDate"=>"No Data", "remarks"=>"No Data", "status"=>"No Data", "leave_btn"=>"No Data", "employee_id"=>"No Data", "fname"=>"No Data", "lname"=>"No Data", "department_id"=>"No Data");

}


echo json_encode($data);	





?>
<?php
include("../db/db.php");


$getDepartment = mysqli_query($web_db, "SELECT * from department_tbl where department_status = 'ARCHIVE'");
$data_count = mysqli_num_rows($getDepartment);

$activate = "";
$archive = "";
$edit = "";

if($data_count > 0){

	while($fetch_data = mysqli_fetch_array($getDepartment)){


		if($fetch_data['department_status'] == "ACTIVE"){

			$active = "none";
			$archive = "block";
			$edit = "block";

		}else{
			$active = "block";
			$archive = "none";
			$edit = "block";

		}

$data[] = array("department"=>$fetch_data['department_name'], "description"=>$fetch_data['department_description'], "department_id"=>$fetch_data['department_id'], "active"=>$active, "archive"=>$archive, "edit"=>$edit);


}


}else{


$data[] = array("department"=>"No Data", "description"=>"No Data", "department_id"=>"", "active"=>"none", "archive"=>"none", "edit"=>"none");



}




echo json_encode($data);



?>		
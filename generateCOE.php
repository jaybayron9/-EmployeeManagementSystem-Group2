<?php

include("db/db.php");


if(isset($_GET['id'])){
	$id = $_GET['id'];
	global $id;

}

$fetch_employee = mysqli_query($web_db, "SELECT * from employee_tbl INNER JOIN department_tbl on department_tbl.department_id = employee_tbl.department_id where employee_id  = '$id'");

$row = mysqli_fetch_array($fetch_employee);

$fullname = $row['employee_fname']. " ".$row['employee_lname'];


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	   <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	  <script type="text/javascript">
    
      window.print();
   function closePrint(){
window.close();
  };
  
  </script>
</head>
<body onafterprint="closePrint()" class="container">

<br><br>
	<center>

			<img src="assets/logo.png" width="400">

		<h1>Certificate of Employment</h1></center>
	<br><br><br>
<center>
This is to Certify that <b><?php echo $fullname; ?></b> is an employee of this company.<br>
and held the position of <b><?php echo $row['employee_position']; ?></b> under <br><?php echo $row['department_name']; ?><!--Dito-->from <?php echo date("jS F, Y", strtotime($row['employee_startDate'])); ?><?php

if($row['employee_status'] == "EMPLOYED"){
	echo "(Still Employed)";

}else{


 echo "to &nbsp", date("jS F, Y", strtotime($row['employee_endDate']));


 } ?><br><br>
This certificate is being issued upon request or upon retraction. For <b>Employement Purposes</b>



<br><br>

Issued this <?php echo date("jS F, Y", strtotime(date("Y-m-d"))); ?>

</center>
<br><br><br>
<div style="position: absolute; margin-left: 65%;">
<p>____________________</p><p>Employee Signature</p><br>
</div>
<br><br><br><br><br><br><br><br>


<center><p>******************************************</p></center>



</body>
</html>
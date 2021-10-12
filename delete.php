<?php

include 'connection.php';

$employee_id = $_GET['employee_id'];
$sql = " DELETE FROM employees WHERE employee_id = $employee_id " ;
$query = mysqli_query($con,$sql);

header("location:index.php");

?>
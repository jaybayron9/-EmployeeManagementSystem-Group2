<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'emp_db';

$con = mysqli_connect ($servername,$username,$password,"$dbname");


if (!$con) 
	{
		echo "Connection failed!";
	}
	
?>
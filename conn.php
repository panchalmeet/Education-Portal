<?php
	echo "Hello World!!!!";

	$hostname="localhost";
	$username="root";
	$password="";
	$db_name="edu";

$con=mysqli_connect($hostname,$username,$password,$db_name) or die("NOT CONNECTED..");
mysqli_select_db($con,$db_name) or die("DATABASE NOT FOUND..");
?>

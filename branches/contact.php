<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','odlms_db');

// get the post records
$bName = $_POST['bName'];
$bEmail = $_POST['bEmail'];
$bPhone = $_POST['bPhone'];
$bAddress = $_POST['bAddress'];

// database insert SQL code
$sql = "INSERT INTO `branch` (`Id`, `name`, `phone`, `address`, `discount`) VALUES ('0', '$bName', '$bEmail', '$bPhone', '$bAddress')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}

?>
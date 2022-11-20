<?php
$con = mysqli_connect('localhost','root');
 if($con)
 {
 	echo "Connection successful";
 }
 else
 {
 	echo "No Connection";
 }
 mysqli_select_db($con, 'odlms_db');
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email  = $_POST['email'];
	$phonenumber = $_POST['phonenumber'];
	$password = $_POST['password'];

  $query="insert into userreg(firstname, lastname, email , phonenumber, password) values ('$firstname', '$lastname', '$email', '$phonenumber', '$password')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
<?php
include("config.php");
?>
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
  $nameo=$_POST['nameo'];
  $patientid=$_POST['patientid'];
  $phoneo 		= $_POST['phoneo'];
  $addresso=$_POST['addresso'];
  $emailo 		= $_POST['emailo'];

  $query="insert into patient_reg(nameo, patientid, addresso, emailo) values ('$nameo','$patientid','$addresso', 'emailo')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
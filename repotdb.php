<?php
require_once('config.php');
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
	$patiid 			= $_POST['patiid'];
	$paname 			= $_POST['paname'];
	$gender 			= $_POST['gender'];
	$age 				= $_POST['age'];
	$phone				= $_POST['phone'];
	$tst 				= $_POST['tst'];
	$stat 				= $_POST['stat'];

  $query="insert into repot (patiid, paname, gender, age, phone, tst, stat) values ('$patiid','$paname','$gender','$age','$phone','$tst','$stat')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
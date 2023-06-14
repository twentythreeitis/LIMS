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
	$namm 			= $_POST['namm'];
	$short 			= $_POST['short'];
	$sample 		= $_POST['sample'];
	$price			= $_POST['price'];

  $query="insert into testlist (namm, short, sample, price) values ('$namm','$short','$sample','$price')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
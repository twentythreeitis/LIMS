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
	$namc 			= $_POST['namc'];
	$samplec 		= $_POST['samplec'];
	$pricec 		= $_POST['pricec'];
  $query="insert into cultures (namc, samplec, pricec) values ('$namc','$samplec','$pricec')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
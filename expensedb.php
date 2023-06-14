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
	$cate 			= $_POST['cate'];
	$expensed 		= $_POST['expensed'];
	$dated 			= $_POST['dated'];
	$amount			= $_POST['amount'];

  $query="insert into expense (cate, expensed, dated, amount) values ('$cate','$expensed','$dated','$amount')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
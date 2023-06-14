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
	$nahv 			= $_POST['nahv'];
	$phonehv 		= $_POST['phonehv'];
	$pricehv 		= $_POST['pricehv'];

  $query="insert into homevisit (nahv, phonehv, pricehv) values ('$nahv','$phonehv','$pricehv')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
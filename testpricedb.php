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
	$tets 			= $_POST['tets'];
	$pricet 		= $_POST['pricet'];
  $query="insert into testprice (tets, pricet) values ('$tets', '$pricet')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
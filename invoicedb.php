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
	$subtotal 			= $_POST['subtotal'];
	$disco 				= $_POST['disco'];
	$totalo				= $_POST['totalo'];
	$paid 				= $_POST['paid'];
	$dues 				= $_POST['dues'];

  $query="insert into invoiced (patiid, paname, subtotal, disco, totalo, paid, dues ) values ('$patiid','$paname','$subtotal','$disco','totalo','paid','dues')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
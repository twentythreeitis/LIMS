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
	$namd 			= $_POST['namd'];
	$doctorid 		= $_POST['doctorid'];
	$phoned 		= $_POST['phoned'];
	$addressd		= $_POST['addressd'];
	$emaild 		= $_POST['emaild'];
	$commision 		= $_POST['commision'];

  $query="insert into doctor_list (namd, doctorid, phoned, addressd, emaild, commision ) values ('$namd','$doctorid','$phoned','$addressd', '$emaild', '$commision')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
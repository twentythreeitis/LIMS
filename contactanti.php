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
  $serialno=$_POST['serialno'];
  $antiname=$_POST['antiname'];
  $commname =$_POST['commname '];
  $antiprice=$_POST['antiprice'];

  $query="insert into antibiotics (serialno, antiname, commname , antiprice) values ('$serialno','$antiname','$commname ','$antiprice')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
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
  $nameo=$_POST['nameo'];
  $phoneo=$_POST['phoneo'];
  $addresso=$_POST['addresso'];
  $discounto=$_POST['discounto'];

  $query="insert into branch (nameo, phoneo, addresso, discounto) values ('$nameo','$phoneo','$addresso','$discounto')";
  echo "$query";
  mysqli_query($con, $query);
  header('location:index.php');
?>
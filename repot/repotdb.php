<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$patiid 			= $_POST['patiid'];
	$paname 			= $_POST['paname'];
	$gender 			= $_POST['gender'];
	$age 				= $_POST['age'];
	$phone				= $_POST['phone'];
	$tst 				= $_POST['tst'];
	$stat 				= $_POST['stat'];

		$sql = "INSERT INTO repot (patiid, paname, gender, age, phone, tst, stat ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$patiid, $paname, $gender, $age, $phone, $tst, $stat]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
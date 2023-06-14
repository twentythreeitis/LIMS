<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$nameo 			= $_POST['nameo'];
	$patientid 		= $_POST['patientid'];
	$phoneo 		= $_POST['phoneo'];
	$addresso		= $_POST['addresso'];
	$emailo 		= $_POST['emailo'];

		$sql = "INSERT INTO patient_reg (nameo, patientid, phoneo, addresso, emailo ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$nameo, $patientid, $phoneo, $addresso, $emailo]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
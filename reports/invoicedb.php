<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$patiid 			= $_POST['patiid'];
	$paname 			= $_POST['paname'];
	$subtotal 			= $_POST['subtotal'];
	$disco 				= $_POST['disco'];
	$totalo				= $_POST['totalo'];
	$paid 				= $_POST['paid'];
	$dues 				= $_POST['dues'];

		$sql = "INSERT INTO patient_reg (patiid, paname, subtotal, disco, totalo, paid, dues ) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$patiid, $paname, $subtotal, $disco, $totalo, $paid, $dues]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
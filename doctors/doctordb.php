<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$namd 			= $_POST['namd'];
	$doctorid 		= $_POST['doctorid'];
	$phoned 		= $_POST['phoned'];
	$addressd		= $_POST['addressd'];
	$emaild 		= $_POST['emaild'];
	$commision 		= $_POST['commision'];

		$sql = "INSERT INTO patient_reg (namd, doctorid, phoned, addressd, emaild, commision ) VALUES(?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$namd, $doctorid, $phoned, $addressd, $emaild, $commision]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
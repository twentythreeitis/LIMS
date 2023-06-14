<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$nahv 			= $_POST['nahv'];
	$phonehv 		= $_POST['phonehv'];
	$pricehv 		= $_POST['pricehv'];


		$sql = "INSERT INTO homevisit (nahv, phonehv, pricehv) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$nahv, $phonehv, $pricehv]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
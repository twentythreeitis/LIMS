<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$tets 			= $_POST['tets'];
	$pricet 		= $_POST['pricet'];


		$sql = "INSERT INTO testprice (tets, pricet) VALUES(?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$tets, $pricet]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
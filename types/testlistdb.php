<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$namm 			= $_POST['namm'];
	$short 		= $_POST['short'];
	$sample 		= $_POST['sample'];
	$price		= $_POST['price'];
	

		$sql = "INSERT INTO testlist (namm, short, sample, price) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$namm, $short, $sample, $price]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
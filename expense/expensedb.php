<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$cate 			= $_POST['cate'];
	$expensed 		= $_POST['expensed'];
	$dated 			= $_POST['dated'];
	$amount			= $_POST['amount'];


		$sql = "INSERT INTO expense (cate, expensed, dated, amount) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$cate, $expensed, $dated, $amount]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
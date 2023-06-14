<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$nameo 			= $_POST['nameo'];
	$phoneo 		= $_POST['phoneo'];
	$addresso 		= $_POST['addresso'];
	$discounto		= $_POST['discounto'];

		$sql = "INSERT INTO branch (nameo, phoneo, addresso, discounto) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$nameo, $phoneo, $addresso, $discounto]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
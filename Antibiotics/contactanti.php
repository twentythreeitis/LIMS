<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$serialno 			= $_POST['serialno'];
	$antiname 		= $_POST['antiname'];
	$commname 		= $_POST['commname'];
	$antiprice		= $_POST['antiprice'];

		$sql = "INSERT INTO antibiotics (serialno, antiname, commname, antiprice) VALUES(?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$serialno, $antiname, $commname, $antiprice]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}
<?php

include_once 'mysql_connect.php';

$data = file_get_contents("php://input");

$objData = json_decode($data);

/* set autocommit to off */
mysqli_autocommit($db, FALSE);

try {
		
	$r_exist = $db->query("SELECT * FROM usuarios WHERE usuario = '$objData->username'");
	
	if($r_exist->num_rows > 0) {
		
		$arr = array('data' => $r_exist->num_rows);
		echo json_encode($arr);
			
	} else {
		
		$result = $db->query("INSERT INTO usuarios (usuario, password) VALUES ('$objData->username', '$objData->pass')");
		/* commit transaction */
		mysqli_commit($db);
		
		$arr = array('data' => $r_exist->num_rows);
		echo json_encode($arr);
		
	}
	
} catch (Exception $e) {
	
    mysqli_rollback($db);
    
}






 
?>


<?php

include_once 'mysql_connect.php';

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$lugar = $_POST['lugar'];
$fecha = date("Y-m-d",strtotime($_POST['fecha']));

$now = date("Y-m-d H:i:s");

/* set autocommit to off */
mysqli_autocommit($db, FALSE);

try {
	
	$result = $db->query("INSERT INTO evento (nombre, descripcion, lugar, fecha) VALUES ('$nombre', '$descripcion', '$lugar', '$fecha')");

	/* commit transaction */
	mysqli_commit($db);
	
} catch (Exception $e) {
	
    mysqli_rollback($db);
    
}






 
?>


<?php


include_once 'mysql_connect.php';


$usuario = $_POST["user"];   
$password = $_POST["pass"];


$query = $db->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

if($query->num_rows > 0) {
	$row = $query->fetch_array();
	echo "<pre>";
	print_r($row);
	
	echo "<br>";
	echo "usuario: " . $row["usuario"] . "<br>";
	echo "pass: " . $row["password"];
	
	if($row["password"] == $password){
		session_start();
		$_SESSION['usuario'] = $row["usuario"];
  		header("Location: ../crear_evento.php");
	} else {
		header("Location: ../login.php?pass=false");
	}
	
} else {
	header("Location: login.php?user=false");
}

mysqli_free_result($query);
mysqli_close($db);

?>
<?php

//$whitelist = array(
//    '127.0.0.1',
//    '::1',
//	'localhost'
//);
//
//if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
//	$db = mysqli_connect("localhost","root","","eventosdb") or die("Error " . mysqli_error($link)); 
//} else {
	$db = mysqli_connect("us-cdbr-iron-east-01.cleardb.net","b55a87daaea2e7","0a48d271","heroku_d868b7ea85c6d6f") or die("Error " . mysqli_error($link));
//}

?>
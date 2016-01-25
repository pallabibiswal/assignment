<?php
session_start();
require_once("dbinfo.php");
//storing id and unique key from activation url
$value = $_GET['id'];
$key = $_GET['key'];
if($value && $key){ 
	$query= "UPDATE users SET activate = 1 WHERE pk_users = '$value' AND activatekey = '$key'";
	$execute = mysqli_query($db,$query);

	if($execute){ 
		$_SESSION['msg'] = "Your account is activated.. now log in." ;
		header("Location: login.php");
	}

} 
?>
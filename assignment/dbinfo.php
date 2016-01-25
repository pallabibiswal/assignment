<?php
$db_username = "pallabi";
$db_password = "pallabi4321";
$db_database = "registration";

//connecting to database
$db = mysqli_connect("localhost", $db_username, $db_password,$db_database);

//connection error 
if(mysqli_connect_errno()){
		die("database connection is failed:".mysqli_connect_error()."(".mysqli_connect_errno().")");
	}

?>
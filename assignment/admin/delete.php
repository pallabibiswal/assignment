<?php
require_once '../dbinfo.php';
$res = array();
$id	= trim($_POST['id']);
$res['id'] = $id;
$query = "DELETE FROM `users` WHERE pk_users = '$id'";
if(mysqli_query($db, $query)){
	echo json_encode($res);
}
?>
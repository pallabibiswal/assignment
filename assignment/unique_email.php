<?php
 require_once("dbinfo.php");
 $email = $_POST['email'];
 $query = "SELECT pk_users FROM users WHERE email='$email'";    
 $in = mysqli_query($db,$query);
 $response = array();
 if($in && mysqli_fetch_assoc($in)) {
 	$response['validate'] = 'true';
 	$response['reason'] = "*Provide an unique email id.";
 } else {
 	$response['validate'] = 'false';
 }
 echo json_encode($response);
 ?>
<?php

	session_start();

	require_once("dbinfo.php");
	echo $_SESSION['id'];

	if($value = $_SESSION['id']){

		$query = "SELECT email FROM users WHERE pk_users= '$value' ";
		$result = mysqli_query($db,$query);
		$headers = "MIME-Version: 1.0" . "\r\n";
   		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

		 $row = mysqli_fetch_assoc($result);
			$profile=$row['email'];
			$res = mail ( "$profile", "account activation" ,"http://localhost/example/registration/activate.php?id=$value",$headers );
			var_export( $res );
		
	}
	session_unset();
	session_destroy();
	session_start();

	$_SESSION['msg'] = "PLease check your mail for activation." ;
	header("Location: login.php");//edit
	
?>

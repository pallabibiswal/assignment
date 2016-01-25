<?php
	//ini_set('error_reporting', E_ALL|E_STRICT);
	//ini_set('display_errors', 1);

	session_start();

	require_once("dbinfo.php");
	
		$email = $_POST['email'];
	
		
		$query = "SELECT activate,password FROM users WHERE email= '$email'";
		$result = mysqli_query($db,$query);
		if($result){
		while( $row = mysqli_fetch_assoc($result)){
			$profile=$row;
			print_r($profile);
			}
        if($profile['activate']=1){
         	$get=$profile['password'];
			$res = mail ( "$email", "forgot password" , "your password is : $get" );
			var_export( $res );
			$_SESSION['msg'] = "PLease check your mail for forgot password." ;
			header("Location: login.php");//edit
			}
		}
		else{
			$_SESSION['msg'] = "<center><strong>*Please give a valid email id.</strong></center>";
			header("Location: forgot.php");
	}
	
	//session_unset();
	//session_destroy();
	//session_start();*/
?>

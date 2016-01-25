<?php
	session_start();
	require_once("dbinfo.php");
		$email = $_POST['email'];
		
		$query = "SELECT IF(EXISTS(SELECT pk_users FROM users WHERE email='$email'),1,0)";
		$result = mysqli_query($db,$query);
		$row = mysqli_fetch_assoc($result);
		$val1 = $row["IF(EXISTS(SELECT pk_users FROM users WHERE email='$email'),1,0)"];

		if($val1){
			$q = "SELECT activate,password FROM users WHERE email= '$email'";
			$res = mysqli_query($db,$q);
			while( $row1 = mysqli_fetch_assoc($res)){
				$profile=$row1;
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
?>

















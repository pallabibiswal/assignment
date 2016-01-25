<?php


session_start();
require_once('dbinfo.php');

$v=$_POST['signin'];

if($v) {

  $first = $_POST['first'];                                                             
  $password = $_POST['password'];
  
  $q = "SELECT pk_users FROM users WHERE first='$first' AND password='$password'";
  $result = mysqli_query($db,$q);

  if ($result and $row = mysqli_fetch_assoc($result)) 
  {
    $_SESSION['id'] = $row['pk_users'];
    $_SESSION['first'] = $first;
    header("Location: enter.php");
  }
  else{
    echo "Re type it again";
  	//header("Location: login.php");
  }
  
}
?>
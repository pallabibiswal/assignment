<?php
session_start();
ob_start();
require_once("dbinfo.php");
        
        $response = array();
        $email = $_POST['email'];                                                             
        $password = $_POST['password'];
        //query to fetch id and email to set session and for successful login
        $q = "SELECT pk_users FROM users WHERE email='$email' AND password='$password' AND activate = '1'";
        $result = mysqli_query($db,$q);
        if ($result and $row = mysqli_fetch_assoc($result)) 
        {
            $_SESSION['id'] = $row['pk_users'];
            $_SESSION['email'] = $email;
            $response['validate'] = 'true';
        }
        else{
          $response['validate'] = 'false';
          $response['reason'] = "*Please enter valid email id and password";       
        }
    echo json_encode($response);
?>
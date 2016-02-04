<?php
session_start();
ob_start();
require_once "../dbinfo.php";
        
        $response = array();
        $username = $_POST['username'];                                                             
        $password = $_POST['password'];
        $encrypted_password = md5($password);
        //query to fetch id and email to set session and for successful login
        $query = "SELECT username,password FROM admin ";
        $result = mysqli_query($db,$query);
        if ($result and $row = mysqli_fetch_assoc($result)) 
        {
            if($username == $row['username'] && $encrypted_password == $row['password']){
                $response['validate'] = 'true';
            }
        }
        else{
          $response['validate'] = 'false';
          $response['reason'] = "*Please enter valid email id and password";       
        }
    echo json_encode($response);
?>
 
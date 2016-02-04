<?php
 $email = $_POST['email'];
 $response = array();
if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i', $email)) {
            $response['validate'] = 'false';
            $response['reason'] = "*Please check your email id."; 
}
else{
    $response['validate'] = 'true';
}
  echo json_encode($response);
    ?>
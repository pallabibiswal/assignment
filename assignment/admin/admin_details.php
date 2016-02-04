<?php
require_once "../dbinfo.php";
$username = "pallabi";
$password = "pallabi4321";
$encripted_password = md5($password);
echo $username,$password,$encripted_password;

$query = "INSERT INTO admin (username,password) VALUES ('$username','$encripted_password')";
$result = mysqli_query($db,$query);

?>

<?php
session_start();
//destroying session
session_unset();
session_destroy();
session_start();
$_SESSION['msg']=" You are successfully loged out.";
header("Location: login.php");

?>
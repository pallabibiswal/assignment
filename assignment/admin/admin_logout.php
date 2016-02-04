<?php
session_start();
//destroying session
session_unset();
session_destroy();
session_start();
header("Location: admin_login.php");

?>
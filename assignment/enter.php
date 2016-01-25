<?php
session_start();
require_once("header.php");
?>
<h1 align="center"> Welcome <?php echo $_SESSION['first']?> </h1>
<?php 
require_once("footer.php");
?>
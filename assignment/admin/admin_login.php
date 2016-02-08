<?php
/**
* File Doc Comment
*
* PHP version 5
*
* @category PHP
* @package  PHP_CodeSniffer
* @author   Mindfire Solutions <pallabi.biswal@mindfiresolutions.com>
* @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
* @link     http://www.mindfiresolutions.com
*/
session_start();
require_once "../dbinfo.php";
require_once "header.php";
if($_POST['signin']){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encripted_password = md5($password);
    $query = "SELECT pk_admin,username,password FROM admin";
    $result = mysqli_query($db,$query);
    while($row = mysqli_fetch_assoc($result)){
        $check = $row;
    }
    if($username == $check['username'] && $encripted_password == $check['password']){
        header("Location: admin_grid.php");
        $_SESSION['id'] = $check['pk_admin'];
    }
}
?>
</head>
<body>
<div class="brand">Mindfire Solutions</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <ul class="nav navbar-nav">
            </ul>
            </div>
        </div>
     <div class="top-content">
         <div class="inner-bg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 form-box">
                        <div class="form-top">
                        	<div class="form-top-left">
                        		<p>Admin Log in:</p>
                        	</div>
                        	<div class="form-top-right">
                        		<i class="fa fa-key"></i>
                        	</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="admin_login.php" method="post" class="login-form">
                                <div id = "login-error"></div>
			                    	<div class="form-group">
			                    		  <label class="sr-only" for="form-username">User Name</label>
			                        	<input type="text" placeholder="User name..." class="form-username form-control" id="username" name="username" value="<?php echo $_POST['username'];?>"/>
			                      </div>
			                      <div class="form-group">
                                <div id="password-error"></div>
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                    </div>
                          <div class="row">
                            <div class="col-md-8">
			                        <input type="submit" id = "signin" class="btn btn-lg btn-info" value="GO" name="signin" placeholder="GO!">
                            </div>
			                    </form>
		                    </div>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>
 <?php require_once "footer.php";
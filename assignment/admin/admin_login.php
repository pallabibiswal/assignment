<?php
session_start();
require_once "../dbinfo.php";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     <!--<script src="js/jquery.js"></script>
     <script src="admin/js/admin_login.js"></script>-->
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
 <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>


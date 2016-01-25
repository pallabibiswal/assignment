
<?php
session_start();
ob_start();


require_once("header.php");

$msg= $_SESSION['msg'];
echo "<center><strong>{$msg}</strong></center>";

$_SESSION['msg']=null;
require_once("dbinfo.php");


$v=$_POST['signin'];

if($v) {

  $first = $_POST['first'];                                                             
  $password = $_POST['password'];
  
  $q = "SELECT pk_users FROM users WHERE first='$first' AND password='$password' AND activate = '1'";
  $result = mysqli_query($db,$q);

  if ($result and $row = mysqli_fetch_assoc($result)) 
  {
    $_SESSION['id'] = $row['pk_users'];
    $_SESSION['first'] = $first;
    header("Location: profile.php");
  }
  else{
    echo "<center><strong>* Please give valid username and password AND make sure you are activated.</strong></center>";
  }
  
}

?>
    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			
                            		<p>Log in:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="login.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		  <label class="sr-only" for="form-username">Email id</label>
			                        	<input type="text" placeholder="Email id..." class="form-username form-control" id="form-username" name="first" value="<?php echo $_POST['first'];?>"/>
			                      </div>
			                      <div class="form-group">
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
			                      </div>
                          <div class="row">
                            <div class="col-md-8">
			                        <input type="submit" class="btn" value="signin" name="signin" placeholder="sign in!">
                            </div>
                            <div class="col-md-4">
                              <label><a href="forgot.php" align="right">Forgot Password</a></label>
                            </div>
			                    </form>
		                    </div>
                      </div>
                    </div>
                </div>
            </div>
            
        </div>

   <?php require_once("footer.php");?>

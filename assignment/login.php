<?php
session_start();
ob_start();
require_once("dbinfo.php");
require_once("header.php");

  $msg= $_SESSION['msg'];
  echo "<center><strong>{$msg}</strong></center>";
  $_SESSION['msg'] = null;

  $value = $_POST['signin'];
    if($value) {
        $email = $_POST['email'];                                                             
        $password = $_POST['password'];
        //query to fetch id and email to set session and for successful login
        $q = "SELECT pk_users FROM users WHERE email='$email' AND password='$password' AND activate = '1'";
        $result = mysqli_query($db,$q);
        if ($result and $row = mysqli_fetch_assoc($result)) 
        {
            $_SESSION['id'] = $row['pk_users'];
            $_SESSION['email'] = $email;
            header("Location: profile.php");
        }
        else{
          echo "<center><strong>* Please give valid email id and password AND make sure you are activated.</strong></center>";
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
			                        	<input type="text" placeholder="Email id..." class="form-username form-control" id="form-username" name="email" value="<?php echo $_POST['email'];?>"/>
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

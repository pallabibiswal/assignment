<?php
session_start();
ob_start();
require_once("dbinfo.php");
require_once("header.php");
  $msg= $_SESSION['msg'];
  echo "<center><strong>{$msg}</strong></center>";
  $_SESSION['msg'] = null;
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
                                <div id = "login-error"></div>
			                    	<div class="form-group">
			                    		  <label class="sr-only" for="form-username">Email id</label>
			                        	<input type="text" placeholder="Email id..." class="form-username form-control" id="email" name="email" value="<?php echo $_POST['email'];?>"/>
			                      </div>
			                      <div class="form-group">
                                <div id="password-error"></div>
			                        	<label class="sr-only" for="form-password">Password</label>
			                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
			                      </div>
                          <div class="row">
                            <div class="col-md-8">
			                        <input type="button" id = "signin" class="btn" value="signin" name="signin" placeholder="sign in!">
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

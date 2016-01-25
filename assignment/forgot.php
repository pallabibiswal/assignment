<?php
session_start();
require_once("header.php");
$msg= $_SESSION['msg'];
echo "<center><strong>{$msg}</strong></center>";

$_SESSION['msg']=null;
?>
 <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			
                            		<p>Enter your registered email id:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="getpassword.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Email id:</label>
			                        	<input type="text" placeholder="Email id..." class="form-username form-control" id="form-username" name="email" value="<?php echo $_POST['email'];?>"/>
			                        </div>
			                        <input type="submit" class="btn" value="Submit" name="signin" placeholder="click!"><br/>
                              
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            

<?php
require_once("footer.php");
?>

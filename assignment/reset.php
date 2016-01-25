<?php
session_start();
require_once("dbinfo.php");
require_once("header.php");

if($value=$_SESSION['id']){
	
	if($set=$_POST['reset']){
			//fetch password from database for matching
			$query = "SELECT password FROM users WHERE pk_users= '$value' ";
			$result = mysqli_query($db,$query);
			while ($row = mysqli_fetch_assoc($result)) {
					$profile=$row;
				}
				$old=$_POST['password'];
				if($old && (!strcmp($old,$profile))){
					$new = $_POST['new'];
					$renew = $_POST['renew'];
					
					$count = 0;//counter for validation

					  if (strlen($new) < 3 OR strlen($new) > 20) {
		                 $error = "<p><strong>*Password should be within 3-20 characters long.</strong></p>";
		                  echo "<center>{$error}</center>";  
		                    $count++;  
		       			}
		       		  if ($renew != $new) {
		                $error = "<p><strong>*Confirm password mismatch.</strong></p>";
		                 echo "<center>{$error}</center>"; 
		                   $count++;  
		      			}

		      		if($count==0){  //if no error then update password
					 $query  = "UPDATE users SET password='$new',repassword='$renew' WHERE pk_users='$value'";
					 $update=mysqli_query($db,$query);
					 if($update){
					 echo "<strong><center>*Your password has changed successfully.</center></strong>";
		      		}else{
		      			 echo "<strong><center>*Your password has not changed successfully..try again.</center></strong>";
		      		}
		      	}

				}
				else{
					echo "<strong><center>*Please give valid old password</center></strong>";
				}

			}
		}

?>
 <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			
                            		<p>Reset Password:</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="reset.php" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="form-username">Old password:</label>
			                        	<input type="password" placeholder="Old password..." class="form-username form-control" id="form-username" name="password"/>
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">New Password:</label>
			                        	<input type="password" name="new" placeholder="New Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <div class="form-group">
			                        	<label class="sr-only" for="form-password">Retype New Password:</label>
			                        	<input type="password" name="renew" placeholder="Retype New Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <input type="submit" class="btn" value="reset" name="reset" placeholder="Reset!"><br/>
                              
			                    </form>
		                    </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

   <?php require_once("footer.php");?>
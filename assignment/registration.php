<?php
//ini_set('display_errors','On');
//error_reporting(E_ALL);
session_start();                           
ob_start();
  require_once("dbinfo.php");
  require_once("header.php");
    if(isset($_POST['submit']))
  {
  //storing  field values

       $first      = trim($_POST['first']);
       $last       = trim($_POST['last']);
       $middle     = trim($_POST['middle']);
       $suffix     = trim($_POST['suffix']);
       $dob        = trim($_POST['dob']);
       $email      = trim($_POST['email']);
       $employement= trim($_POST['employement']);
       $employer   = trim($_POST['employer']);
       $gender     = trim($_POST['gender']);
       $status     = trim($_POST['status']);
       $rstreet    = trim($_POST['rstreet']);
       $rcity      = trim($_POST['rcity']);
       $rstate     = trim($_POST['rstate']);
       $rpin       = trim($_POST['rpin']);
       $rphone     = trim($_POST['rphone']);
       $rfax       = trim($_POST['rfax']);
       $ostreet    = trim($_POST['ostreet']);
       $ocity      = trim($_POST['ocity']);
       $ostate     = trim($_POST['ostate']);
       $opin       = trim($_POST['opin']);
       $ophone     = trim($_POST['ophone']);
       $ofax       = trim($_POST['ofax']);
       $password   = trim($_POST['password']);
       $repassword = trim($_POST['repassword']);
       $extra      = addslashes($_POST['extra']);
       $mail       = trim($_POST['mail']);
       $message    = trim($_POST['message']);
       $phonecall  = trim($_POST['phonecall']);

       $count=0;//counter for error checking
        //uploading file and validating 
      if ($_FILES['photo']['name']) {
       $target_dir = "/var/www/html/example/registration/image/$photo";
       $target_file = $target_dir . basename($_FILES["photo"]["name"]);
       $photo = basename($_FILES["photo"]["name"]);
       $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif" ){
          move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
        }
        else {
        echo "<center><strong>*File is not an image.</strong></center>";
        $count++;
        }
      }

    //validation of user input
       if (empty($first)) {
                $error = "<p><strong>*Give your first name</strong></p>";
                echo "<center>{$error}</center>"; 
                $count++;              
        } 
	     if (!preg_match("/^[a-zA-Z]*$/",$first)) {
                $error =  "<p><strong>* Only letters allowed in your first name.</strong></p>"; 
                  echo "<center>{$error}</center>";  
                   $count++;  
        }
        if (strlen($first) < 3 OR strlen($first) > 30) {
                $error = "<p><strong>*First name should be within 3-20 characters long.</strong></p>";
                 echo "<center>{$error}</center>"; 
                   $count++;  
        }
       if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
                $error ="<p><strong>*Only letters allowed in your last name</strong></p>"; 
                 echo "<center>{$error}</center>";  
                   $count++;  
        }
        if (strlen($last) < 3 OR strlen($last) > 30) {
                $error = "<p><strong>*Last name should be within 3-20 characters long.</strong></p>";
                 echo "<center>{$error}</center>"; 
                   $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/",$middle)) {
                $error =  "<p><strong>*Only letters allowed in your middle name</strong></p>"; 
                  echo "<center>{$error}</center>"; 
                   $count++;   
        }
        if (!preg_match("/^[a-zA-Z ]*$/",$suffix)) {
                $error ="<p><strong>*Only letters allowed in your suffix</strong></p>"; 
                  echo "<center>{$error}</center>"; 
                   $count++;  
        }
        if (!isset($dob)) {
                $error = "<p><strong>*Please enter your date of birth.</strong></p>";
                echo "<center>{$error}</center>"; 
                   $count++;   
        }
        if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i', $email)) {
                $error ="<p><strong>*That's not an email... (probably)</strong></p>";
                 echo "<center>{$error}</center>"; 
                    $count++;   
        }
        if (strlen($password) < 3 OR strlen($password) > 20) {
                 $error = "<p><strong>*Password should be within 3-20 characters long.</strong></p>";
                  echo "<center>{$error}</center>";  
                    $count++;  
        }
        if (!preg_match("/^[0-9]*$/",$ofax)) {
                $error ="<p><strong>*Only digits allowed in your office fax address</strong></p>"; 
                  echo "<center>{$error}</center>"; 
                   $count++;  
      }
      if (!preg_match("/^[0-9]*$/",$rfax)) {
                $error ="<p><strong>*Only digits allowed in your Residential fax address</strong></p>"; 
                  echo "<center>{$error}</center>"; 
                   $count++;  
      }
        if ($repassword != $password) {
                $error = "<p><strong>*Confirm password mismatch.</strong></p>";
                 echo "<center>{$error}</center>"; 
                   $count++;  
        }
	      if (!preg_match("/^[a-zA-Z ]*$/",$employer)) {
                $error ="<p><strong>*Only letters allowed in your employer field</strong></p>"; 
                 echo "<center>{$error}</center>"; 
                   $count++;  
        }
        
        if (strlen($rstreet) < 5 OR strlen($rstreet) > 200) {
                 $error = "<p><strong>* Residential street name should be within 5-30 characters long.</strong></p>";
                  echo "<center>{$error}</center>"; 
                    $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/",$rcity)) {
                 $error ="<p><strong>*Only letters allowed in your residential city name</strong></p>"; 
                   echo "<center>{$error}</center>"; 
                    $count++;  
        }
        if (strlen($rcity) < 5 OR strlen($rcity) > 30) {
                $error = "<p><strong>*Residential city name should be within 5-30 characters long.</strong></p>";
                  echo "<center>{$error}</center>"; 
                   $count++;  
        }
       
        if (strlen($ostreet) < 5 OR strlen($ostreet) > 200) {
                 $error = "<p> <strong>*office street name should be within 5-30 characters long.</strong></p>";
                  echo "<center>{$error}</center>"; 
                    $count++;   
        }
        if (!preg_match("/^[a-zA-Z ]*$/",$ocity)) {
                 $error ="<p><strong>*Only letters allowed in your office city name</strong></p>"; 
                   echo "<center>{$error}</center>"; 
                    $count++;  
        }
        if (strlen($ocity) < 5 OR strlen($ocity) > 30) {
                $error = "<p><strong>*Office city name should be within 5-30 characters long.</strong></p>";
               echo "<center>{$error}</center>"; 
                   $count++;  
        }
        if (!ctype_digit($rphone) OR strlen($rphone) != 10) {
                 $error = "<p><strong>*Enter a valid residential phone number.</strong></p>";
                   echo "<center>{$error}</center>"; 
                    $count++;   
        }
        if (!ctype_digit($ophone) OR strlen($ophone) != 10) {
                 $error = "<p><strong>*Enter a valid office phone number.</strong></p>";
                   echo "<center>{$error}</center>"; 
                       $count++;  
        }
       if (!ctype_digit($rpin)) {
                 $error = "<p><strong>*Enter a valid residential pin number.</strong></p>";
                    echo "<center>{$error}</center>"; 
                      $count++;  
        }
        
        if (!ctype_digit($opin)) {
                 $error = "<p><strong>*Enter a valid office pin number.</strong></p>";
                   echo "<center>{$error}</center>"; 
                    $count++;  
        }
      
        if (!preg_match("/^[a-zA-Z ]*$/",$rstate)) {
                 $error ="<p><strong>*Only letters allowed in your residential state name</strong></p>"; 
                   echo "<center>{$error}</center>"; 
                     $count++;  
        }
        if(strlen($rstate) < 3 OR strlen($rstate) > 30) {
                 $error = "<p><strong>* Residential state name should be within 3-30 characters long.</strong></p>";
                   echo "<center>{$error}</center>";  
                    $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/",$ostate)) {
                 $error ="<p><strong>*Only letters allowed in your office state name</strong></p>"; 
                   echo "<center>{$error}</center>"; 
                     $count++;   
        }
        if (strlen($ostate) < 3 OR strlen($ostate) > 30) {
                 $error = "<p><strong>*office city name should be within 3-30 characters long.</strong></p>";
                   echo "<center>{$error}</center>"; 
                    $count++;  
        } 
   	    $value = "SELECT pk_users FROM users WHERE email='$email'";    
        $in = mysqli_query($db,$value);
        if($in && mysqli_fetch_assoc($in)){
     			$error ="<p><strong>*That email id is already exist</strong></p>";
                echo "<center>{$error}</center>"; 
                   $count++; 
        }
     //insert into database
        if($count==0){
          
          $query = "INSERT INTO users ";
          $query .= "(first,last,middle,suffix,dob,email,employement,employer,gender,status,";
          $query .= "photo,rstreet,rcity,rstate,rpin,rphone,rfax,ostreet,ocity,ostate,opin,ophone,ofax,password,repassword,extra,mail,message,phonecall)";
          $query .=" VALUES ('$first', '$last', '$middle','$suffix','$dob','$email',";
          $query .="'$employement','$employer','$gender', '$status', '$photo','$rstreet','$rcity','$rstate',";
          $query .="'$rpin','$rphone','$rfax','$ostreet','$ocity','$ostate','$opin','$ophone','$ofax','$password','$repassword',";
          $query .="'$extra','$mail','$message','$phonecall')";
         $val=mysqli_query($db, $query);
         $sel= "SELECT pk_users FROM users WHERE email='$email'";
         $result = mysqli_query($db, $sel);
         if ($result && $row = mysqli_fetch_assoc($result)) {
                  $pk = $row['pk_users'];
                 $key = md5($pk);
                 $query_update = "UPDATE users SET activatekey = '$key' WHERE pk_users = '$pk'";//update key for email verification
                 $res = mysqli_query($db,$query_update);
                $_SESSION['id'] = $pk;  
                $_SESSION['key'] = $key;          
                header("Location: email.php");//edit
            
          } else {
             echo "Error: " . $q . "<br>" . mysqli_error($db);
          } 
       }
    }
?>
<body>
	<div class="container">
    <div>
			<h1 class="well cen">Registration Form</h1>
    </div>
			<div class="col-lg-12 well">
				<div class="row">
					<form action="registration.php" method='post' enctype="multipart/form-data" name = 'validate_form'>
						<div class="col-sm-12">
							<div class="row">
              <div class = "row">
								<div class="col-sm-3 form-group">
									<label>First Name</label>
									<input type="text" id="first_input" placeholder="Enter first name" class="form-control" name='first' value="<?php echo $_POST['first']; ?> "/>
								  <div id="first_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Last Name</label>
									<input type="text" id="last_input" placeholder="Enter last name" class="form-control" name="last" value="<?php echo $_POST['last']; ?> ">
								  <div id="last_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Middle Name</label>
									<input type="text" id = "middle_input" placeholder="Enter middle name" class="form-control" name="middle" value="<?php echo $_POST['middle']; ?> ">
								  <div id="middle_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Suffix</label>
									<input type="text" id ="suffix_input" placeholder="Enter suffix" class="form-control" name="suffix" value="<?php echo $_POST['suffix']; ?> ">
								  <div id="suffix_error"></div>
                </div>
              </div>
              <div class = "row">
                <div class="col-sm-3 form-group">
									<label>Employement:</label>
      							<select class="form-control" name="employement">
        							<option name="student" value="student">Student</option>
        							<option name="employed" value="employed">Employee</option>
        							<option name="unemployed" value="unemployed">Unemployed</option>
        							<option name="other" value="other">Other</option>
      							</select>
								</div>
								<div class="col-sm-3 form-group">
									<label>Employer</label>
									<input type="text" id="employer_input" placeholder="Employer" class="form-control" name="employer" value="<?php echo $_POST['employer']; ?> ">
								  <div id="employer_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Date Of Birth</label>
									<input type="date" id= "dob_input" placeholder="Date Of Birth" class="form-control" name="dob">
								  <div id="dob_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Email</label>
									<input type="text" id="email_input" placeholder="Enter Email" class="form-control" name="email" value="<?php echo $_POST['email']; ?> ">
								  <div id="email_error"></div>
                </div>
              </div>
              <div class = "row">             
                <div class="col-sm-6 form-group">
                  <label>Gender:</label>
								  <div class="radio-inline">
     			 					<label><input type="radio" name="gender" value="male" checked/>Male</label>
   		 						</div>
   		 						<div class="radio-inline">
      							<label><input type="radio" name="gender" value="female"/>Female</label>
      						</div>
								</div>
                            
                <div class="col-sm-6 form-group">
    								<label>Marital status:</label>
									<div class="radio-inline">
     			 					<label><input type="radio" name="status" value="married" checked/>Married</label>
   		 						</div>
   		 						<div class="radio-inline">
      							<label><input type="radio" name="status" value="unmarried" />Unmarried</label>
    							</div>
								</div>
              </div>

              <div class="row">
								<div class="col-sm-6">
										<label><h4>Residential Address</h4></label>	
	                  <div class="row">
                    <div class="col-sm-3 form-group">
										  <label>Street:</label>
									  </div>
									  <div class="col-sm-9">
										  <input type="text" id="rstreet_input" placeholder="street" name="rstreet" value="<?php echo $_POST['rstreet']; ?> "/>
									    <div id="rstreet_error"></div>
                    </div> 
									</div>
									<div class="row">
									  <div class="col-sm-3 form-group">
										  <label>City:</label>
									  </div>
									  <div class="col-sm-9">
										  <input type="text" id="rcity_input" placeholder="city" name="rcity" value="<?php echo $_POST['rcity']; ?> "/>
									    <div id="rcity_error"></div>
                    </div>
									</div>
									<div class="row">
									  <div class="col-sm-3 form-group">
										  <label>State:</label>
									  </div>
									  <div class="col-sm-9">
										  <input type="text" id="rstate_input" placeholder="state" name="rstate" value="<?php echo $_POST['rstate']; ?> "/>
									    <div id="rstate_error"></div>
                    </div> 
									</div>
									<div class="row">
									  <div class="col-sm-3 form-group">
										  <label>Pin:</label>
									  </div>
									  <div class="col-sm-9">
										  <input type="text" id="rpin_input" placeholder="pin" name="rpin" value="<?php echo $_POST['rpin']; ?> "/>
									    <div id="rpin_error"></div>
                    </div> 
									</div>
									<div class="row">
									  <div class="col-sm-3 form-group">
										  <label>Phone:</label>
									  </div>
									  <div class="col-sm-9">
										  <input type="text" id="rphone_input" placeholder="phone" name="rphone" value="<?php echo $_POST['rphone']; ?> "/>
									    <div id="rphone_error"></div>
                    </div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="rfax_input" placeholder="fax" name="rfax" value="<?php echo $_POST['rfax']; ?> "/>
									  <div id="rfax_error"></div>
                  </div>
									</div>
								</div>


								<div class="col-sm-6">	
										<label><h4>Office Address</h4></label>	
                  <div class="row">
                  <div class="col-sm-3 form-group">
										<label>Street:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="ostreet_input" placeholder="street" name="ostreet" value="<?php echo $_POST['ostreet']; ?> "/>
									  <div id="ostreet_error"></div>
                  </div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="ocity_input" placeholder="city" name="ocity" value="<?php echo $_POST['ocity']; ?> "/>
									  <div id="ocity_error"></div>
                  </div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="ostate_input" placeholder="state" name="ostate" value="<?php echo $_POST['ostate']; ?> "/>
									  <div id="ostate_error"></div>
                  </div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="opin_input" placeholder="pin" name="opin" value="<?php echo $_POST['opin']; ?> "/>
									  <div id="opin_error"></div>
                  </div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="ophone_input" placeholder="phone" name="ophone" value="<?php echo $_POST['ophone']; ?> "/>
									   <div id="ophone_error"></div>
                  </div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" id="ofax_input" placeholder="fax" name="ofax" value="<?php echo $_POST['ofax']; ?> "/>
									  <div id="ofax_error"></div>
                  </div>
									</div>
								</div>
                </div><br/><br/><br/>
                <div class="row">
                  <div class="col-md-12">
                    <div class="col-md-6">
                      <div class="row">
											  <div class="col-md-3 form-group">
												  <label>Password:</label>
											  </div>
											  <div class="col-md-9">
												  <input id='password_input' type="password" placeholder='type..' name="password" >
											    <div id="password_error"></div>
                        </div>
									    </div>
                      <div class="row">
											  <div class="col-md-3 form-group">
												  <label>Re type Password:</label>
											  </div>
											    <div class="col-md-9">
												    <input type="password" placeholder="retype.." name="repassword" id="repassword_input"/>
											    <div id="repassword_error"></div>
                      </div>
										</div>
									</div><br/>
									<div class="col-md-6">
										<div class="col-md-12">
                      <div class="col-md-3">
                        <label>Select photo:</label>
                      </div>
                      <div class="col-md-9">	 
                        <input type="file" name="photo" id="photo" accept="image/x-png, image/gif, image/jpeg"/>
                      </div>
                    </div>
									</div>
								</div>
              </div> <br/><br/>
              <div class="row">
                <div class="col-md-12">
                  <div class="col-md-3">
                    <label>Extra Note:</label>
                  </div>
                  <div class="col-md-9">	
                    <textarea rows="5" id="extra" name="extra" value="<?php echo $_POST['extra']; ?> "></textarea>
                  </div>
                </div>
              </div><br/><br/>
							<div>
								<label>Communication Medium:</label><br/>
							  <div class="checkbox-inline">
      						<label><input type="checkbox" name="mail" value="mail" checked>mail</label>
    						</div>
    						<div class="checkbox-inline">
      						<label><input type="checkbox" name="message" value="message"/>message</label>
   					 		</div>
    						<div class="checkbox-inline">
     						 	<label><input type="checkbox" name="phonecall" value="phonecall"/>Phone call</label>
    						</div>
							</div><br/><br/>
			
							<div class="col-md-12">
								<input type="submit" id='submit' class="btn btn-lg btn-info submit_button" name='submit' value="submit" >
							</div>
								
						</div>
					</form> 
				</div>
			</div>
		</div> 
<?php
require_once("footer.php");
?>

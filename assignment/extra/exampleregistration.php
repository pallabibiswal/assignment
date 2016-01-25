<?php
ini_set('error_reporting', E_ALL|E_STRICT);
ini_set('display_errors', 1);



	require_once("dbinfo.php");
	
	/*echo '<pre>';
	print_r($_POST);
	echo '</pre>';*/

if(isset($_POST['submit']))
{
		

  //storing the field values

       $first=trim($_POST['first']);
       $last=trim($_POST['last']);
       $middle = trim($_POST['middle']);
       $suffix = trim($_POST['suffix']);
       $dob =trim($_POST['dob']);
       $email=trim($_POST['email']);
       $employement= trim($_POST['employement']);
       $employer=trim($_POST['employer']);
       $gender = trim($_POST['gender']);
       $status = trim($_POST['status']);
       $photo=trim($_POST['photo']);
       $rstreet=trim($_POST['rstreet']);
       $rcity = trim($_POST['rcity']);
       $rstate = trim($_POST['rstate']);
       $rpin=trim($_POST['rpin']);
       $rphone= trim($_POST['rphone']);
       $rfax= trim($_POST['rfax']);
       $ostreet = trim($_POST['ostreet']);
       $ocity = trim($_POST['ocity']);
       $ostate = trim($_POST['ostate']);
       $opin=trim($_POST['opin']);
       $ophone= trim($_POST['ophone']);
       $ofax= trim($_POST['ofax']);
       $password=trim($_POST['password']);
       $repassword=trim($_POST['repassword']);
       $extra = trim($_POST['extra']);
       $mail=trim($_POST['mail']);
       $message= trim($_POST['message']);
       $phonecall=trim($_POST['phonecall']);

  //validation of user input
 		
 	$count=0;//counter for error checking
    


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
     if (strlen($suffix) < 3 OR strlen($suffix) > 30) {
                $error = "<p><strong>*Last name should be within 3-20 characters long.</strong></p>";
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
     
     if (!preg_match("/^[a-zA-Z ]*$/",$rstreet)) {
                $error ="<p><strong>*Only letters allowed in your residential street name</strong></p>"; 
                echo "<center>{$error}</center>"; ; 
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

     if (!preg_match("/^[a-zA-Z ]*$/",$ostreet)) {
                $error ="<p><strong>*Only letters allowed in your office street name</strong></p>"; 
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
     if (!ctype_digit($ofax)) {
                $error = "<p><strong>*Enter a valid office fax number.</strong></p>";
                 echo "<center>{$error}</center>";  
                   $count++;  
    }
     if (!ctype_digit($rfax)) {
                 $error = "<p><strong>*Enter a valid residential fax number.</strong></p>";
                   echo "<center>{$error}</center>"; ; 
                    $count++;  
    }
     if (!ctype_digit($opin)) {
                 $error = "<p><strong>*Enter a valid office pin number.</strong></p>";
                   echo "<center>{$error}</center>"; 
                    $count++;  
    }
    if (strlen($extra)==0 OR strlen($extra)>250) {
                 $error = "<p><strong>*Please write something about you in extra field withing 240 characters.</strong></p>";
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

     //insert into database
    if($count==0){
          
          $q = "INSERT INTO users ";
          $q .= "(first,last,middle,suffix,dob,email,employement,employer,gender,status,";
          $q .= "photo,rstreet,rcity,rstate,rpin,rphone,rfax,ostreet,ocity,ostate,opin,ophone,ofax,password,repassword,extra,mail,message,phonecall)";
          $q .=" VALUES ('$first', '$last', '$middle','$suffix','$dob','$email',";
          $q .="'$employement','$employer','$gender', '$status', '$photo','$rstreet','$rcity','$rstate',";
          $q .="'$rpin','$rphone','$rfax','$ostreet','$ocity','$ostate','$opin','$ophone','$ofax','$password','$repassword',";
          $q .="'$extra','$mail','$message','$phonecall')";
         
         if (mysqli_query($db, $q)) {
              echo "New record created successfully";
              header("Location: login.php");
          } else {
             echo "Error: " . $q . "<br>" . mysqli_error($db);
          }
     }


}
else{
    
    echo "<strong><center>Please click on submit...</center></strong> ";

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <!--<meta name="robots" content="noindex">-->

    <title>Registration Form</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
    <link type="text/css" rel="stylesheet" href="registrationstyle.css"/>
   	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>


</head>

<body>
	<div class="container">
    	<h1 class="well cen">Registration Form</h1>
			<div class="col-lg-12 well">
				
				<div class="row">
					<form action="exampleregistration.php" method="POST">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-3 form-group">
									<label>First Name</label>
									<input type="text" placeholder="Enter first name" class="form-control" name="first">
								</div>
								<div class="col-sm-3 form-group">
									<label>Last Name</label>
									<input type="text" placeholder="Enter last name" class="form-control" name="last"></p></br>
								</div>
								<div class="col-sm-3 form-group">
									<label>Middle Name</label>
									<input type="text" placeholder="Enter middle name" class="form-control" name="middle">
								</div>
								<div class="col-sm-3 form-group">
									<label>Suffix</label>
									<input type="text" placeholder="Enter suffix" class="form-control" name="suffix"></p></br>
								</div>


								
								<div class="col-sm-3 form-group">
									 <label>Employement:</label>
      									<select class="form-control" name="employement">
        									<option name="student" value="student">Student</option>
        									<option name="employed" value="employed">Employed</option>
        									<option name="unemployed" value="unemployed">Unemployed</option>
        									<option name="other" value="other">Other</option>
      									</select>
								</div>
								<div class="col-sm-3 form-group">
									<label>Employer</label>
									<input type="text" placeholder="Employer" class="form-control" name="Employer"></p></br>
								</div>
								<div class="col-sm-3 form-group">
									<label>Date Of Birth</label>
									<input type="date" placeholder="Date Of Birth" class="form-control" name="dob">
								</div>
								<div class="col-sm-3 form-group">
									<label>Email</label>
									<input type="text" placeholder="Enter Email" class="form-control" name="email"></p></br>
								</div>
                            
                            
                            
                            
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
									
									<div class="col-sm-12 res">
										<label>Residential Address</label>	
									</div>
                        			<div class="row">
                        			<div class="col-sm-3 form-group">
										<label>Street:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="street" name="rstreet"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="city" name="rcity"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="state" name="rstate"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="pin" name="rpin"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="phone" name="rphone"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="fax" name="rfax"/>
									</div>
									</div>
								</div>


								<div class="col-sm-6">
									
									<div class="col-sm-12 off">
										<label>Office Address</label>	
									</div>
                        			<div class="row">
                        			<div class="col-sm-3 form-group">
										<label>Street:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="street" name="ostreet"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="city" name="ocity"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="state" name="ostate"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="pin" name="opin"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="phone" name="ophone"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="fax" name="ofax"/>
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
												<input type="password" placeholder="type.." name="password"/>
											</div>
										</div>
                            			<div class="row">
											<div class="col-md-3 form-group">
												<label>Re type Password:</label>
											</div>
											<div class="col-md-9">
												<input type="password" placeholder="retype.." name="repassword"/>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<div class="col-md-10">
                            				<div class="col-md-4">
                            					<label>Select photo:</label>
                            				</div>
                            				<div class="col-md-6">	 
                            					<input type="file" name="photo" multiple/>
                            				</div>
                            			</div>
									</div>
								</div>
                            </div>  	
                            <br/><br/>
                            <div class="row">
                            	<div class="col-md-10">
                            		<div class="col-md-4">
                            		<label>Extra Note:</label>
                            		</div>
                            		<div class="col-md-6">	 
                            		<textarea rows="5" id="extra" name="extra"></textarea>
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
			
							<div class="col-md-12 b1">
								<button type="submit" class="btn btn-lg btn-info" name="submit" value="submit">Submit</button>					
							</div>
								
						</div>
					</form> 
				</div>
			</div>
		</div>

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
    <!--<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    
    
</body>
</html>

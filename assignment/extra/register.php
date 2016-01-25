<?php
ini_set('error_reporting', E_ALL|E_STRICT);
ini_set('display_errors', 1);



	require_once("dbinfo.php");
	require_once("connection.php");
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
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
					<form action="registration.php" method="POST">
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

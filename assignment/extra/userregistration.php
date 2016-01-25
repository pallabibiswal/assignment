<?php
	//require("connection.php");
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
?>

<!DOCTYPE html>
<html lang="en">
  
  
  <head>
    <meta charset="utf-8"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="registrationstyle.css"/>
    <title>Registration Form</title>
   </head>
   
   
   <body>
	
	<div class="container">
     
        <div class="jumbotron">
	      	<h2>USER REGISTRATION FORM</h2>
	   	</div>
	   

	  <form action="userregistration.php" method="POST">
	   	<div class="form-group">
			
			<div class="jumbotron">
                <label class="control-label col-sm-2">First name:</label>
     		  	<div class="col-sm-10">
       			 	<input type="text" class="form-control" id="first" name="first" placeholder="Enter first name"/>
      		  	</div><br/><br/>
		  		<label class="control-label col-sm-2">Last name:</label>
     		  	<div class="col-sm-10">
       			 	<input type="text" class="form-control" id="last" name="last" placeholder="Enter last name"/>
      		  	</div><br/><br/>
		  		<label class="control-label col-sm-2">Middle name:</label>
     		  	<div class="col-sm-10">
       			 	<input type="text" class="form-control" id="middle" name="middle" placeholder="Enter middle name"/>
      		  	</div><br/><br/>
		   		<label class="control-label col-sm-2">Suffix:</label>
     		   	<div class="col-sm-10">
       			 	<input type="text" class="form-control" id="suffix" name="suffix" placeholder="Add suffix"/>
      		  	</div><br/><br/>
		  		<label class="control-label col-sm-2">Date of Birth:</label>
 		  		<div class="col-sm-10">
                    <input type="date" class="form-control"  name="dob"/>
		  		</div><br/><br/>
		  		<label class="control-label col-sm-2">Email id:</label>
 		  		<div class="col-sm-10">
                    <input type="text" class="form-control"  name="email" placeholder="Enter email id" />
		  		</div><br/><br/>
			</div>
		
		 	<div class="jumbotron">
		  		
		  		<label>Employement:</label>
      				<select class="form-contrl" id="employement" name="employement">
        				<option name="student" value="student">student</option>
        				<option name="working" value="working">working</option>
        				<option name="other" value="other">other</option>
      				</select><br><br>
		 		
		 		<label>Gender:</label>
				<div>
     			 	<label><input type="radio" name="gender" value="male" checked/>Male</label>
   		 		</div>
   		 		<div class="radio-inline">
      				<label><input type="radio" name="gender" value="female"/>Female</label>
      			</div>
      			<div class="radio-inline">
      				<label><input type="radio" name="gender" value="other"/>Other</label>
    			</div><br/><br/>
	          	
	          	<label>Marital status:</label>
				<div class="radio-inline">
     			 	<label><input type="radio" name="status" value="married" checked/>Married</label>
   		 		</div>
   		 		<div class="radio-inline">
      				<label><input type="radio" name="status" value="unmarried" />Unmarried</label>
    			</div>
				<div class="radio-inline">
      				<label><input type="radio" name="status" value="other"/>Other</label>
    			</div><br/><br/>
		    
		    	<label>Select photo: <input type="file" name="photo" multiple/></label>
		  	</div>
		  	
		  	<div class="jumbotron">
				
				<h4>Residential Address</h4>
					<div class="add">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Street:</label>
								<input type="text" placeholder="street" name="rstreet"/>
							</div> 
						
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>City:</label>
								<input type="text" placeholder="city" name="rcity"/>
							</div>
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>State:</label>
								<input type="text" placeholder="state" name="rstate"/>
							</div> 
						
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Pin:</label>
								<input type="text" placeholder="pin" name="rpin"/>
							</div> 
						
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Phone(home/cell):</label>
								<input type="text" placeholder="phone" name="rphone"/>
							</div>
						</div>
					</div><br/><br/>
				
				<h4>Office Address</h4>
					<div class="add">
						<div class="row">
							
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Street</label>
								<input type="text" placeholder="street" name="ostreet"/>
							</div> 
					
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>City</label>
								<input type="text" placeholder="city" name="ocity"/>
							</div> 
					
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>State</label>
								<input type="text" placeholder="state" name="ostate"/>
							</div> 
					
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Pin</label>
								<input type="text" placeholder="pin" name="opin"/>
							</div> 
					
							<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
								<label>Phone(home/cell):</label>
								<input type="text" placeholder="phone" name="ophone"/>
							</div>
						</div>
					</div><br/><br/>
				 
					<div>
  						<label>Extra Note:</label><br/><br/>
  						<textarea rows="5" id="extra" name="extra" cols="120" ></textarea>
					</div><br/><br/>
				
				<div>
					<label>Communication Medium:</label><br/>
						<div class="checkbox-inline">
      						<label><input type="checkbox" name="mail" value="mail">mail</label>
    					</div>
    					<div class="checkbox-inline">
      						<label><input type="checkbox" name="message" value="message"/>message</label>
   					 	</div>
    					<div class="checkbox-inline">
     						 <label><input type="checkbox" name="phonecall" value="phonecall"/>Phone call</label>
    					</div>
				</div><br/><br/>
			
				<div>
      				<button type="submit" class="btn btn-default" name="submit">Submit</button>
   				</div>
			
			</div>
		</div>
	</div>
		
   </div>	
  </form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
   </body>
</html>
<?php
	mysqli_close($connection);
?>

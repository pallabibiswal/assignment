<?php

session_start();


require_once("dbinfo.php");
require_once("header.php");




if ($value=$_SESSION['id']) {//added

		                
      
		$q = "SELECT * FROM users WHERE pk_users='$value'";
		$result = mysqli_query($db, $q);
		while ($row = mysqli_fetch_assoc($result)) {
			$profile = $row;
		}


		if(!empty($profile['mail'])){
			$medium = $profile['mail'];
		}
		if(!empty($profile['message'])){
			$medium .="/";
			$medium .=$profile['message'];
		}
		if(!empty($profile['phonecall'])){
			$medium .="/";
			$medium .=$profile['phonecall'];
		}

	


	if($up=$_POST['update']){			//if update button is clicked

		//print_r($_POST);

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
       //$photo=$_FILES['photo'];
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
       $extra = addslashes($_POST['extra']);

      $count=0;
      if($_FILES["photo"]["name"]){
      $target_dir = "/var/www/html/example/registration/image/$photo";
      $target_file = $target_dir . basename($_FILES["photo"]["name"]);
      $photo = basename($_FILES["photo"]["name"]);
       move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);
      }
      else{
      echo "<center><strong>*Please uplaod a photo.</strong></center>";
        $count++;
      }
     

  // validation

     		
 	//counter for error checking
    


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
    /* if (strlen($suffix) < 3 OR strlen($suffix) > 30) {
                $error = "<p><strong>*Last name should be within 3-20 characters long.</strong></p>";
                echo "<center>{$error}</center>"; 
                   $count++;   
      }*/
      if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i', $email)) {
                $error ="<p><strong>*That's not an email... (probably)</strong></p>";
                 echo "<center>{$error}</center>"; 
                    $count++;   
       }
       if (!preg_match("/^[a-zA-Z ]*$/",$employer)) {
                $error ="<p><strong>*Only letters allowed in your employer field</strong></p>"; 
                 echo "<center>{$error}</center>"; 
                   $count++;  
      }
     
    /* if (!preg_match("/^[a-zA-Z ]*$/",$rstreet)) {
                $error ="<p><strong>*Only letters allowed in your residential street name</strong></p>"; 
                echo "<center>{$error}</center>"; ; 
                   $count++;  
      }*/
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

     /*if (!preg_match("/^[a-zA-Z ]*$/",$ostreet)) {
                $error ="<p><strong>*Only letters allowed in your office street name</strong></p>"; 
                  echo "<center>{$error}</center>"; 
                   $count++;  
      }*/
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
    /* if (!ctype_digit($rpin)) {
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
    }*/
    /*if (strlen($extra)==0 OR strlen($extra)>250) {
                 $error = "<p><strong>*Please write something about you in extra field withing 240 characters.</strong></p>";
                   echo "<center>{$error}</center>"; 
                    $count++;  
    }*/
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
    $que = "SELECT pk_users FROM users WHERE email='$email' AND pk_users = '$value'";    
    $in = mysqli_query($db,$value);
    if($in && mysqli_fetch_assoc($in)){
     			$error ="<p><strong>*That email id is already exist</strong></p>";
                echo "<center>{$error}</center>"; 
                   $count++; 
       } 


     if($count==0){


       $query  = "UPDATE users SET first='$first',last='$last',middle='$middle',suffix='$suffix',dob='$dob',email='$email',";
       $query .="employement ='$employement',employer ='$employer',gender ='$gender',status ='$status',photo ='$photo',";
       $query .="rstreet ='$rstreet',rcity ='$rcity',rstate ='$rstate', rpin='$rpin',rphone ='$rphone',rfax ='$rfax',";
       $query .="ostreet ='$ostreet',ocity ='$ocity',ostate ='$ostate', opin='$opin',ophone ='$ophone',ofax ='$ofax',";
       $query.="extra ='$extra' WHERE pk_users='$value'";

     

       mysqli_query($db,$query);
      	header("Location: profile.php");//edit
      }  
 	
	}

}else{
  header("Location: login.php");
}


function displayVal($field,$profile){
  if(isset($_POST[$field])){ 
    echo $_POST[$field];
  } else {
    echo $profile [$field];   
  }
}

?>


<body>
	<div class="container">
    	<div>
			<h1 class="well cen">Update Data</h1>
    	</div>
			<div class="col-lg-12 well">
				
				<div class="row">
					<form action="update.php" method="POST" enctype="multipart/form-data">
						<div class="col-sm-12">
							<div class="row">
								<div class="col-sm-3 form-group">
									<label>First Name</label>
									<input type="text" class="form-control" name="first" value="<?php displayVal("first",$profile); ?>"/>
								</div>
								<div class="col-sm-3 form-group">
									<label>Last Name</label>
									<input type="text" class="form-control" name="last" value="<?php displayVal("last",$profile); ?>"/></p></br>
								</div>
								<div class="col-sm-3 form-group">
									<label>Middle Name</label>
									<input type="text" class="form-control" name="middle" value="<?php displayVal("middle",$profile); ?>" />
								</div>
								<div class="col-sm-3 form-group">
									<label>Suffix</label>
									<input type="text"  class="form-control" name="suffix" value="<?php displayVal("suffix",$profile); ?>" /></p></br>
								</div>


								
								<div class="col-sm-3 form-group">
									 <label>Employement:</label>
      								 <input type="text"  class="form-control" name="employement" value="<?php displayVal("employement",$profile); ?>" /></p></br>	
								</div>
								<div class="col-sm-3 form-group">
									<label>Employer</label>
									<input type="text"  class="form-control" name="employer" value="<?php displayVal("employer",$profile); ?>" /></p></br>
								</div>
								<div class="col-sm-3 form-group">
									<label>Date Of Birth</label>
									<input type="date" class="form-control" name="dob" value="<?php displayVal("dob",$profile); ?>"/ >
								</div>
								<div class="col-sm-3 form-group">
									<label>Email</label>
									<input type="text"  class="form-control" name="email" value="<?php displayVal("email",$profile); ?>"></p></br>
								</div>
                            
                            
                            
                            
                <div class="col-sm-6 form-group">
                  <label>Gender:</label>
									<input type="text"  class="form-control" name="gender" value="<?php displayVal("gender",$profile); ?>"/></p></br>
								</div>
                            
                  <div class="col-sm-6 form-group">
    								<label>Marital status:</label>
									<input type="text"  class="form-control" name="status" value="<?php displayVal("status",$profile); ?>"/></p></br>
								</div>
              </div>

              <div class="row">
								<div class="col-sm-6">
                  <!--<div class="col-sm-12 res">-->
										<label><h3>Residential Address</h3></label>	
									<!--</div>-->
                  <div class="row">
                    <div class="col-sm-3 form-group">
										<label>Street:</label>
									 </div>
									<div class="col-sm-9">
										<input type="text" placeholder="street" name="rstreet" value="<?php displayVal("rstreet",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="city" name="rcity" value="<?php displayVal("rcity",$profile); ?>"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="state" name="rstate" value="<?php displayVal("rstate",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="pin" name="rpin" value="<?php displayVal("rpin",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="phone" name="rphone" value="<?php displayVal("rphone",$profile); ?>"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="fax" name="rfax" value="<?php displayVal("rfax",$profile); ?>"/>
									</div>
									</div>
								</div>


								<div class="col-sm-6">
									<!--<div class="col-sm-12 off">-->
										<label><h3>Office Address</h3></label></label>	
									<!--</div>-->
                <div class="row">
                  <div class="col-sm-3 form-group">
										<label>Street:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="street" name="ostreet" value="<?php displayVal("ostreet",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="city" name="ocity" value="<?php displayVal("ocity",$profile); ?>"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="state" name="ostate" value="<?php displayVal("ostate",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="pin" name="opin" value="<?php displayVal("opin",$profile); ?>"/>
									</div> 
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="phone" name="ophone" value="<?php displayVal("ophone",$profile); ?>"/>
									</div>
									</div>
									<div class="row">
									<div class="col-sm-3 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-9">
										<input type="text" placeholder="fax" name="ofax" value="<?php displayVal("ofax",$profile); ?>"/>
									</div>
									</div>
								</div>
              </div><br/><br/><br/>
                            
              <div class="row">
                  <div class="col-md-6">
                      <div class="col-md-3">
                          <label>Extra Note:</label>
                      </div>
                      <div class="col-md-10">	 
                          <input type="text"  id="extra" name="extra" value="<?php displayVal("extra",$profile); ?>"/>
                      </div>
                    </div>
                    <div class="col-md-6">
                       <div class="col-md-3">
                          <label>Select photo:</label>
                        </div>
                        <div class="col-md-9">
                          <img width="130" height="140" src="image/<?php echo $profile['photo']; ?>"/><br/>	 
                          <input type="file" name="photo" value="<?php echo $profile['photo']; ?>"/>
                        </div>
                      </div>
              </div><br/><br/>
			
							<div class="col-md-12">
								<input type="submit" class="btn btn-lg btn-info " name="update" value="Update"/>					
							</div>
								
						</div>
					</form> 
				</div>
			</div>
		</div>
    
<?php
require_once("footer.php");
?>
  				



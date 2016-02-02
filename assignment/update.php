<?php
session_start();
//adding files of headers and database connectivity
require_once("dbinfo.php");
require_once("header.php");

if ($value=$_SESSION['id']) {//checking session id
     
      //fetching data from the database
		$q = "SELECT * FROM users WHERE pk_users='$value'";
		$result = mysqli_query($db, $q);
		while ($row = mysqli_fetch_assoc($result)) {
			$profile = $row;
		}
   
    //code for fetching data of check box area
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

	//if update button is clicked
	if($up=$_POST['update']){			

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

      $count = 0;   //counter for error checking
     
     if($_FILES["photo"]["name"]){
           $target_dir = "/var/www/html/project/assignment/image/$photo";
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
    else{
      $photo = $profile['photo'];
    }

      // validation

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
         if (!isset($dob)){
                    $error = "<p><strong>*Please enter your date of birth.</strong></p>";
                    echo "<center>{$error}</center>"; 
                       $count++;   
          }
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
        $que = "SELECT pk_users FROM users WHERE email='$email' AND pk_users = '$value'";    
        $in = mysqli_query($db,$value);
        if($in && mysqli_fetch_assoc($in)){
         	$error ="<p><strong>*That email id is already exist</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++; 
        } 

     //update in database if there are no errors
     if($count==0){
       $query  = "UPDATE users SET first='$first',last='$last',middle='$middle',suffix='$suffix',dob='$dob',email='$email',";
       $query .="employement ='$employement',employer ='$employer',gender ='$gender',status ='$status',photo ='$photo',";
       $query .="rstreet ='$rstreet',rcity ='$rcity',rstate ='$rstate', rpin='$rpin',rphone ='$rphone',rfax ='$rfax',";
       $query .="ostreet ='$ostreet',ocity ='$ocity',ostate ='$ostate', opin='$opin',ophone ='$ophone',ofax ='$ofax',";
       $query.="extra ='$extra' WHERE pk_users='$value'";
        mysqli_query($db,$query);
        $_SESSION['msg'] = "Your profile details are updated.";
      	header("Location: profile.php");//edit
      }  
 	
	}

}else{
  header("Location: login.php");
}

//method for displaying value
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
				<form action="update.php" method="post" enctype="multipart/form-data" name = "validate_form">
					<div class="col-sm-12">
						<div class="row">
              <div class ="row">
								<div class="col-sm-3 form-group">
									<label>First Name</label>
									<input type="text" id="first_input" class="form-control" name="first" value="<?php displayVal("first",$profile); ?>"/>
								  <div id="first_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Last Name</label>
									<input type="text" id="last_input" class="form-control" name="last" value="<?php displayVal("last",$profile); ?>"/>
								  <div id="last_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Middle Name</label>
									<input type="text" id="middle_input" class="form-control" name="middle" value="<?php displayVal("middle",$profile); ?>" />
								  <div id="middle_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Suffix</label>
									<input type="text" id="suffix_input" class="form-control" name="suffix" value="<?php displayVal("suffix",$profile); ?>" />
								  <div id="suffix_error"></div>
                </div>
              </div>
              <div class="row">
								<div class="col-sm-3 form-group">
									 <label>Employement:</label>
      						 <input type="text" id="employement_input" class="form-control" name="employement" value="<?php displayVal("employement",$profile); ?>" /></p></br>	
								   <div id="employement_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Employer</label>
									<input type="text" id="employer_input" class="form-control" name="employer" value="<?php displayVal("employer",$profile); ?>" /></p></br>
								  <div id="employer_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Date Of Birth</label>
									<input type="date" id="dob_input" class="form-control" name="dob" value="<?php displayVal("dob",$profile); ?>"/ >
								  <div id="dob_error"></div>
                </div>
								<div class="col-sm-3 form-group">
									<label>Email</label>
									<input type="text" id="email_input" class="form-control" name="email" value="<?php displayVal("email",$profile); ?>">
								  <div id="email_error"></div>
                </div>
              </div>  
              <div class="row">                       
                <div class="col-sm-6 form-group">
                  <label>Gender:</label>
									<input type="text" id="gender_input"  class="form-control" name="gender" value="<?php displayVal("gender",$profile); ?>"/>
								  <div id="gender_error"></div>
                </div>
                           
                <div class="col-sm-6 form-group">
    							<label>Marital status:</label>
									<input type="text" id="status_input" class="form-control" name="status" value="<?php displayVal("status",$profile); ?>"/>
								<div id="status_error"></div>
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
                    <input type="text" id="rstreet_input" placeholder="street" name="rstreet" value="<?php displayVal("rstreet",$profile); ?> "/>
                  <div id="rstreet_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>City:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="rcity_input" placeholder="city" name="rcity" value="<?php displayVal("rcity",$profile); ?> "/>
                  <div id="rcity_error"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>State:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="rstate_input" placeholder="state" name="rstate" value="<?php displayVal("rstate",$profile); ?> "/>
                  <div id="rstate_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Pin:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="rpin_input" placeholder="pin" name="rpin" value="<?php displayVal("rpin",$profile);?> "/>
                <div id="rpin_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Phone:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="rphone_input" placeholder="phone" name="rphone" value="<?php displayVal("rphone",$profile);?> "/>
                  <div id="rphone_error"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Fax:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="rfax_input" placeholder="fax" name="rfax" value="<?php displayVal("rfax",$profile);?> "/>
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
                  <input type="text" id="ostreet_input" placeholder="street" name="ostreet" value="<?php displayVal("ostreet",$profile);?> "/>
                  <div id="ostreet_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>City:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="ocity_input" placeholder="city" name="ocity" value="<?php displayVal("ocity",$profile); ?> "/>
                  <div id="ocity_error"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>State:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="ostate_input" placeholder="state" name="ostate" value="<?php displayVal("ostate",$profile);?> "/>
                  <div id="ostate_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Pin:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="opin_input" placeholder="pin" name="opin" value="<?php displayVal("opin",$profile);?> "/>
                  <div id="opin_error"></div>
                </div> 
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Phone:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="ophone_input" placeholder="phone" name="ophone" value="<?php displayVal("ophone",$profile);?> "/>
                  <div id="ophone_error"></div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3 form-group">
                  <label>Fax:</label>
                </div>
                <div class="col-sm-9">
                  <input type="text" id="ofax_input" placeholder="fax" name="ofax" value="<?php displayVal("ofax",$profile);?> "/>
                  <div id="ofax_error"></div>
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
                <input type="file" name="photo" value="<?php echo $profile['photo']; ?>" accept="image/x-png, image/gif, image/jpeg"/>
              </div>
            </div>
          </div><br/><br/>
			
				  <div class="col-md-12">
						<input type="submit" class="btn btn-lg btn-info submit_button" name="update" value="Update"/>					
					</div>
								
				</div>
			</form> 
		</div>
	</div>
</div>
    
<?php
require_once("footer.php");
?>
  				



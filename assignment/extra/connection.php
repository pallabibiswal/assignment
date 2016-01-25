<?php
ini_set('error_reporting', E_ALL|E_STRICT);
ini_set('display_errors', 1);

//connecting to database
require("dbinfo.php");

if(isset($_POST['submit']))
{

        echo "<strong><center> Form is Submitted successfully</center> </strong>";


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

     
        $error= array();

  //validation of user input
 		
        if (empty($first)) {
                $error = "<p>Give your first name</p>";
        } 
		if (!preg_match("/^[a-zA-Z]*$/",$first)) {
                $error .=  "<p> Only letters allowed in your first name</p>"; 
        }
        if (strlen($first) < 3 OR strlen($first) > 30) {
                $error .= '<p>First name should be within 3-20 characters long.</p>';
        }
       if (!preg_match("/^[a-zA-Z ]*$/",$last)) {
                $error .="<p>Only letters allowed in your last name</p>"; 
        }
        if (strlen($last) < 3 OR strlen($last) > 30) {
                $error .= '<p>Last name should be within 3-20 characters long.</p>';
        }
        if (!preg_match("/^[a-zA-Z]*$/",$middle)) {
                $error .=  "<p> Only letters allowed in your middle name</p>"; 
        }
        if (strlen($middle) < 3 OR strlen($middle) > 30) {
                $error .= '<p>Middle name should be within 3-20 characters long.</p>';
       }
       if (!preg_match("/^[a-zA-Z ]*$/",$suffix)) {
                $error .="<p>Only letters allowed in your suffix</p>"; 
      }
      if (strlen($suffix) < 3 OR strlen($suffix) > 30) {
                $error .= '<p>Last name should be within 3-20 characters long.</p>';
      }
     	if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i', $email)) {
                $error .="<p>That's not an email... (probably)</p>";
       }
       if (strlen($password) < 3 OR strlen($password) > 20) {
                 $error .= '<p>Password should be within 3-20 characters long.</p>';
       }
       if ($repassword != $password) {
                $error .= '<p>Confirm password mismatch.</p>';
      }
	   
	 if (!preg_match("/^[a-zA-Z ]*$/",$employer)) {
                $error .="<p>Only letters allowed in your employer field</p>"; 
      }
      if (strlen($employer) < 3 OR strlen($employer) > 50) {
                $error .= '<p>employer should be within 3-20 characters long.</p>';
     }
   
     if (!preg_match("/^[a-zA-Z ]*$/",$rstreet)) {
                $error .="<p>Only letters allowed in your residential street name</p>"; 
      }
    if (strlen($rstreet) < 5 OR strlen($rstreet) > 200) {
                 $error .= '<p> Residential street name should be within 5-200 characters long.</p>';
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$rcity)) {
                 $error .="<p>Only letters allowed in your residential city name</p>"; 
    }
    if (strlen($rcity) < 5 OR strlen($rcity) > 30) {
                $error .= '<p>Residential city name should be within 5-200 characters long.</p>';
     }

      if (!preg_match("/^[a-zA-Z ]*$/",$ostreet)) {
                $error .="<p>Only letters allowed in your office street name</p>"; 
      }
    if (strlen($ostreet) < 5 OR strlen($ostreet) > 200) {
                 $error .= '<p> office street name should be within 5-200 characters long.</p>';
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$ocity)) {
                 $error .="<p>Only letters allowed in your office city name</p>"; 
    }
    if (strlen($ocity) < 5 OR strlen($ocity) > 30) {
                $error .= '<p>Office city name should be within 5-200 characters long.</p>';
     }

    if (!ctype_digit($rphone) OR strlen($rphone) != 10) {
                 $error .= '<p class="error">Enter a valid residential phone number.</p>';
     }
     if (!ctype_digit($ophone) OR strlen($ophone) != 10) {
                 $error .= '<p>Enter a valid office phone number.</p>';
       }
    if (!ctype_digit($rpin)) {
                $error .= '<p>Enter a valid residential pin number.</p>';
    }
    if (!ctype_digit($ofax)) {
                $error .= '<p>Enter a valid office fax number.</p>';
    }
    if (!ctype_digit($rfax)) {
                 $error .= '<p>Enter a valid residential fax number.</p>';
    }
    if (!ctype_digit($opin)) {
                 $error .= '<p>Enter a valid office pin number.</p>';
    }
     if (strlen($extra)==0 OR strlen($extra)>250) {
                 $error .= '<p class="error">Please write something about you in extra field withing 240 characters.</p>';
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$rstate)) {
                 $error .="<p>Only letters allowed in your residential state name</p>"; 
    }
   if(strlen($rstate) < 3 OR strlen($rstate) > 30) {
                 $error .= '<p> Residential state name should be within 3-30 characters long.</p>';
    }
    if (!preg_match("/^[a-zA-Z ]*$/",$ostate)) {
                 $error .="<p>Only letters allowed in your office state name</p>"; 
    }
    if (strlen($ostate) < 3 OR strlen($ostate) > 30) {
                 $error .= '<p>office city name should be within 3-30 characters long.</p>';
    } 

 	//printing errors
  	 if(!empty($error)){
                echo "<center><div class=\"error\">";   
                echo "please fix the following errors:";
                echo "<ul>";
                foreach($error as $key => $err){
                    echo "<li>{$err}</li>";
                }
                echo "</ul>";
                echo "</div></center>";
      	}
     //insert into database
     else{
          
          $q = "INSERT INTO users ";
          $q .= "(first,last,middle,suffix,dob,email,employement,employer,gender,status,";
          $q .= "photo,rstreet,rcity,rstate,rpin,rphone,rfax,ostreet,ocity,ostate,opin,ophone,ofax,password,repassword,extra,mail,message,phonecall)";
          $q .=" VALUES ('$first', '$last', '$middle','$suffix','$dob','$email',";
          $q .="'$employement','$employer','$gender', '$status', '$photo','$rstreet','$rcity','$rstate',";
          $q .="'$rpin','$rphone','$rfax','$ostreet','$ocity','$ostate','$opin','$ophone','$ofax','$password','$repassword',";
          $q .="'$extra','$mail','$message','$phonecall')";
   

          if (mysqli_query($db, $q)) {
              echo "New record created successfully";
          } else {
             echo "Error: " . $q . "<br>" . mysqli_error($db);
          }
     }
}
else{
    
    echo "<strong><center>Please click on submit...</center></strong> ";

}
      
?>
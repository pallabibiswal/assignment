<?php
	if (empty($first)) {
            $error = "<p><strong>*Give your first name</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;              
        } 
        if (!preg_match("/^[a-zA-Z]*$/", $first)) {
            $error =  "<p><strong>* Only letters allowed in your 
            first name.</strong></p>";
            echo "<center>{$error}</center>";  
            $count++;  
        }
        if (strlen($first) < 3 OR strlen($first) > 30) {
            $error = "<p><strong>*First name should be within 3-20 
            characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $last)) {
            $error ="<p><strong>*Only letters allowed in your 
            last name</strong></p>"; 
            echo "<center>{$error}</center>";  
            $count++;  
        }
        if (strlen($last) < 3 OR strlen($last) > 30) {
            $error = "<p><strong>*Last name should be within 3-20 
            characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $middle)) {
            $error =  "<p><strong>*Only letters allowed in your 
            middle name</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;   
        }
  
        if (!preg_match("/^[a-zA-Z ]*$/", $suffix)) {
            $error ="<p><strong>*Only letters allowed in your 
            suffix</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!isset($dob)) {
            $error = "<p><strong>*Please enter your date 
            of birth.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;   
        }
        if (!preg_match('/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]+$/i', $email)) {
            $error ="<p><strong>*That's not an email... 
            (probably)</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;   
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $employer)) {
            $error ="<p><strong>*Only letters allowed in 
            your employer field</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (strlen($rstreet) < 5 OR strlen($rstreet) > 200) {
            $error = "<p><strong>* Residential street name should be 
            within 5-30 characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $rcity)) {
            $error ="<p><strong>*Only letters allowed in your 
            residential city name</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (strlen($rcity) < 5 OR strlen($rcity) > 30) {
            $error = "<p><strong>*Residential city name should be 
            within 5-30 characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[0-9]*$/", $ofax)) {
            $error ="<p><strong>*Only digits allowed in your 
            office fax address</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[0-9]*$/", $rfax)) {
            $error ="<p><strong>*Only digits allowed in your Residential 
            fax address</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (strlen($ostreet) < 5 OR strlen($ostreet) > 200) {
            $error = "<p> <strong>*office street name should be within 
            5-30 characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;   
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $ocity)) {
            $error ="<p><strong>*Only letters allowed in your 
            office city name</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (strlen($ocity) < 5 OR strlen($ocity) > 30) {
            $error = "<p><strong>*Office city name should be 
            within 5-30 characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!ctype_digit($rphone) OR strlen($rphone) != 10) {
            $error = "<p><strong>*Enter a valid residential 
            phone number.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;   
        }
        if (!ctype_digit($ophone) OR strlen($ophone) != 10) {
            $error = "<p><strong>*Enter a valid office 
            phone number.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!ctype_digit($rpin)) {
            $error = "<p><strong>*Enter a valid residential 
            pin number.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!ctype_digit($opin)) {
            $error = "<p><strong>*Enter a valid office 
            pin number.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $rstate)) {
            $error ="<p><strong>*Only letters allowed in your 
            residential state name</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;  
        }
        if(strlen($rstate) < 3 OR strlen($rstate) > 30) {
            $error = "<p><strong>* Residential state name should be 
            within 3-30 characters long.</strong></p>";
            echo "<center>{$error}</center>";  
            $count++;  
        }
        if (!preg_match("/^[a-zA-Z ]*$/", $ostate)) {
            $error ="<p><strong>*Only letters allowed in your 
            office state name</strong></p>"; 
            echo "<center>{$error}</center>"; 
            $count++;   
        }
        if (strlen($ostate) < 3 OR strlen($ostate) > 30) {
            $error = "<p><strong>*office city name should be 
            within 3-30 characters long.</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++;  
        } 
        $que = "SELECT pk_users FROM users WHERE email='$email'";
        $que .= "AND pk_users = '$value'";    
        $in = mysqli_query($db, $value);
        if($in && mysqli_fetch_assoc($in)) {
            $error ="<p><strong>*That email id is already exist</strong></p>";
            echo "<center>{$error}</center>"; 
            $count++; 
        }
 ?>
<?php 
require_once '../dbinfo.php';
	    $id			= trim($_POST['pk_users']);
	 //This contains the data that will update the db
	    $first      = trim($_POST['first']);
        $last       = trim($_POST['last']);
        $middle     = trim($_POST['middle']);                
        $suffix     = trim($_POST['suffix']);
        $dob        = trim($_POST['dob']);
        $email	    = trim($_POST['email']);
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
        $extra		= trim($_POST['extra']);

		$query  = "UPDATE users SET first='$first',last='$last',middle='$middle',suffix='$suffix',dob='$dob',email='$email',";
        $query .="employement ='$employement',employer ='$employer',gender ='$gender',status ='$status',photo ='$photo',";
        $query .="rstreet ='$rstreet',rcity ='$rcity',rstate ='$rstate', rpin='$rpin',rphone ='$rphone',rfax ='$rfax',";
        $query .="ostreet ='$ostreet',ocity ='$ocity',ostate ='$ostate', opin='$opin',ophone ='$ophone',ofax ='$ofax',";
        $query.="extra ='$extra' WHERE pk_users='$id'";
		mysqli_query($db, $query);   
?>
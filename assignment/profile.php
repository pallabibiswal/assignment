<?php
session_start();
require_once("dbinfo.php");
require_once("header.php");

$msg= $_SESSION['msg'];
echo "<center><strong>{$msg}</strong></center>";
$_SESSION['msg']=null;

if ($value=$_SESSION['id']) {

		//fetch data from database
      	$q = "SELECT * FROM users WHERE pk_users='$value'";
		$result = mysqli_query($db, $q);
		while ($row = mysqli_fetch_assoc($result)) {
		$profile=$row;
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
	
	}
	else{
		header("Location: login.php");
	}

?>

<body>
	<div class="container">
    	<div>
			<h1 class="well cen">Profile page</h1>
    	</div>
		<div class="col-lg-12 well">
			<div class="row">
				<form action="profile.php" method="POST">
					<div class="col-sm-12">
						<div class="row">
							<img width="130" height="140" src="image/<?php echo $profile['photo']; ?>"/>
						</div><br/><br/>
						<div class="row">
							<div class="col-sm-3 form-group">
								<label>First Name: </label>
								<?php echo $profile['first']; ?> 
							</div>
							<div class="col-sm-3 form-group">
								<label>Last Name:</label>
								<?php echo $profile['last']; ?></p></br>
							</div>
							<div class="col-sm-3 form-group">
								<label>Middle Name:</label>
								<?php echo $profile['middle']; ?>
							</div>
							<div class="col-sm-3 form-group">
								<label>Suffix:</label>
								<?php echo $profile['suffix']; ?></p></br>
							</div>

							<div class="col-sm-3 form-group">
								<label>Employement:</label>
      							<?php echo $profile['employement']; ?></p></br>	
							</div>
							<div class="col-sm-3 form-group">
								<label>Employer:</label>
								<?php echo $profile['employer']; ?></p></br>
							</div>
							<div class="col-sm-3 form-group">
								<label>Date Of Birth:</label>
								<?php echo $profile['dob']; ?>
							</div>
							<div class="col-sm-3 form-group">
								<label>Email:</label>
								<?php echo $profile['email']; ?></p></br>
							</div>

							<div class="col-sm-3 form-group">
								<label>Gender:</label>
								<?php echo $profile['gender']; ?></p></br>
							</div>
							<div class="col-sm-3 form-group">
								<label>Marital status:</label>
								<?php echo $profile['status']; ?></p></br>
							</div>
							<div class="col-sm-6 form-group">
								<label>Communication Medium:</label>
								<?php echo $medium; ?>
							</div>
						</div>
                            
						<div class="row">
							<div class="col-sm-6">
								<label><h3>Residential Address</h3></label>	
                        		<div class="row">
                        			<div class="col-sm-2 form-group">
										<label>Street:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rstreet']; ?>
									</div> 
								</div>
								<div class="row">
									<div class="col-sm-2 form-group">
										<label>City:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rcity']; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2 form-group">
										<label>State:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rstate']; ?>
									</div> 
								</div>
									<div class="row">
									<div class="col-sm-2 form-group">
										<label>Pin:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rpin']; ?>
									</div> 
								</div>
								<div class="row">
									<div class="col-sm-2 form-group">
										<label>Phone:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rphone']; ?>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-2 form-group">
										<label>Fax:</label>
									</div>
									<div class="col-sm-10">
										<?php echo $profile['rfax']; ?>
									</div>
								</div>
							</div>

							<div class="col-sm-6">
								<label><h3>Office Address</h3></label>	
									<div class="row">
	                        			<div class="col-sm-2 form-group">
											<label>Street:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['ostreet']; ?>
										</div> 
									</div>
									<div class="row">
										<div class="col-sm-2 form-group">
											<label>City:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['ocity']; ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2 form-group">
											<label>State:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['ostate']; ?>
										</div> 
									</div>
									<div class="row">
										<div class="col-sm-2 form-group">
											<label>Pin:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['opin']; ?>
										</div> 
									</div>
										<div class="row">
										<div class="col-sm-2 form-group">
											<label>Phone:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['ophone']; ?>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-2 form-group">
											<label>Fax:</label>
										</div>
										<div class="col-sm-10">
											<?php echo $profile['ofax']; ?>
										</div>
									</div>
								</div>
                            </div><br/><br/><br/>
                            
                            <div class="row">
                            	<div class="col-md-12">
                            		<div class="col-md-2">
                            			<label>Extra Note:</label>
                            		</div>
                            		<div class="col-md-10">	 
                            			<?php echo stripslashes($profile['extra']); ?>		
                            		</div>
                            	</div>
                            </div><br/><br/>
						</form> 
					</div>
				</div>
			</div>
		</body>
<?php require_once("footer.php"); ?>

  				


      			
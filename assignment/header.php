<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">
     <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src = "js/bootstrap.min.js"></script>
    <script type = "text/javascript" src="js/validate.js"></script>
    <script type = "text/javascript" src = "js/login.js"></script>
    <script type = "text/javascript" src = "js/unique_email.js?version=123"></script>
</head>

<body>
    <div class="brand">Mindfire Solutions</div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                    <h1>Mindfire Solutions</h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><?php  if(!$_SESSION['id']) 
                    {
                     ?>
                        <a href="registration.php">Register</a>
                    </li>
                    <li>
                        <a href="login.php">Login</a>
                    </li>
                    <?php 
                    } 
                    ?>
                    <li>    
                        <?php if($_SESSION['id']) 
                        {
                        ?>
                        <a href="profile.php">Profile</a>
                    </li>
                    <li>
                        <a href="update.php">Update</a>
                    </li>
                    <li>
                        <a href="reset.php">Reset Password</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <?php
                        }
                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','carterthedesigner@gmail.com');
	define('MESSAGE_SUBJECT','Graphic and Web Design Job');
	define('REPLY_TO', 'carterthedesigner@gmail.com');
	define('FROM_ADDRESS', 'carterthedesigner@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Web Design - Carter Guthrie</title>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="stylesheet.css">
<script src="js/modernizr.custom.js"></script>
<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

<!-- Website content -->
	<div class="container-fluid">
	
	<div class="row">
		<div class="col-xs-12 hidden-xs col-lg-6"></div>
		
		
<!-- Desktop/tablet Nav Bar -->		
		<div class="col-xs-12 col-lg-6 nav-location">
			<nav>
				<ul>
					<li><a href="http://carterguthrie.com" title="Carter Guthrie" class="main-nav hidden-xs">CARTER GUTHRIE</a></li>
					<li><a href="index.html" title="Portfolio Carter Guthrie" class="main-nav">PORTFOLIO</a></li>
					<li><a href="services.html" title="Services Carter Guthrie" class="main-nav">SERVICES</a></li>
					<li><a href="contact.php" title="Contact Carter Guthrie" class="main-nav">CONTACT</a></li>
				</ul>
			</nav>
		</div>
		</div>
<!-- Mobile Nav Bar -->	
	
	
<!-- logo row -->	
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10">
			<br>
			<h1 class="align-center header-style">WEB DESIGN</h1>
			<br>
		</div>
		<div class="col-sm-1"></div>
	</div>
	
	
<!-- Content row -->	
		<div class="row">
		<div class="col-xs-1"></div>
			<div class="col-xs-10 light-background">
				<br>	
				
	<div class="row">
		<div class="col-xs-1 col-sm-2"></div>
			<div class="col-xs-10 col-sm-8 align">
				<h1 class="align-center border mobile-header hidden-xs hidden-sm">CONTACT</h1>
   				<h1 class="align-center border-mobile mobile-header hidden-md hidden-lg">CONTACT</h1>
 				<br><br>
  					<?php include('inc/form.php'); ?>
  				<br><br><br>
  			</div>
   		<div class="col-xs-1 col-sm-2"></div>	
   		<br>
   	</div>
	</div>
	</div>
	
	<br>

<!-- Footer Row -->			
		<div class="row">
			<div class="col-xs-1"></div>
			<div class="col-xs-10 footer-body">
				<h1><a href="index.html" title="Portfolio">PORTFOLIO</a></h1>
				<h1><a href="contact.php" title="Contact">CONTACT</a></h1>
				<h1><a href="services.html" title="Services">SERVICES</a></h1>
				<h1><a href="http://carterguthrie.com" title="Carter Guthrie Graphic and Web Designer">CARTERGUTHRIE.COM</a></h1>
			</div>
			<div class="col-xs-1"></div>
		</div>
		
		
	</div>
<!-- END OF Website content -->

<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/main.js"></script>	
	<script src="js/toucheffects.js"></script>
<!-- END OF jQuery --> 
</body>
</html>

<?php
	
	// * IMPORTANT * Set your email information here
	define('DESTINATION_EMAIL','guthrie.sk8tarded@gmail.com');
	define('MESSAGE_SUBJECT','Graphic and Web Design Job');
	define('REPLY_TO', 'guthrie.sk8tarded@gmail.com');
	define('FROM_ADDRESS', 'guthrie.sk8tarded@gmail.com');
	define('REDIRECT_URL', 'index.html');
	
	require_once('validation.php');

?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title></title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="styles/css/bootstrap.min.css">
<link rel="stylesheet" href="styles/css/bootstrap-theme.min.css">
</head>
<body>
<!-- Website content -->
<div class="container-fluid">

						<?php include('inc/form.php'); ?>

</div> <!-- END OF container-fluid-->

<!-- END OF Website content -->

<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js">
    </script>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="js/main.js"></script>
<!-- END OF jQuery --> 
</body>
</html>

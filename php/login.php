<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login For WarGun</title>
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
	<script src="../js/jqueryy.min.js" type="text/javascript"></script>
	<script src="../js/popper.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
  	<link rel="stylesheet" type="text/css" href="../css/styleLoginRegistration.css">
	<link rel="icon" href="../PicturesHome/logo.png" sizes="16x16 32x32" type="image/png">
</head>
<body>

  	<div class="header">
		<h2>WarGun Login</h2>
	</div>
	 
  	<form method="post" action="login.php">
  	
	  	<?php include('errors.php'); ?>
	
		<h4>If you want to visit the website you will need to log in first!</h4>

	  	<div class="input-group">
		  	<label>Username</label>
  			<input type="text" name="username" >
		</div>
  		
		<div class="input-group">
		  	<label>Password</label>
  			<input type="password" name="password">
		</div>
  	
	  	<div class="input-group">
		  	<button type="submit" class="btn" name="login_user">Login</button>
		</div>
  		
		<p>
		  	Not yet a member? <a href="register.php">Sign up</a>
		</p>

 	</form>

	<div class="header">
		Social Links: 
		<a href="https://www.facebook.com/FollowWarzone/" class="fa fa-facebook" target="_blank"></a>
  		<a href="https://twitter.com/callofduty" class="fa fa-twitter" target="_blank"></a>
  		<a href="https://www.youtube.com/results?search_query=warzone" class="fa fa-youtube" target="_blank"></a>
  		<a href="https://www.instagram.com/warzone.cod/" class="fa fa-instagram" target="_blank"></a>
  		<a href="https://hu.pinterest.com/Anthonydang2193/call-of-duty-warzone/" class="fa fa-pinterest" target="_blank"></a>
	</div>
	
	<form>
		<h6 > © 2020 Activision Publishing, Inc. ACTIVISION, CALL OF DUTY, MODERN WARFARE, CALL OF DUTY MODERN WARFARE, CALL OF DUTY BLACK OPS, CALL OF DUTY GHOSTS, CALL OF DUTY ADVANCED WARFARE, CALL OF DUTY INFINITE WARFARE, CALL OF DUTY WWII and the CALL OF DUTY WORLD LEAGUE Logo are trademarks of Activision Publishing, Inc. All other trademarks and trade names are property of their respective owners.</h6>
	</form>
</body>
</html>
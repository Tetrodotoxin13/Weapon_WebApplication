<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration For WarGun</title>
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
		<a href="../PicturesLoginReg/warzonelogo.jpg"></a>
	  	<h2>WarGun Register</h2>
  	</div>
	
  	<form method="post" action="register.php">

  		<?php include('errors.php'); ?>
  		
		<h4>If you want to visit the website you will need to regist first!</h4>

		<div class="input-group">
			<label>Username</label>
  	  		<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
  	
	  	<div class="input-group">
  	  		<label>Email</label>
  	  		<input type="email" name="email" value="<?php echo $email; ?>">
  		</div>

  		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>

  		<div class="input-group">
			<label>Confirm password</label>
  	  		<input type="password" name="password_2">
		</div>

  		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
  		
		<p>
  			Already a member? <a href="login.php">Sign in</a>
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
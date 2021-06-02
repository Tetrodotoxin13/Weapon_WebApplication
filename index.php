<?php 
  session_start(); 
  if(!isset($_SESSION['username']))
  {
  	$_SESSION['msg'] = "You must log in first";
  	header('location:php/login.php');
  }
  if(isset($_GET['logout']))
  {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location:php/login.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>WarGun Homepage</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	
	  <link  href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<script src="js/jqueryy.min.js" type="text/javascript"></script>
	<script src="js/popper.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link  href="css/font-awesome.min.css" type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="css/styleIndex.css">
	<link rel="icon" href="PicturesHome/logo.png" sizes="16x16 32x32" type="image/png">
	<script>
    	<?php
			include("js/Framekiller.js");
		?>
  	</script>
</head>
<body>
	<div class="content">
  		
		  <!-- notification message -->
  		<?php
			if (isset($_SESSION['success'])) : 
		?>
		
		<div class="error success" >
      		<h3>
          		<?php 
          			echo $_SESSION['success']; 
          			unset($_SESSION['success']);
          		?>
      		</h3>
      	</div>
  		
		<?php
			endif
		?>
    	
		<!-- logged in user information -->
		<?php
			if (isset($_SESSION['username'])) : 
		?>
		
		<div class="col-sm-4">	
			<div> Signed in as: <strong><?php echo $_SESSION['username']; ?></strong> </div>
			<button><a href="index.php?logout='1'" style="color: red;">logout</a></button> <br>
		</div>
    	
		<?php
			endif
		?>
	</div>

	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

	<div class="jumbotron" style="margin-bottom:0">
  		<h1 id="titleh1">WARGUN Companion for True Soldiers</h1>
		<p class="feketeszoveg">"Success is not final, failure is not fatal: it is the courage to continue that counts." (Winston Churchil)</p>
  		<p class="feketeszoveg">"In the Soviet army it takes more courage to retreat than advance." (Joseph Stalin)</p>
	</div>

	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  		<a class="navbar-brand" href="https://www.twitch.tv/directory/game/Call%20of%20Duty%3A%20Warzone" target="_blank"> <img src="PicturesHome/logo.png" alt="" class="logo"> </a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
  		</button>
		<div class="collapse navbar-collapse" id="collapsibleNavbar">
			<ul class="navbar-nav">
	  			<li class="nav-item">
					<a class="nav-link" href="index.php">|HOME|</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="https://www.callofduty.com/warzone/strategyguide/pre-game-preparation/Store" target="_blank">|STORE|</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="php/WeaponDescription.php">|DESCRIPTIONS|</a>
	  			</li>    
	  			<li class="nav-item">
					<a class="nav-link" href="php/WeaponDatabase.php">|DATABASE|</a>
	  			</li>   
	  			<li class="nav-item">
					<a class="nav-link" href="php/WeaponBlueprints.php">|BLUEPRINTS|</a>
	  			</li>
	  			<li class="nav-item">
					<a class="nav-link" href="php/WeaponNews.php">|NEWS|</a>
	  			</li>  
	  			<li class="nav-item">
					<a class="nav-link" href="php/WeaponPatchnotes.php">|PATCH NOTES|</a>
	  			</li>     
			</ul>
  		</div>  

  		<div id="navbar-right">
			<a href="https://cod.tracker.gg/modern-warfare/db/loot?c=4" target="_blank">|Watches|</a>
			<a href="https://www.trueachievements.com/game/Call-of-Duty-Warzone/forum" target="_blnak">|Forums|</a>
  		</div>

  		<div class="bg-dark navbar-brand">
			<div class="search-container">
	  			<form action="php/WeaponDescription.php">
					<input type="text" placeholder="Description Search.." name="search">
	  			</form>
			</div>
  		</div>
	</nav>

	<?php
		require_once 'html/indexpagetext.html';
	?>

	<div class="container">
		<div class="row">
			<div class="col-sm-4">
		  		<h2>Loot</h2>
				<img class="img-responsive" src="PicturesHome/lootbox.jpg" alt="" style="width:100%">
		      	<p>Drop in with your squad and gear up for combat. Gather weapons, ammo, and armor.</p>
			</div>
			<div class="col-sm-4">
		    	<h2>Upgrade</h2>
				<img class="img-responsive" src="PicturesHome/upgrade.jpg" alt="" style="width:100%">
		      <p>Complete Contracts, visit Buy Stations, and access your custom loadouts when Loadouts Drop Appear</p>
			</div>
			<div class="col-sm-4">
		    	<h2>Survive</h2>
				<img class="img-responsive" src="PicturesHome/survive.jpg" alt="" style="width:100%">
		      	<p>Be the last squad alive to win. Eliminate opponents and escape the gas.</p>
			</div>
		</div>
	</div>
			
	<div class="jumbotron text-center" style="margin-bottom:0">
		<b class="feketeszoveg">The game received generally positive reviews from critics, with the maps receiving specific praise. In May 2020, 
								Activision announced that Warzone had surpassed over 60 million downloads in the first two months. As of December 2020,
								the game has more than 85 million players worldwide.
		</b>
		<br>
		<br>
		<?php
			include 'html/seasonpass.html';
		?>
		<p class="feketeszoveg">#For Entertainment#</p>
		<div>
			<div class="container">
				<h2 class="feketeszoveg">All weapon showcase and animations</h2>
				<div class="embed-responsive embed-responsive-16by9">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/uhm6_JSh8eo?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<script>
		<?php
			require_once 'js/ToTopbutton.js';
		?>
	</script>
</body>

<footer>
	<div id="social">
		<p>Social links:</p>
		<a href="https://www.facebook.com/FollowWarzone/" class="fa fa-facebook" target="_blank"></a>
		<a href="https://twitter.com/callofduty" class="fa fa-twitter" target="_blank"></a>
		<a href="https://www.youtube.com/results?search_query=warzone" class="fa fa-youtube" target="_blank"></a>
		<a href="https://www.instagram.com/warzone.cod/" class="fa fa-instagram" target="_blank"></a>
		<a href="https://hu.pinterest.com/Anthonydang2193/call-of-duty-warzone/" class="fa fa-pinterest" target="_blank"></a>
	</div>
</footer>

</html>
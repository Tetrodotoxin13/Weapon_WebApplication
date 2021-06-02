<?php
  require_once 'signedin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WarGun Description</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link  href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<script src="../js/jqueryy.min.js" type="text/javascript"></script>
	<script src="../js/popper.min.js" type="text/javascript"></script>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<link  href="../css/font-awesome.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="../css/styleWeaponDescription.css">
  <link rel="icon" href="../PicturesHome/logo.png" sizes="16x16 32x32" type="image/png">
  <script>
   	  <?php
		  	include("../js/Framekiller.js");
		  ?>
    </script>
</head>

<body>

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>

    	<div class="col-sm-4">	
        <div>Signed in as: <strong><?php echo $_SESSION['username']; ?></strong></div>
		    <button><a href="../index.php?logout='1'" style="color: red;">logout</a></button> <br>
      </div>
        
    <?php endif ?>
</div>


  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

  <div class="jumbotron" style="margin-bottom:0">
    <h1 id="titleh1">WARGUN Companion for True Soldiers</h1>
    <p class="feketeszoveg">"War is as much a punishment to the punisher as it is to the sufferer." (Thomas Jefferson)</p>
    <p class="feketeszoveg">"War would end if the dead could return." (Stanley Baldwin)</p>
  </div>

      <?php
      require_once '../html/navbar.html'
      ?>

  <div class="container" style="margin-top:30px">
    <div class="row">

      <div class="container">
        <hr style="height:2px;border-width:0;color:white;background-color:gray">
        

        <div id="slideshow">
          <div>
            <img src="../PicturesDescription/1.jpg" width="100%">
          </div>
          <div>
            <img src="../PicturesDescription/2.jpg" width="100%">
          </div>
          <div>
            <img src="../PicturesDescription/1.jpg" width="100%">
          </div>

       </div>

        <?php
          require_once '../html/descriptiontext.html'
        ?>
        
  <div class="jumbotron text-center" style="margin-bottom:0">

  <b class="feketeszoveg">The game received generally positive reviews from critics, with the maps receiving specific praise. In May 2020, 
	Activision announced that Warzone had surpassed over 60 million downloads in the first two months. As of December 2020,
	the game has more than 85 million players worldwide.
  </b>

    <br>
    <br>

    <?php
      require_once '../html/seasonpass.html'
    ?>

    <p class="feketeszoveg">#For Entertainment#</p>

    <div>

      <div class="container">

        <h2 class="feketeszoveg">Everything You Need To Know In Under 4 Minutes</h2>
        
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/eXC7nqWTwms?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

      </div>
      
    </div>

  </div>

  </div>

  <?php
  require_once '../html/sociallinks.html';
?>

  <script>
    <?php
      require_once '../js/ToTopbutton.js';
      require_once '../js/Slideshow.js';
      ?>
  </script>

</body>
</html>

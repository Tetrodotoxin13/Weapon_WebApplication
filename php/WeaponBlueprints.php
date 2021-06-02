<?php
  require_once 'signedin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>WarGun Blueprints</title>
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
  <link rel="stylesheet" href="../css/styleBlueprints.css">
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
    <p class="feketeszoveg">"Death solves all problems - no man, no problem." (Joseph Stalin)</p> 
    <p class="feketeszoveg">"Never think that war, no matter how necessary, nor how justified, is not a crime." (Ernest Hemingway)</p> 
  </div>

  <?php
    require_once '../html/navbar.html'
  ?>

<br>
<div>
In this page, you can find a database of all the Weapon Blueprints available in Call of Duty: Modern Warfare, and Call of Duty: Warzone battle royale.
A Weapon Blueprint is a variant of a base weapon within Modern Warfare, with a different name than its base counterpart. These Special Weapons can have unique cosmetic skins,
and come pre-equipped with attachments. Weapons in the Legendary Tier come with 5 attachments and have a gold/orange color, the Epic ones have 4 attachments, and the Rare 
ones only have 3.
Blueprint weapons in COD Warzone appear as Loot, and their rarity level corresponds to their drop rate in-game, the higher the rarity level a loot item is, the rarer
it is as an in-game drop.
</div>
<br>
<br>
<div class="container">
    <h2>Blueprints</h2>
    <p>What are Blueprints? A weapon blueprint is variant of a weapon family within Warzone. ... 
        Blueprints also can have cosmetic differences and may come pre-equipped with attachments. 
        These attachments are given to you on this specific blueprint without needing to level up the weapon to earn them.</p>
    <p>The best way to obtain weapon blueprints is either through the seasonal Battle Pass or buying them off of the store.
         In addition to that,
         they aren't overly cheap either.
         While the Battle Pass is well priced, the store is less generous</p>

  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.gamesatlas.com/cod-warzone-weapon-blueprints-database/#sort=published_date&sortdir=desc" target="_blank">
          <img class="img-responsive" src="../PicturesBlueprints/all.jpg" alt="Lights" style="width:100%">
          <div class="caption">
            <p>READ MORE! ALL Warzone blueprint here! Check! Check!</p>
          </div>
        </a>
        <p>Here's the complete Database of all the Weapon Blueprints available in Call of Duty: Warzone. The full list includes all the blueprints coming from both Modern Warfare and Black Ops Cold War.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.gfinityesports.com/article/3661/call-of-duty-warzone-season-4-blueprints-guide---what-are-they-what-do-they-do" target="_blank">
          <img class="img-responsive" src="../PicturesBlueprints/guide.png" alt="Blueprints guide" style="width:100%">
          <div class="caption">
            <p>READ MORE! What are they, what do they do?</p>
          </div>
        </a>
        <h4>Call of Duty Warzone's blueprints can be confusing. Here's our guide.</h4>
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <a href="https://www.gamesatlas.com/cod-modern-warfare/guides/all-weapons-blueprints-available-in-cod-warzone" target="_blank">
          <img class="img-responsive" src="../PicturesBlueprints/season1.jpg" alt="Chopper" style="width:100%">
          <div class="caption">
            <p>READ MORE! All Weapon Blueprints Loot in COD Warzone Season 1</p>
          </div>
        </a>
        <p>In this page, you can find the list of the current lootable COD Warzone Weapon Blueprints, updated with the new Season 1 from Black Ops Cold War. Here are all the weapons that you can find during the Battle Royale matches of Call of Duty Warzone, from Legendary, Epic, and Rare Tiers.</p>
      </div>
    </div>
  </div>
</div>

<div class="container" ></div>
<br>

<?php
  require_once '../html/blueprintimages.html';
?>
<br>

<div class="jumbotron text-center" style="margin-bottom:0">

  <p class="feketeszoveg">In other words, Blueprints look cool and offer a few attachments you may not already have for that weapon but can still earn in the long run.</p>

  <?php
    require_once '../html/seasonpass.html'
  ?>

  <p class="feketeszoveg">#For Entertainment#</p>

    <div>

      <div class="container">
        <h2 class="feketeszoveg">The TOP 10 Blueprints To Use</h2>
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/xnJu2tiXcus?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        </div>
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
    ?>
  </script>

</body>
</html>

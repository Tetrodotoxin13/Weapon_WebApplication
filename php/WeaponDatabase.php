<?php
  require_once 'signedin.php';
?>

<?php
  $mysqli = NEW MySQLi('localhost', 'root', '', 'warzonedatabase');
  $resultSet = $mysqli -> query("SELECT weapontypename FROM weapontypes");
  $wpns = mysqli_query($mysqli, "SELECT * FROM weapons");
  $wpns2 = mysqli_query($mysqli, "SELECT * FROM weapons");

  $att1 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att2 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att3 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att4 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att5 = mysqli_query($mysqli, "SELECT * FROM attachments");

  $att12 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att22 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att32 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att42 = mysqli_query($mysqli, "SELECT * FROM attachments");
  $att52 = mysqli_query($mysqli, "SELECT * FROM attachments");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>WarGun Database</title>
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
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link rel="stylesheet" href="../css/styleIndex.css">
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
        <p class="feketeszoveg">"He who fears being conquered is sure of defeat." (Napoleon Bonaparte)</p>
        <p class="feketeszoveg">"It is well that war is so terrible, or we should get too fond of it." (Robert E. Lee)</p>
    </div>

    <?php
      require_once '../html/navbar.html'
    ?>

    <div class="container">
      <hr style="height:2px;border-width:0;color:white;background-color:gray">
      <h2 >Database with Loadout assembler</h2> 
      <hr style="height:2px;border-width:0;color:white;background-color:gray">
    </div>
    
  <div class="container" style="margin-top:30px">
    <div class="row">
      <div class="col-sm-4">
        <div class="demo">
          <form action="#">
            <fieldset>
            
              <hr style="color:white;background-color:gray">

              <h4>Welcome to the loadout compilation database!</h4>
              <hr style="color:white;background-color:gray">
              <p>
                In this interface you can assemble your favorite warzone loadout very easily. 
                You can make a list of your chosen weapons and the attachment mounted on them.
                <hr style="color:white;background-color:gray">
               
                <strong>1.</strong> Chose a weapon type.
                <br><br>
                <strong>2.</strong> If you have the type, you can see what weapons are available. So chose a weapon. 
                <br><br>
                <strong>3.</strong> If you have a gun, look for a attachment type.
                <br><br>
                <strong>4.</strong> You know the drill! Select an attachment. You can select one once a time but if you writed into the list you can change another one.
                <br><br>
                <strong>5.</strong> You can see your own list on the right. 
                                    You can collect the weapons of your choice and the attachment which attached to them to your liking.
                                    Enter the names in the appropriate field. 
                <br>
                <br>
                <strong>6.</strong> Press the write to file button!!!
                <br><br>
                <strong>7.</strong> Download your loadout! 
                <hr style="color:white;background-color:gray">

                <img class="img-responsive" src="../PicturesDatabase/loadouts.jpg" alt="" style="width:100%">
                <br><br>
                <img class="img-responsive" src="../PicturesDatabase/perks.jpg" alt="" style="width:100%">
                <p>Best |PERKS|</p>


              </p>
              
            </fieldset>
        </form>       
      </div>
  </div>
         
          <div class="col-sm-8">
          <br>
          <Strong>First acceptance of terms of use! </Strong>
          <a href="https://slack.com/intl/en-hu/terms-of-service/user" target="_blank">User Terms of Service</a>
          <button onclick="myFunction()">Accept!</button> 
          <p id="accepted"></p>
         <strong> At this webpage you can check all weapons pictures! Saddly in this webpage the database does not contain images. :( </strong> <br>
          <a href="https://cod.tracker.gg/warzone/db/weapons" target="_blank">Weapons database with pictures</a>
            <hr style="color:white;background-color:gray">
            <h3>|WEAPON| List</h3>
            <center>
              <!--Weapon type kivalasztasa-->
              <label>Weapon Type:</label>
              <select name="weapontype" class="weapontype">
                <option selected hidden>Select Weapon Type</option>
                <?php
                  include('connect.php');
                  $sql = mysqli_query($connect,"SELECT * FROM weapontypes");
                  while($row=mysqli_fetch_array($sql))
                  {
                    echo '<option value="'.$row['weapontypenumber'].'">'.$row['weapontypename'].'</option>';
                  }
                ?>
              </select>
              <br/>
              <br/>
              <!--Weapon kivalasztasa-->
              <label>Weapon:</label>
              <select name="weapon" class="weapon">
                <option selected hidden>Select Weapon</option>                  
              </select>
              <button> <a href="TableWeaponDatabase.php" target="_blank">Weapon Datatable</a></button>
              <br>
            </center>
              <!--csatlakozas ajax segitsegevel-->
              <script type="text/javascript">
                $(document).ready(function()
                {
                  $(".weapontype").change(function()
                  {
                    var weapontypenumber=$(this).val();
                    var post_number = 'typenumber='+ weapontypenumber;
                    
                    $.ajax({type: "POST",url: "ajaxWeapons.php",data: post_number,cache: false,success: function(weapons)
                    {
                      $(".weapon").html(weapons);
                      } 
                    });   
                  });
                });
              </script>
                <hr style="color:white;background-color:gray">

            <h3>|ATTACHMENT| List</h3>    
            <center>
              <!--Attachment type kivalasztasa-->
              <label>Attachment Type:</label>
              <select name="attachmenttype" class="attachmenttype">
                <option selected hidden>Select Attachment Type</option>
                <?php
                  include('connect.php');
                  $sql = mysqli_query($connect,"SELECT * FROM attachmenttypes");
                  while($row=mysqli_fetch_array($sql))
                  {
                    echo '<option value="'.$row['attachmenttypenumber'].'">'.$row['attachmenttypename'].'</option>';
                  } 
                ?>
              </select>
              <br/>
              <br/>
              <!--Attachment kivalasztasa-->
              <label>Attachment:</label>
              <select name="attachment" class="attachment">
                <option selected hidden>Select Attachment</option>              
              </select>
              <button> <a href="TableAttachmentDatabase.php" target="_blank">Attachment Datatable</a></button>
            </center>
            <!--csatlakozas ajax segitsegevel-->
            <script type="text/javascript">
              $(document).ready(function()
              {
                $(".attachmenttype").change(function()
                {
                  var attachmenttypenumber=$(this).val();
                  var post_Atnumber = 'Atypenumber='+ attachmenttypenumber;              
                  $.ajax({type: "POST",url: "ajaxAttachments.php",data: post_Atnumber,cache: false, success: function(attachments)
                  {
                    $(".attachment").html(attachments);
                    } 
                  });              
                });
              });
            </script>
            <hr style="color:white;background-color:gray">
              
            <?php
              if(isset($_POST['submit']))
              {
                try
                {
                  $weaponname = $_POST['weaponname'];
                  $attachmentone = $_POST['attachmentone'];
                  $attachmenttwo = $_POST['attachmenttwo'];
                  $attachmentthree = $_POST['attachmentthree'];
                  $attachmentfour = $_POST['attachmentfour'];
                  $attachmentfive = $_POST['attachmentfive'];
  
                  $weaponnametwo = $_POST['weaponnametwo'];
                  $attachmenttwoone = $_POST['attachmenttwoone'];
                  $attachmenttwotwo = $_POST['attachmenttwotwo'];
                  $attachmenttwothree = $_POST['attachmenttwothree'];
                  $attachmenttwofour = $_POST['attachmenttwofour'];
                  $attachmenttwofive = $_POST['attachmenttwofive'];
                }catch(Throwable $t)
                {
                  echo "ERROR";
                }
              ;
                  
                //create and open the txt file
                $file = fopen("loadout.txt", "w+") or die("file not opened");

                $string = "This file help yout to assembl your best loudouts in game. 
                If you enter this number into your profile you get a gift calling card and 
                apply the assembled loadut one of your loadout space!\n ".
                "\n The random code: ".rand(10000,10000000)."\n".
                "\n Primary weapon name: ".$weaponname. 
                "\n Attachment 1: ".$attachmentone.
                "\n Attachment 2: ".$attachmenttwo.
                "\n Attachment 3: ".$attachmentthree.
                "\n Attachment 4: ".$attachmentfour.
                "\n Attachment 5: ".$attachmentfive.
                "\n".
                "\n Secondary weapon name: ".$weaponnametwo.
                "\n Attachment 1: ".$attachmenttwoone.
                "\n Attachment 2: ".$attachmenttwotwo.
                "\n Attachment 3: ".$attachmenttwothree.
                "\n Attachment 4: ".$attachmenttwofour.
                "\n Attachment 5: ".$attachmenttwofive.
                "\n".
                "\n Best PERKS: 
                Tier 1: EOD perk
                Tier 2: Overkill, Ghost, Restock perk
                Tier 3: Amped perk";

                fputs($file, $string) or die("Not writed the data");

                //close the file
                fclose($file);
              }
            ?>

              <h2>|My LOADOUT|</h2>
              <center>
              <form action="#" method="POST">
              Primary weapon name:
              <select name="weaponname">
              <option selected hidden>Select primary weapon</option> 
                <?php
                  while($read = mysqli_fetch_array($wpns))
                  {
                ?>
                  <option> <?php echo $read['weaponname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 1:
                <select name="attachmentone">
                <option selected hidden>Select first attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att1))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 2:
                <select name="attachmenttwo">
                <option selected hidden>Select second attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att2))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 3:
                <select name="attachmentthree">
                <option selected hidden>Select third attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att3))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 4:
                <select name="attachmentfour">
                <option selected hidden>Select fourth attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att4))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 5:
                <select name="attachmentfive">
                <option selected hidden>Select fifth attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att5))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br> <br> <br>

                Secondary weapon name: 
                <select name="weaponnametwo">
                <option selected hidden>Select secondary weapon</option> 
                <?php
                  while($read = mysqli_fetch_array($wpns2))
                  {
                ?>
                  <option> <?php echo $read['weaponname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 1:
                <select name="attachmenttwoone">
                <option selected hidden>Select first attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att12))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 2:
                <select name="attachmenttwotwo">
                <option selected hidden>Select second attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att22))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 3:
                <select name="attachmenttwothree">
                <option selected hidden>Select third attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att32))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 4:
                <select name="attachmenttwofour">
                <option selected hidden >Select fourth attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att42))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>
                Attachment 5:
                <select name="attachmenttwofive">
                <option selected hidden >Select fifth attachment</option> 
                <?php
                  while($read = mysqli_fetch_array($att52))
                  {
                ?>
                  <option> <?php echo $read['attachmentname']; ?></option>
                 <?php 
                  }
                ?>
                </select> <br> <br>

                <input type="submit" name="submit" value="Write to file"> <br> <br>
              </form>
              </center>
            <hr style="color:white;background-color:gray">
            <h2> Download your text file: </h2>
            <button> <a href="download.php?path=loadout.txt">Get My Loadout</a></button>
            <hr style="color:white;background-color:gray">
            <br>
        
        </div>
    </div>

    <br>
    <br>
    <div class="container">
        <div class="jumbotron" style="background-image: url(../PicturesDatabase/darkone.jpg);">
        
         
        <center>
        <h3>|WEAPON| Compare </h3>
        1 ->
              <a href="CompareWeapons.php?option=com_jumi&amp;fileid=3&amp;Itemid=11"
              onclick="window.open(this.href,'targetWindow',
                                    `toolbar=no,
                                      location=no,
                                      status=no,
                                      menubar=no,
                                      scrollbars=yes,
                                      resizable=yes,
                                      width=SomeSize,
                                      height=SomeSize`);
                                      return false;">Select the first weapon</a>
         <br>
          2 ->
         <a href="CompareWeaponSecond.php?option=com_jumi&amp;fileid=3&amp;Itemid=11"
              onclick="window.open(this.href,'targetWindow2',
                                    `toolbar=no,
                                      location=no,
                                      status=no,
                                      menubar=no,
                                      scrollbars=yes,
                                      resizable=yes,
                                      width=SomeSize,
                                      height=SomeSize`);
                                      return false;">Select the second weapon</a>
        </center>
                 
       
        </div>
    </div>
    <br>
    <!--a táblázat kilistázása-->
    <div class="jumbotron" style="background-image: url(../PicturesDatabase/darkone.jpg);">
    <div >
      Here you can check all the statistics of the weapons and attachments! You can copy-paste any names into the loadout assembler!
    </div>
    <br>
      <h3>|DATABASE TABLES|</h3>
      <br>
      <a href="TableWeaponDatabase.php" target="_blank">Weapon Database</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="TableAttachmentDatabase.php" target="_blank">Attachment Database</a>

    </div>

    <div class="jumbotron" style="background-image: url(../PicturesDatabase/darkone.jpg);">
    <div >
      Here you can check all the statistics of the weapons in graph view! All property in separated graph for the easier search!
    </div>
    <br>
      <h3>|GRAPHS|</h3>
      <br>
      <a href="DatagraphDamage.php" target="_blank">Damage Graph</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="DatagraphAccuracy.php" target="_blank">Accuracy Graph</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="DatagraphRange.php" target="_blank">Range Graph</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="DatagraphFirerate.php" target="_blank">Fire rate Graph</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="DatagraphMobility.php" target="_blank">Mobility Graph</a>
      <hr style="color:white;background-color:gray;width:50%">
      <a href="DatagraphControl.php" target="_blank">Control Graph</a>     
    </div>

  </div>  

  <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h2>Chose</h2>
          <img class="warzoneimg" src="../PicturesDatabase/chose.jpg" alt="" style="width:100%">
          <p>In Warzone, Loadouts are designed to allow any player, with any playstyle, a wealth of gameplay options. To begin with, you can select from several custom Loadouts,
            which you can tailor to the type of gunplay you’re hankering after. 
            Perhaps you want a sniper’s loadout? Or a close-quarter combat specialist? Or something in-between? There’s a custom Loadout ready for you!</p>
        </div>
        <div class="col-sm-4">
          <h2>Export</h2>
          <img class="warzoneimg" src="../PicturesDatabase/export.jpg" alt="" style="width:100%">
          <p>As you play with a given weapon, it will gain Weapon XP, which ultimately levels it up.
       Each weapon level corresponds with a new attachment or perk, and in some cases, a weapon camo.</p>
        </div>
        <div class="col-sm-4">
          <h2>Assemble</h2>
          <img class="warzoneimg" src="../PicturesDatabase/assemb.webp" alt="" style="width:100%">
          <p>After selecting any primary or secondary weapon for a Loadout (and by extension, a Loadout Drop), you can access the Gunsmith menu. 
      Here, you are presented with a wealth of options to craft your chosen armament from its base version to a fully outfitted and customized weapon 
      (except for launchers, which have no attachments).</p>
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
      require_once '../html/seasonpass.html';
    ?>

    <p class="feketeszoveg">#For Entertainment#</p>

    <div>

      <div class="container">

        <h2 class="feketeszoveg">The TOP 10 BEST Loadouts in Warzone Season 2</h2>
        
        <div class="embed-responsive embed-responsive-16by9">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/UP18fyAo0xw?autoplay=1&mute=1" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

      </div>
      
    </div>

  </div>

  </div>

  <?php
  require_once '../html/sociallinks.html';
?>

  <!--.script---------------------->
  <script>
  
  //selectmenu script
  $( function() {
    $( "#type" ).selectmenu();
 
    $( "#number" )
      .selectmenu()
      .selectmenu( "menuWidget" )
        .addClass( "overflow" );
 
    $( "#ok" ).selectmenu();
  } );

    //totop button 
    <?php
      require_once '../js/ToTopbutton.js';
    ?>

    //load data form the database
    $(document).ready(function(){

      load_data();

      function load_data(query='')
      {
        $.ajax({
          url:"fetchdatabase.php",
          method:"POST",
          data:{query:query},
          success:function(data)
          {
            $('tbody').html(data);
          }
        })
      }

      //select multiple chategory in the database table
      $('#multi_search_filter').change(function(){
        $('#hidden_country').val($('#multi_search_filter').val());
        var query = $('#hiddentypes').val();
        load_data(query);
      });

    });

    //alert box pop up
    function myFunction() {
      var text;
      if (confirm("Accept the user terms?")) {
        text = "You accepted!";
      } else {
        text = "You not accepted!";
      }
      document.getElementById("accepted").innerHTML = text;
}

</script>

</body>
</html>

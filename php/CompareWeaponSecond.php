<html>
<head>
    <title>Second weapon data</title>
    <link rel="stylesheet" href="../css/styleIndex.css">
    <style>
    table, th, td
    {
        text-align: center;
        background-color: crimson;
    }
    </style>
</head>
<body>
    <center>
        <h1>Search a weapon by a weapon number</h1>
        <h2>Select the second weapon and check the statistics</h2>


    <div class="container">
    <div class="row">
        <div class="col-sm-4">
          <form action="" method="POST">
                  <input type="text" name="id" placeholder="Second number">
                  <input type="submit" name="search" value="Search second"> <br> <br>
                  You can found the weapon numbers here!
                 <button> <a href="TableWeaponDatabase.php" target="_blank">Weapon Datatable</a></button>
          </form>
          <table>
                  <tr>
                    <th>Weapon name</th>
                    <th>Weapon type number</th>
                    <th>Weapon number</th>
                    <th>Accuracy</th>
                    <th>Damage</th>
                    <th>Range</th>
                    <th>Fire rate</th>
                    <th>Mobility</th>
                    <th>Control</th>
                  </tr>
                  <?php
                    $connect = mysqli_connect("localhost","root","","warzonedatabase");
                   
                    if(isset($_POST['search']))
                    {
                      $id = $_POST['id'];
                      $query = "SELECT * FROM `weapons` WHERE weaponnumber='$id'";
                      $queryrun = mysqli_query($connect,$query);
                      
                      while($row = mysqli_fetch_array($queryrun))
                      {
                        ?>
                        <tr>
                          <td> <?php echo $row['weaponname'] ?> </td>
                          <td> <?php echo $row['weapontypenumber'] ?> </td>
                          <td> <?php echo $row['weaponnumber'] ?> </td>
                          <td> <?php echo $row['accuracy'] ?> </td>
                          <td> <?php echo $row['damage'] ?> </td>
                          <td> <?php echo $row['range'] ?> </td>
                          <td> <?php echo $row['firerate'] ?> </td>
                          <td> <?php echo $row['mobility'] ?> </td>
                          <td> <?php echo $row['control'] ?> </td>
                        </tr>
                        <?php
                      }
                    }
                  ?>
          </table>
          </div>
          </div>
    </div>
    </center>
</body>
</html>
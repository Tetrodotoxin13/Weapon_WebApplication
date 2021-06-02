<?php
    include('../php/connect.php');
    if($_POST['typenumber']){
        $typenumber=$_POST['typenumber'];
        if($typenumber==0){
        echo "<option>Select Weapon</option>";
        }else{
            $sql = mysqli_query($connect,"SELECT * FROM `weapons` WHERE weapontypenumber='$typenumber'");
            while($row = mysqli_fetch_array($sql)){
                echo '<option value="'.$row['weaponnumber'].'">'.$row['weaponname'].'</option>';
            }
        }
    }
?>
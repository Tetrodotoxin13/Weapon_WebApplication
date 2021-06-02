<?php
    include('../php/connect.php');
    if($_POST['Atypenumber']){
        $Atypenumber=$_POST['Atypenumber'];
        if($Atypenumber==0){
            echo "<option>Select Attachment</option>";
        }else{
            $sql = mysqli_query($connect,"SELECT * FROM `attachments` WHERE attachmenttypenumber='$Atypenumber'");
            while($row = mysqli_fetch_array($sql)){
                echo '<option value="'.$row['attachmentnumber'].'">'.$row['attachmentname'].'</option>';
            }
        }
    }
?>
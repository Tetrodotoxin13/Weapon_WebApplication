<?php
    if(isset($_GET['path']))
    {
        $filename = $_GET['path'];
        //Fájl létezésének ellenőrzése
        if(file_exists($filename)) 
        {
            //Header információ meghatározása
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header("Cache-Control: no-cache, must-revalidate");
            header("Expires: 0");
            header('Content-Disposition: attachment; filename="'.basename($filename).'"');
            header('Content-Length: ' . filesize($filename));
            header('Pragma: public');
            //Rendszer buffer tisztítása
            flush();
            //A fálj olvasása
            readfile($filename);
            //Letöltés után törlődik
            unlink($filename);
            //Befejezés
            die();
        }
        else{
            //Ha nem létezik a fájl
            echo  "<script>alert('File does not exist. Go back the previous page and create a loadut!');</script>";
        }
    }
    else
    {
        echo "Filename is not defined.";
    }
?>
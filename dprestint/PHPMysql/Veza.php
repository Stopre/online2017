<?php


$db = mysqli_connect ("localhost","root","");
if ($db)
{
    echo "Spojeno" , "<br>";
    $db_selected = mysqli_select_db($db,"fakultet");
    if ($db_selected)
        echo "Baza je uspjesno odabrana", "<br>" ;
    else {
echo "doslo je do greske" ;
    }
}
 else 
 {
      echo " Doslo je do pogreske u spajanju";

 }
 ?>
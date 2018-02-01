<?php
include ("Veza.php") ;
$result = mysqli_query ( $db,"SELECT * FROM stud");
if ($result)
{
    echo "Upit je uspjesno izvrsen", "<br>" , "<bl>";
   
}
 else {
echo "greska" ;    
}

?>


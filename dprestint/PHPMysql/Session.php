<?php

session_start() ;
$_SESSION["var1"] = 1234 ;
$_SESSION["var2"] = "Algebra" ;

echo $_SESSION["var1"] ,  "<br>" ;

echo $_SESSION["var2"];

?>

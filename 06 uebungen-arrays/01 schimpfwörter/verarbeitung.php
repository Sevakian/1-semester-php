<?php

$text = $_POST["text"];

$schimpfwörter=["Esel","Blödmann","Kackboon","Churka", "fick", "ficke", "Hurensohn", "Homo", "Scheiße", "Fuck", "Gay", "էշ"];

    $newtext = str_replace($schimpfwörter, "*****",$text);

echo "<textarea cols=\"20\" rows=\"10\">". $newtext ."</textarea>" ;

?>
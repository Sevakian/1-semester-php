<?php

$name = $_POST["benutzername"];
$passwort = $_POST ["passwort"];

if ($name=="Reiner"&&$passwort=="esel")

{echo "<h1 style=text-align:center;>Welcome </h1>";}

else {echo "<h1 style=color:red;text-align:center;>ACCESS DENIED</h1>";}
?>

<?php

if (isset ($_POST["startkapital"]) && ($_POST["zinssatz"]) && ($_POST["laufzeit"])) {


    $startkapital = $_POST["startkapital"];

    $zinssatz = $_POST["zinssatz"];

    $laufzeit = $_POST["laufzeit"];

    $kapital = $startkapital*$zinssatz/100+$startkapital;

    echo "<p> <strong> Ansicht Berechnung: </strong> </p>";

    $i = 1;
    while ($i <= $laufzeit){
     $neukapital = $kapital*$zinssatz/100*$i+$startkapital;
     $neukapital = number_format($neukapital, 2, "," , ".");
     echo "Kapital nach " . $i . " Jahren: " . $neukapital . " € <br>";
     $i++;
    }
}

else {
    echo "<p> <strong> Fehlermeldung! </strong> </p>";
    echo "Geben sie bitte ein gültiges Startkapital ein <br>";
    echo "Geben sie bitte einen gültigen Zinsatz ein <br>";
    echo "Geben sie bitte eine gültige Laufzeit ein <br>";
}

?>
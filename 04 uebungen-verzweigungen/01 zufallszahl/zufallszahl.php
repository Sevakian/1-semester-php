<?php 

$zahl = rand(0,10);

echo "Zufallszahl: $zahl <br>"; 

if ($zahl < 5) {
    echo "Die Zahl ist kleiner als 5";
}

elseif ($zahl > 5) {
    echo "Die Zahl ist größer als 5";
}

elseif ($zahl == 5) {
    echo "Die Zahl ist gleich 5";
}

?>
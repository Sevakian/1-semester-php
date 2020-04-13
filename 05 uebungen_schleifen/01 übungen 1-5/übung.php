<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content ="width-device-width, initial-scale=1.0">
        <style>
            body {
                background-color:black;
                color: 	#7FFF00;
                width:1920px;
            }
        </style>
    </head>
<body>
<?php 

    // Aufgabe 1

    for ($i = 1; $i <= 50; $i++) {
     echo $i . " ";
     }

     echo "<br>";

    //  Aufgabe 2

    for ($j = 1; $j <= 96; $j = $j+5) {
    echo $j ." ";

    }

    echo "<br>";

    // Aufgabe 3

    for ($k = 1; $k <= 8192; $k = $k*2){
    echo $k . " ";
    }

    echo "<br>";

    // Random Aufgabe

    $h = 1;
    
    while ($h <= 10){
        echo "Zeile:" . $h ."<br>";

        $l = 3;
        while ($l <= 120){
            echo $l ." ";
            $l = $l+2;
        }
        $h = $h+1;
        echo "<br>";
    }

    echo "<br>";

    // Aufgabe 4

    for ($m = 1; $m <=100; $m++){
        if ($m%4==0 && $m%5==0) {
            $bb= " $m ist ein vielfaches von 4 und 5";
        }
        elseif ($m%4==0){
        $bb= "$m ist ein vielfaches von 4";
        }
        elseif ($m%5==0){
        $bb= "$m ist ein vielfaches von 5";
        }
        else {$bb=$m;}
        echo $bb . "<br>";
    }
    
    // Aufgabe 5
    for ($a = 1; $a <= 1; $a++){
    echo $a ." <br>";
    
        for ($b = 1; $b <= 2; $b++) {
        echo $b ." ";
        }
        echo "<br>";
            for ($c =1; $c <= 3; $c++) {
            echo $c ." ";
            }
            echo "<br>";
                for ($d = 1; $d <= 4; $d++){
                echo $d ." ";
                }
                echo "<br>";
                    for ($e = 1; $e <= 5; $e++) {
                    echo $e ." ";
                    }
                    echo "<br>";
                        for ($f =1; $f <= 6; $f++) {
                        echo $f ." ";
                        }
                        echo "<br>";
                            for ($g = 1; $g <= 7; $g++){
                            echo $g ." ";
                            }
                            echo "<br>";
                                for ($h = 1; $h <= 8; $h++) {
                                echo $h ." ";
                                }
                                echo "<br>";
                                    for ($i =1; $i <= 9; $i++) {
                                    echo $i ." ";
                                    }
                                    echo "<br>";
                                        for ($j =1; $j <= 10; $j++) {
                                        echo $j ." ";
                                        }
                                        echo "<br>";
                                    }
                                    
// Aufgabe 6
echo "<h1> Kopf oder Zahl</h1>"



?>

</body>
</html>
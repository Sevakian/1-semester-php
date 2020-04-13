<html>
    <head>

    </head>

<body>
<form action="" method="POST">
<input type="submit" name="submit" value="spielen">
<br>
<br>


<?php 

// $spiel=$_POST["spiel"];

if (isset($_POST["submit"])){

    $value = rand(1,2);
    $kopfcounter = 0;
    $zahlcounter = 0;
    echo $value;
    if ($value==1){
        echo "Kopf";
        
        $kopfcounter++;
    }
    elseif ($value==2){
         echo "Zahl";
            
         $zahlcounter++;
    }
}


     
// }

// echo "<br><br>";

// echo "<strong> zahlcounter: $zahlcounter </strong>";
// echo "<br>";

// echo "<strong> kopfcounter: $kopfcounter </strong>";
// echo "<br>";

// if ($kopfcounter<$zahlcounter){
//     echo "Zahl gewinnt";
// }
// elseif ($kopfcounter>$zahlcounter) {
//     echo "kopf gewinnt";
// }

// elseif ($kopfcounter==$zahlcounter) {
//     echo "unentschieden";
// }
// }




?>

</body>
</html>
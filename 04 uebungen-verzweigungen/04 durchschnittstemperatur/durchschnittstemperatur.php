<?php 
// Error_reporting(0);
?>

<html>
    <head>
        
        <style>
            body {
                background:linear-gradient(to bottom, blue, red, green);
                margin:auto;
                margin-top:20px;
                width:1000px;
                height:900px;
                color:white;
                font-family:arial;
            }
            table , tr ,td {
                padding:15px;
                
            }
            
            table td {
                border:black 1px solid;
                background:linear-gradient(to bottom, red, blue, orange);
            }

            td>input {
                text-align:center;
                width:30px;              
            }

            .durchschnitt {
                height:30px;
                
            }

            
            
        </style>
    </head>
<form action="" method="Post">
<table>
        
        <h1>Durchschnittstemperatur in Hamburg: <input class="durchschnitt" type="text" name="durchschnitt0" value="12"></h1>

        <tr>
            <td>KW</td>
            <td>Montag</td>
            <td>Dienstag</td>
            <td>Mittwoch</td>
            <td>Donnerstag</td>
            <td>Freitag</td>
            <td>Samstag</td>
            <td>Sonntag</td>
        </tr>

        <tr>
            <td><input type="text" value="14" name="Kalenderwoche1"></td>
            <td><input type="text" value="9" name="T1"> Grad</td>
            <td><input type="text" value="11" name="T2"> Grad</td>
            <td><input type="text" value="10" name="T3"> Grad</td>
            <td><input type="text" value="12" name="T4"> Grad</td>
            <td><input type="text" value="10" name="T5"> Grad</td>
            <td><input type="text" value="9" name="T6"> Grad</td>
            <td><input type="text" value="8" name="T7"> Grad</td>
        </tr>

        <tr>
            <td><input type="text" value="15" name="Kalenderwoche2"></td>
            <td><input type="text" value="11" name="T8"> Grad</td>
            <td><input type="text" value="13" name="T9"> Grad</td>
            <td><input type="text" value="10" name="T10"> Grad</td>
            <td><input type="text" value="11" name="T11"> Grad</td>
            <td><input type="text" value="12" name="T12"> Grad</td>
            <td><input type="text" value="11" name="T13"> Grad</td>
            <td><input type="text" value="13" name="T14"> Grad</td>
        </tr>

        <tr>
            <td><input type="text" value="16" name="Kalenderwoche3"></td>
            <td><input type="text" value="12" name="T15"> Grad</td>
            <td><input type="text" value="13" name="T16"> Grad</td>
            <td><input type="text" value="13" name="T17"> Grad</td>
            <td><input type="text" value="14" name="T18"> Grad</td>
            <td><input type="text" value="12" name="T19"> Grad</td>
            <td><input type="text" value="15" name="T20"> Grad</td>
            <td><input type="text" value="15" name="T21"> Grad</td>
        </tr>

        <tr>
            <td><input type="text" value="17" name="Kalenderwoche4"></td>
            <td><input type="text" value="13" name="T22"> Grad</td>
            <td><input type="text" value="15" name="T23"> Grad</td>
            <td><input type="text" value="15" name="T24"> Grad</td>
            <td><input type="text" value="13" name="T25"> Grad</td>
            <td><input type="text" value="14" name="T26"> Grad</td>
            <td><input type="text" value="15" name="T27"> Grad</td>
            <td><input type="text" value="16" name="T28"> Grad</td>
        </tr>
</table>
<input type="submit" name="submit" value="Absenden">
</form>

<?php if (isset($_POST["submit"])){

// Durchschnittstemperatur Woche 1

$KW1 = $_POST["Kalenderwoche1"];

$T1 = $_POST["T1"];
$T2 = $_POST["T2"];
$T3 = $_POST["T3"];
$T4 = $_POST["T4"];
$T5 = $_POST["T5"];
$T6 = $_POST["T6"];
$T7 = $_POST["T7"];

$Durchschnitt1 = ($T1+$T2+$T3+$T4+$T5+$T6+$T7)/7;
// $Durchschnitt1 = number_format ($Durchschnitt1, 2, "," , ".");

// Durchschnittstemperatur Woche 2

$KW2 = $_POST["Kalenderwoche2"];

$T8 = $_POST["T8"];
$T9 = $_POST["T9"];
$T10 = $_POST["T10"];
$T11 = $_POST["T11"];
$T12 = $_POST["T12"];
$T13 = $_POST["T13"];
$T14 = $_POST["T14"];

$Durchschnitt2 = ($T8+$T9+$T10+$T11+$T12+$T13+$T14)/7;

// Durchschnittstemperatur Woche 3

$KW3 = $_POST["Kalenderwoche3"];

$T15 = $_POST["T15"];
$T16 = $_POST["T16"];
$T17 = $_POST["T17"];
$T18 = $_POST["T18"];
$T19 = $_POST["T19"];
$T20 = $_POST["T20"];
$T21 = $_POST["T21"];

$Durchschnitt3 = ($T15+$T16+$T17+$T18+$T19+$T20+$T21)/7;

// Durchschnittstemperatur Woche 4

$KW4 = $_POST["Kalenderwoche4"];

$T22 = $_POST["T22"];
$T23 = $_POST["T23"];
$T24 = $_POST["T24"];
$T25 = $_POST["T25"];
$T26 = $_POST["T26"];
$T27 = $_POST["T27"];
$T28 = $_POST["T28"];

$Durchschnitt4 = ($T22+$T23+$T24+$T25+$T26+$T27+$T28)/7;

$Durchschnitt0 = $_POST["durchschnitt0"];

echo "Die Durchschnittstemperatur für April beträgt <strong>" . $Durchschnitt0 . " Grad </strong> <br><br>";

// Kalenderwoche 1

echo "Die Durchschnittstemperatur für Kalenderwoche " . $KW1 . " beträgt <strong>" . $Durchschnitt1 . "C° </strong><br>";
    
    if ($Durchschnitt1 < $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW1 ." liegt unter dem Durchschnittswert vom April <br><br>";
    }

    elseif ($Durchschnitt1 > $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW1 ." liegt über dem Durchschnittswert vom April <br><br>";
    }

// Kalenderwoche 2

echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW2 ." beträgt <strong>". $Durchschnitt2 ."C° </strong><br>";

    if ($Durchschnitt2 < $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW2 ." liegt unter dem Durchschnittswert vom April <br><br>";
    }
    elseif ($Durchschnitt2 > $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW2 ." liegt über dem Durchschnittswert vom April <br><br>";
    }

// Kalenderwoche 3

echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW3 ." beträgt <strong>". $Durchschnitt3 ."C° </strong><br>";

    if ($Durchschnitt3 < $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW3 ." liegt unter dem Durchschnittswert vom April <br><br>";
    }
    elseif ($Durchschnitt3 > $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW3 ." liegt über dem Durchschnittswert vom April <br><br>";
    }

// Kalenderwoche 4

echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW4 . " beträgt <strong>". $Durchschnitt4 ."C° </strong><br>";

    if ($Durchschnitt4 < $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW4 ." liegt unter dem Durchschnittswert vom April <br><br>";
    }
    elseif ($Durchschnitt4 > $Durchschnitt0){
    echo "Die Durchschnittstemperatur für Kalenderwoche ". $KW4 ." liegt über dem Durchschnittswert vom April <br><br>";
    }
}

?>

<!-- Wie kann man die Zeilen als Selected einstellen?  -->

<!-- Wie kann ich die fehlermeldung am Anfang entfernen? -->
Mit If Isset am Anfang des PHP Codes
<!-- Nachkomma stellen beheben -->
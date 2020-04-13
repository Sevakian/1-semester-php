<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <title>Übersicht Bestellung</title>
    <style>

        table, td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
</head>

<body>

<?php
// Werte aus dem $_POST Array auslesen

$Anzahl = $_POST["anzahl"];
$Preis = $_POST["preis"]; 
$Rabatt = $_POST["rabatt"];
$Gesamtpreis = $Anzahl*$Preis-$Rabatt;
 
// Gesamtkosten vor Steuern berechnen

$Steuer = $_POST["steuer"];
$Brutto = $Gesamtpreis*$Steuer/100+$Gesamtpreis;

// Berechnung der Zahlungsrate

$Zahlungsrate = $_POST["zahlungsraten"];
$RateWert = $Brutto/$Zahlungsrate; 

// Zahlen Formatierung 

$Preis = number_format($Preis, 2, ",", ".");
$Rabatt = number_format($Rabatt, 2, ",", ".");
$Gesamtpreis = number_format($Gesamtpreis, 2, ",", ".");
$Steuer = number_format($Steuer, 2, ",", ".");
$Brutto = number_format($Brutto, 2, ",", ".");
$RateWert = number_format($RateWert, 2, ",", ".");

?>

<h4>Ihre Bestellung:</h4>

<?php if ($Preis <= 0){
    echo "WARNUNG kein Preis angegeben <br>";
}
    if ($Rabatt <= 0){
        echo "WARNUNG kein Rabatt angegeben <br>";
    }
    if ($Steuer <= 0){
        echo "WARNUNG keine Steuer angegeben <br>";
    }
    if ($Preis >= $Rabatt){
        echo "WARNUNG Preis ist niedriger als Rabatt <br>";
    }
?>

<table>

    <!-- Anzahl der Produkte -->

    <tr> 
        <td><?php echo $Anzahl; ?></td>
        <td><?php if ($Anzahl == 1) {echo "Produkt";} elseif ($Anzahl > 1) {echo "Produkte";} ?></td>
    </tr>

    <!-- Netto-Einzelpreis -->

    <tr> 
        <td><?php echo $Preis; ?> €</td>
        <td>Netto Einzelpreis</td>
    </tr>

    <!-- Rabatt in € -->

    <tr> 
        <td><?php echo $Rabatt; ?> €</td>
        <td>Rabatt in Euro </td>
    </tr>

    <!--Netto-Gesamtpreis -->

    <tr> 
        <td><?php echo $Gesamtpreis ?> €</td>
        <td>Netto Gesamtpreis</td>
    </tr> 
    
    <!-- Mehrwetsteuer -->

    <tr>
        <td><?php echo $Steuer ?> %</td>
        <td>Mehrwertsteuer </td>
    </tr>

    <!-- Brutto Gesamtpreis -->

    <tr> 
        <td><?php echo $Brutto ?> € </td>
        <td>Brutto Gesamtpreis </td>
    </tr>

    <!-- Monatsraten -->

    <tr> 
        <td><?php echo $Zahlungsrate ?> </td>
        <td><?php if ($Zahlungsrate == 1){echo "Monatsrate";} elseif ($Zahlungsrate > 1){echo "Monatsraten";} ?></td>
    </tr>

    <!-- Monatliche Rate -->

    <tr> 
        <td><?php echo $RateWert ?> €</td>
        <td>Monatliche Rate </td>
    </tr>

</table>

</body>

</html>
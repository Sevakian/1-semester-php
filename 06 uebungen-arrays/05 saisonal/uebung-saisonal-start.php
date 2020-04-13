<?php



$Frühling = [ 
    "Mar",
    "Apr",
    "May",
];

$Sommer = [
    "June",
    "July",
    "Aug",
];

$Herbst = [
    "Sep",
    "Oct",
    "Nov",
];

$Winter = [
    "Dec",
    "Jan",
    "Feb",
];

echo date("M");


$ausgabe = [
    'Frühling'  => 'Rennräder für den Start in den Frühling',
    'Sommer'    => 'Leichte Kleidung für das Joggen im Park',
    'Herbst'    => 'Hallenschuhe für eine Runde Squash',
    'Winter'    => 'Unsere neuen Snowboards sind eingetroffen'
];
if (in_array(date("M"),$Frühling,true)){
foreach ($ausgabe as $key => $wert){
    // if (date("M")){
        echo "Monat: " . $key . "<br>" . "Angebot: " . $wert;
        echo "<br>";
    // }
}

?>
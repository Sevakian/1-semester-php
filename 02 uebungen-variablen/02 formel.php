<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML und PHP mischen</title>
</head>
<body>

<?php 
    $breite = 20;
    $höhe = 10;
    $rechteck = $breite*$höhe;

    $grundseite = 14;
    $hoehe = 5;
    $dreieck = $grundseite*$hoehe/2;

    $pi = 3.1415;
    $radius = 5;
    $kreis = $pi*$radius*2;

    echo $rechteck ."m <br>". $dreieck."m <br>". $kreis ;
    
?>


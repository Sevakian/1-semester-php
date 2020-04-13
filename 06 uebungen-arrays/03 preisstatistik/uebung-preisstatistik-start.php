<?php
$preise = [9.99, 11.59, 32.99, 69.95, 34.99, 12.59, 21.95, 86.99, 119.99, 5.50, 6.90, 48.99, 111.50];

$durchschnittswert = array_sum($preise) / count($preise);
echo $durchschnittswert;

echo "<br><br>";

sort ($preise);
print_r ($preise);

echo "<br><br>";

$max = array_splice($preise, -4);
rsort($max);
echo "<strong> Maximal: </strong>";
echo implode(" | ", $max);

echo "<br><br>";

sort ($preise);
$min = array_splice($preise, 4);
echo "<strong> Minimum: </strong>";
echo implode(" | ", $preise);
?>
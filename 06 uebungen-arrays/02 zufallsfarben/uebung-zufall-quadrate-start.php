<?php
	// Array anlegen
	// Anzahl der Array-Elemente zählen und in Variable speichern
	$hintergrundfarbe = ["red", "orange", "green", "blue", "indigo", "violet", "yellow"];
	$anzahl = count($hintergrundfarbe);
	$seitenlänge= 5;
	$padding=5;

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Zufallsfarben</title>
  	<style type="text/css">
	body {
		margin: 0;
		padding: 0;
		background: <?php echo $hintergrundfarbe[rand(0,$anzahl-1)]; ?>;
	}
	.quadrat {
		float: left;
		width: <?php echo $seitenlänge ?>%;
		height: 0;
		padding-bottom: <?php echo $padding ?>%; 
	}
  	</style>
  </head>
  <body>
		<?php
		
		// for-Schleife öffnen
		for ($i=0; $i < $anzahl; $i++){
		echo "<div class=\"quadrat\" style=\"background:" . $hintergrundfarbe[rand(0,$anzahl-1)] . "\"></div>";
		}
		// for-Schleife schließen
		
    ?>
  </body>
</html>
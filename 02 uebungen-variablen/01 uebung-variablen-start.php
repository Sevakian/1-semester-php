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
    $variable0 = "<h2 style=\"background-color:red;padding:20px;\">Gummibärchen</h2>";
    $variable1 = "<strong>Freilebende</strong>";
    $variable2 = "<strong>Kinokasse</strong>";
    $variable3 = "<strong>Gummibärchen-Mensch</strong>";
    $variable4 = "<strong>weichgekochter Radiergummi</strong>";
    ?>

    <?php echo $variable0 ?>
    <p>
        <?php echo $variable1 ?> Gummibärchen gibt es nicht. Man kauft sie in Packungen an der <?php echo $variable2 ?>. Dieser Kauf ist der Beginn einer fast erotischen und sehr ambivalenten Beziehung <?php echo $variable3 ?>. Zuerst genießt man. Dieser Genuß umfaßt alle Sinne. Man wühlt in den Gummibärchen, man fühlt sie. Gummibärchen haben eine Konsistenz wie <?php echo $variable4 ?>.
    </p>
</body>
</html> 
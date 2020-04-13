<?php

    if (isset($_POST['submit'])) {
        $land = $_POST['land'];
    }

    else {
        $land = null;
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Wie heißt die Hauptstadt?</title>
</head>
<body>
    <h3>Wie heißt die Hauptstadt?</h3>
    <form method="post" action="">
        <select name="land">
            <option <?php if ($land=="England") echo "selected" ?>>England</option>
            <option <?php if ($land=="Frankreich") echo "selected" ?>>Frankreich</option>
            <option <?php if ($land=="Italien") echo "selected" ?>>Italien</option>
            <option <?php if ($land=="Spanien") echo "selected" ?>>Spanien</option>
        </select>
        <input type="submit" name="submit" value="Absenden">
    </form>
    
    <h3>Die Hauptstadt heißt:</h3>
    <p><?php 
    
        switch ($land) {
            
        case "England":
        echo "London";
        break;

        case "Frankreich":
        echo "Paris";
        $select2 = "selected";
        break;

        case "Italien":
        echo "Rom";
        break;

        case "Spanien":
        echo "Madrid";
        break;

        default:"";
    }
         
    ?></p>
</body>
</html>
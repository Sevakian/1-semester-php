<html>
<head>
    <style>
        body {
            font-family:verdana;
        }
        h1 {
            color:red;
            font-size:50px;
        }
    </style>
</head>
<body>
<form action="" method="Post">
<h2>Is Felix Gay?</h2>
<label> Yes </label>
<input type="radio" id="test" name="felixgay" value="true"> <br>
<label> If Yes How Much from a scale 1-10? </label>
<input type="number" name="number" min="100"> <br><br>
<label> No </label>
<input type="radio" id="test" name="felixgay" value="false"> <br><br>
<input type="submit" name="submit">
</form>

<?php
if (isset($_POST["submit"])){
    $felixGay = $_POST["felixgay"];
    if ($felixGay == "true"){
        $i = 0;
        while ($i <= $_POST["number"]){
        echo "u R gay lmao | ";
        $i++;
        if ($i%9==0){
            echo "<br>";
        } }
    }
    else if ($felixGay == "false"){
        echo "<h1> 404 Repeat pls </h1>";
    }
}
?>
</body>
</html>

<!-- Name Eingeben können -->
<!-- requiered bei Nummer -->
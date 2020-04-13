<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML und PHP mischen</title>
    <style>
        .sun {
            width:200px;
            height:200px;
            border-radius:50%;
            background-color:#FFFF00;
            margin:auto;
        }

        .pyramide{
            width:0;
            height:0;
            border-left:300px solid transparent;
            border-right:300px solid transparent;
            border-bottom:300px solid #D2691E ;
            margin: 10 auto;
        }

        .pyramide2{
            width:0;
            height:180px;
            border-left:120px solid transparent;
            border-right:120px solid transparent;
            border-bottom:120px solid #D2691E ;
            margin: auto;
        }

        .pyramide3 {
            width:0;
            height:100px;
            border-left:100px solid transparent;
            border-right:100px solid transparent;
            border-bottom:100px solid #D2691E ;
            margin-left:50px
        }

        .beginn {
            margin-left:120px;
        }

        .pyramiden-con {
            display:flex;
            justify-content:space-around;
        }

        .container {
            display:flex;
            justify-content: flex-start;
        }

        .boden {
            background-color:#FF8C00;
            width:2000px;
            height:1000px;
            margin:0px auto;
        }

    </style>
</head>
<body style="background-color: #00FFFF">

<br><br><br><br><br><br>
    <div class="sun"></div>
    <div class="pyramiden-con">
        <div class="pyramide2"></div>
        <div class="pyramide"></div>
        <div class="pyramide2"></div>
    </div>
    <div class="boden">
        <div class="container">
            <div class="pyramide3 beginn"></div>
            <div class="pyramide3"></div>
            <div class="pyramide3"></div>
        </div>
    </div>
</body>
</html>
        

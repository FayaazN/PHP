<!DOCTYPE html>
<html>
<style>
    body{
        text-align: center;
    }

    img{
        border:black solid 3px;
        margin-right: 5px;
    }


</style>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
$spartelkuikens = 25;
$waterbuffels = 32;
$plonsmderin = 11;
$bommetje = 23;

echo "De spartelkuikens  <br><br>   ";

for($spartelkuikens = 1; $spartelkuikens <= 5; $spartelkuikens++){
    echo "<img src='img/zwemmer.png'> ";
}
echo "<br><br><br><br><br><br><br>";

echo "De Waterbuffels  <br><br>   ";
for($waterbuffels = 1; $waterbuffels <= 6; $waterbuffels++){

    echo "<img src='img/zwemmer.png'>";
}
echo "<br><br><br><br><br><br><br>";

echo "Plonsmderin  <br><br>   ";
for($plonsmderin = 1; $plonsmderin <= 2; $plonsmderin++){

    echo "<img src='img/zwemmer.png'>";

}
echo "<br><br><br><br><br><br><br>";

echo "Bommtje  <br><br>  ";
for($bommetje = 1; $bommetje <= 4; $bommetje++){

    echo "<img src='img/zwemmer.png'>";

}


?>
</body>
</html>
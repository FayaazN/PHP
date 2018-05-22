<!DOCTYPE html>
<html>
<head>
<style>
    body{
        text-align:center;
    }
</style>
</head>
<body>
<h1>ReisRekenTool</h1>
<form action="" method="get">
Leeftijd:  <input type="text" name="leeftijd">
    <input type="submit">
    <?php

     if($_GET["leeftijd"] > 65){
        echo "<br>jij krijgt 50% korting, en de reis kost nu 5 Euro";
     }

     else if($_GET["leeftijd"] < 3) {
        echo "<br>jij bent onder de 3 jaar, en dus gratis.";
        }
     else if($_GET["leeftijd"] <= 12){
             echo "<br>jij krijgt 50% korting, en de reis kost nu 5 Euro";
     }
     else if($_GET["leeftijd"] > 12){
         echo "<br> Jij betaalt 10 Euro";
     }
    ?>
</form>
</body>
</html>

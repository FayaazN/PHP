<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 22-5-2018
 * Time: 21:21
 */
?>

<!DOCTYPE html>
<html>
<head>
<style>
    body {
        text-align: center;
        color: green;

    }
</style>
<title>PHP</title>
</head>
<body>
<h1> Merry Christmas !</h1>
<?php
for($i = 0; $i <=100; $i++) {
    for($j = 0; $j<$i; $j++){
        echo "*";
    }
    echo "*<br>";

}
?>
</body>
</html>

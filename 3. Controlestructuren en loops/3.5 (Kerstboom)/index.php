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
    }
</style>
<title>PHP</title>
</head>
<body>
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

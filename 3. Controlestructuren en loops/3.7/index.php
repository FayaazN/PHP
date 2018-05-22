<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 22-5-2018
 * Time: 20:07
 */

?>

<!DOCTYPE html>
<html>
<style>
    body{
        text-align: center;
    }

    .rood{
        border:red solid 5px;
    }
</style>
<head>
    <title>PHP Opdrachten</title>
</head>
<body>
<?php
for($i = 1; $i<=9; $i++){
    if($i == 3){
        $class = "class='rood'";
    } else {
        $class = "";

    }
    echo "<img ".$class. "src='img/aap".$i.".jpg'>";
}

?>
</body>
</html>
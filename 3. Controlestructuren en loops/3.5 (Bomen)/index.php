<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 22-5-2018
 * Time: 20:32
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP</title>
</head>
<body>
<?

$bomen = array("boom1.jpg", "lillypilly1.jpg", "Maranchery_Biyyam_Kayal_kandal.jpg", "weeping-elm.jpg", "weeping-elm0091.jpg");

foreach($bomen as $boom) {
    echo"<img src=img/".$boom.">";
}
?>
</body>
<script>
    console.log("$bomen")
</script>
</html>

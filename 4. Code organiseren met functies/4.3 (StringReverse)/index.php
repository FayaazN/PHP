<!DOCTYPE html>
<style>
    body{
        text-align: center;
    }
</style>
<body>
<form action="" method="get" xmlns="http://www.w3.org/1999/html">
    Woord:  <input type="text" name="string">
    <input type="submit">
</form>
<?php

    function stringreverse()
    {
        $string = $_GET["string"]; //zet hier je string.
        $draaiom = strrev($string);
        echo $draaiom;
    }
    echo"<br>";
    stringreverse($draaiom);
?>

</body>
</html>

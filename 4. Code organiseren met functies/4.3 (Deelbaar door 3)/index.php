<!DOCTYPE html>
<style>
    body{
        text-align: center;
    }

    form {
        margin-bottom: 3px;
    }
</style>
<body>
<form action="" method="get" xmlns="http://www.w3.org/1999/html">
    Getal:  <input type="text" name="string">
    <input type="submit">
<?php
    function gedeelddoor()
    {
        $a = $_GET["string"];
        $b = 3;
        $c = $a % $b;
        echo $c;

        if ($c == 0) {
            echo " <br> True";
        } else if($c > 0){
            echo "<br> False";
        }
    }

    echo " <br>";
    gedeelddoor($c);
    echo "<br>";

?>

</body>
</html>

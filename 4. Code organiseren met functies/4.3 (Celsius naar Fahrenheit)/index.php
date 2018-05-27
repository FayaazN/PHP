
    <?php
      /*  $a = 20; //temperatuur is Celsuis
        $b = 1.8000; //keerfactor Celsuis naar Fahrenheit
        $c = 32; //plusfactor Celsius naar Fahrenheit
        $d = $a * $b + $c;
        echo $d;
*/
        function graden($a, $b, $c){
            $d = $a * $b + $c;
            return $a. " x " .$b. " + ".$c. " = ".$d;
        }

        echo graden(40,1.8000,32). "°F";


        ?>

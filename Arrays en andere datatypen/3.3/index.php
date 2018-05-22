<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 22-5-2018
 * Time: 19:00
 */

$alle["leeftijd"] = 12;
$alle["naam"] = "Jan";
$alle["telefoon"] = "0659315791";

foreach ($alle as $label => $waarde) {
    echo "de ".$label." is: ".$waarde."<br>";
}
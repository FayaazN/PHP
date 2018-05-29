<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 28-5-2018
 * Time: 09:21
 */
//print_r($_POST);
//echo "<img src='img/".$_POST['apen'].".jpg'>";

//print_r($_POST['apen']);

foreach($_POST['apen'] as $aap){
    echo "<img src='img/".$aap.".jpg'>";
}
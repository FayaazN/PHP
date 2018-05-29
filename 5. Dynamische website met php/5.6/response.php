<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 28-5-2018
 * Time: 09:21
 */




if (($_POST["email"] =="piet@worldonline.nl" && $_POST["wachtwoord"]=="doetje123") ||
    ($_POST["email"] =="klaas@carpets.nl" && $_POST["wachtwoord"]=="snoepje777") ||
    ($_POST["email"] =="truushendriks@wegweg.nl" && $_POST["wachtwoord"]=="arkiearkie201"
    )|| ($_POST["email"] =="nederlands@roc.nl" && $_POST["wachtwoord"]=="nederlands"
    ))
{
    echo "Welkom ".$_POST["email"]. ".";
}else {
    echo "Sorry, Je bent niet welkom";

}


<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 28-5-2018
 * Time: 09:21
 */
echo "Welkom ".$_POST['voornaam'];
echo "<br>";
echo "<br>";
echo "<br>";

if ($_POST["voornaam"] ==""){
    echo "je moet nog een naam invullen!";
    echo "<br><a href=\"form.html\">Terug naar het formulier<br></a>";
} else{
    echo "Uw Voornaam:".$_POST["voornaam"];
    echo"<br>";

}

if ($_POST["adres"] ==""){
    echo "je moet nog een adres invullen!";
    echo "<br><a href=\"form.html\">Terug naar het formulier<br></a>";
}else {
    echo "Uw Adres:" . $_POST["adres"];
    echo"<br>";
}

if ($_POST["email"] ==""){
    echo "je moet nog een email invullen!";
    echo "<br><a href=\"form.html\">Terug naar het formulier<br></a>";
}else {
    echo "Uw Email:" . $_POST["email"];
    echo"<br>";
}

if ($_POST["wachtwoord"] ==""){
    echo "je moet nog een wachtwoord invullen!";
    echo "<br><a href=\"form.html\">Terug naar het formulier<br></a>";
}else {
    echo "Uw Wachtwoord:" . $_POST["wachtwoord"];
    echo"<br>";
}


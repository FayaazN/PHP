<!DOCTYPPE html>
<html>
<head>
<title>PHP</title>
    <style>

    </style>
</head>
<body>
<ul>
    <?php
    $dieren = array("aap", "beer", "konijn", "vis");
        $sporten = array("handbal", "korfbal", "hockey", "schaatsen");
        shuffle($sporten);
        //shuffle($dieren);

        echo "<li>Er zijn ".count($sporten)." in de array</li>";

    geefArrayWeerAlsLijst($sporten);
    geefArrayWeerAlsLijst($dieren);

        function geefArrayWeerAlsLijst($arr){
            foreach($arr as $arr_element) {
                echo "<li>". $arr_element. "</li>";
            }
        }
    ?>


</ul>
</body>
</html>
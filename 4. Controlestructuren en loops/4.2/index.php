<?php
/**
 * Created by PhpStorm.
 * User: fanab
 * Date: 22-5-2018
 * Time: 19:53
 */

$nu = date('H'); //hoe laat is net nu (un uren)
if ($nu > 12) {
    echo "Het is middag/avond.";
} else if ($nu  > 6) {
    echo "Het is ochtend.";
} else {
    echo "Het is ,nacht.";
}

?>
<?php
    $color = array(4 => 'white', 6 => 'green', 11=> 'red');

    foreach ($color as $key => $value) {
        if ($key != "") {
            echo "$value";
            break;
        }
    }

    // echo reset($color) ntar mah

?>
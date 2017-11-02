<?php
    $color = array('white', 'green', 'red');
    $holder = 0;

    for ($i=0; $i < 3; $i++) {        
        echo ("$color[$i], ");

    }

    for ($i=1; $i < 3; $i++) {
        echo ("\n$color[$i]");

        if ($i == 2) {
            echo ("\n$color[0]");
        }

    }

    // ntar mah pake sort

?>
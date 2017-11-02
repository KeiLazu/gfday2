<?php
    $keigTempArray = array();

    echo "Array: \n";
    for ($i=0; $i < 10; $i++) { 
        $keiKeeper = rand(0,90);
        array_splice($keigTempArray,0,0,$keiKeeper);
        echo "$keiKeeper\n";

    }

?>
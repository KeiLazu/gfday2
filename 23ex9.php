<?php
    $keigTemperature = array(
        78, 60, 62, 68, 71, 
        68, 73, 85, 66, 64, 
        76, 63, 75, 76, 73, 
        68, 62, 73, 72, 65, 
        74, 62, 62, 65, 64, 
        68, 73, 75, 79, 73);

    /* bisa jg kaya gini $temptemp = 
    "78, 60, 62, 68, 71, 
    68, 73, 85, 66, 64, 
    76, 63, 75, 76, 73, 
    68, 62, 73, 72, 65, 
    74, 62, 62, 65, 64, 
    68, 73, 75, 79, 73"*/

    $keiHolder = 0;
    $keiAvgTemp = 0;
    $keiTotalTemp = count($keigTemperature);

    // Searching Average
    foreach ($keigTemperature as $value) {
        GLOBAL $keiHolder;
        $keiHolder += $value;

    }
    $keiAvgTemp = (intval($keiHolder) / intval($keiTotalTemp));
    echo "Average Temperature: $keiAvgTemp";

    // Searching top below 5
    sort($keigTemperature);
    echo "\nList of five lowest temperatures: ";
    for ($i=0; $i < 5; $i++) { 
        echo "$keigTemperature[$i], ";

    }
    
    rsort($keigTemperature);
    echo "\nList of five highest temperatures: ";
    for ($i=0; $i < 5; $i++) { 
        echo "$keigTemperature[$i], ";
    }

?>
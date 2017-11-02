<?php
    // $keigTempArray = array();

    // for ($i=200; $i < 250; $i++) { 
    //     // bisa dibagi 4 masukin ke array
    //     if ($i % 4 == 0) {
    //         array_splice($keigTempArray, 0, 0, $i);

    //     }

    // }
    // sort($keigTempArray);

    // foreach ($keigTempArray as $value) {
    //     echo "$value, ";

    // }

    // harusnya
    echo implode(",", range(200,250,4))."\n"

?>
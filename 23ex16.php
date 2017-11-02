<?php
    $keiArrayTemp = array('black' => 'hitam', 'white' => 'putih', 'green' => 'hijau', 
        'red' => 'merah', 
        'blue' => 'biru');

    // krsort($keiArrayTemp);
    // foreach ($keiArrayTemp as $key => $value) {
    //     echo $key;
    //     break;
    // }

    //harusnya
    $max_key = max(array_keys($keiArrayTemp));
    echo $max_key . "\n";

?>
<?php

    $Color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');

    echo "Values in lowercase\nArray (";
    foreach ($Color as $key => $value) {
        echo "[$key] => " . strtolower($value) . " ";

    }
    echo ")";

    echo "\n\nValues in Uppercase\nArray (";
    foreach ($Color as $key => $value) {
        echo "[$key] => " . strtoupper($value) . " ";

    }
    echo ")";

?>
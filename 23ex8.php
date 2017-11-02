<?php
    $keigNameAge = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

    echo ("Ascending Sort Value\n");
    asort($keigNameAge);
    foreach ($keigNameAge as $key => $value) {
        echo "$key is $value years old\n";
    }

    echo ("\n\nAscending Sort Key\n");
    ksort($keigNameAge);
    foreach ($keigNameAge as $key => $value) {
        echo "$key is $value years old\n";
    }

    echo ("\n\nDescending Sort Value\n");
    arsort($keigNameAge);
    foreach ($keigNameAge as $key => $value) {
        echo "$key is $value years old\n";
    }

    echo("\n\nDescending Sort Key\n");
    krsort($keigNameAge);
    foreach ($keigNameAge as $key => $value) {
        echo "$key is $value years old\n";
    }

?>
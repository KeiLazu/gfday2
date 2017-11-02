<?php
    $counting = array(1,2,3,4,5);
    $AmericanSpy = "\$";

    echo "Before: ";
    for ($i=0; $i < count($counting); $i++) { 
        echo "$counting[$i], ";

    }

    echo "\nAfter: ";
    for ($i=0; $i < count($counting); $i++) { 
        if ($i == 2) {
            array_splice($counting, 3,0, $AmericanSpy);

        }
        echo "$counting[$i], ";

    }

?>
<?php
    echo ("Break Section\n");
    $a = 0;
    $b = 0;

    for ($i=0; $i < 5; $i++) { 
        $a += 10;
        $b += 5;
        break;
    }

    echo ("$a is a value, $b is b value\n\n");

    echo ("Continue Section\n");
    $array = array( 1, 2, 3, 4, 5); 
    foreach( $array as $value ) { 
        if( $value == 3 ) 
            continue; 
        echo "Value is $value \n"; 
        
    }

?>
<?php
echo ("For Section \n");
$a = 0; 
$b = 0;

for($i=0; $i<5; $i++ ) {
    echo ("step $i\n");
    $a += 10; 
    $b += 5; 
};

echo ("At the end of the loop a=$a and b=$b\n\n");
echo ("While Section \n");

$j = 0; 
$num = 50;

while( $j < 10) { 
    $num--; $j++; 
} 
echo ("Loop stopped at i = $j and num = $num\n\n");

echo ("Do While Section\n");

$k = 0; 
$num = 0; 
do { 
    $k++; 
} while ( $k < 10 ); 
echo ("Loop stopped at k = $k\n\n" );

echo ("Array Foreach Section\n");
$array = array( 1, 2, 3, 4, 5); 
foreach( $array as $key => $value ) { 
    echo "$key is $value \n"; 
}

?>
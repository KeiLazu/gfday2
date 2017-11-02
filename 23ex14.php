<?php
    $keigArrayAlphabet = array("abcd","abc","de","hjjj","g","wer");

    // function sorting($a, $b) {
    //     return strlen($a) - strlen($b);
    // }

    // usort($keigArrayAlphabet, 'sorting');

    // foreach ($keigArrayAlphabet as $key => $value) {
    //     echo "$value, ";
    // }

    //harusnya
    $new_array = array_map('strlen', $keigArrayAlphabet);
    echo "Shortest " . min($new_array);
    echo "\nLongest " . max($new_array);

?>
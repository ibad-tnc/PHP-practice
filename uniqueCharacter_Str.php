<?php

function firstUniqueChar($str) {
    $len = strlen($str);

    for ($i = 0; $i < $len; $i++) {
        $unique_Ch = true;
        for ($j = 0; $j < $len; $j++) {
            if ($str[$i] == $str[$j] && $i != $j) {
                $unique_Ch = NULL;
                break; 
            }
        }
        if ($unique_Ch) {
            echo "First Unique character is: $str[$i]";
            exit;
        }
    }
    echo "No unique character.";
}
// $str = "leetcode";
// $str = "aabbcc";
firstUniqueChar("leetcode");
?>


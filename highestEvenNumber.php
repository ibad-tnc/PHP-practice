<?php

function getHighestEven($arr){
$len = count($arr);
$highestEven = NULL;

for($i=0; $i<$len; $i++){
    if($arr[$i] % 2 == 0 && $arr[$i] > $highestEven){
        $highestEven = $arr[$i];
    }
}
return $highestEven;
}

$arr = [3, 7, 12, 4, 9, 5];
//     if($highestEven == NULL){
//     echo "null";
// }
echo "Highest even number is : " .getHighestEven($arr);

?>
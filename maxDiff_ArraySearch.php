<?php

function findMaxDifference($arr){
    $len = count($arr);
    if($len>=2){
for($i=0; $i<$len; $i++){
    $maxDiff = 0;
    for($j=1; $j<$len; $j++){
        $diff = $arr[$j]-$arr[$i];
          if ($diff > $maxDiff){
        $maxDiff = $diff;
    }
    }
    echo "Maximum difference is $maxDiff";
    exit;
}
    }
    else{
        return 0;
    }
}
$arr = [2, 3, 10, 6, 4, 8, 1];
findMaxDifference($arr);
?>
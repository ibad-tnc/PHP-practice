<?php
$arr = [3, 7, 4, 9, 18, 5, 22];
$len = count($arr);
for($i=0; $i<$len; $i++){
    $highestEven = 0;
    for($j=1; $j<$len; $j++){
    if($arr[$i] % 2 == 0 && $arr[$i] > $arr[$j]){
        $highestEven = $arr[$i];
        // echo $highestEven;
    }
    // else if($arr[$i] % 2 == 0 && $arr[$i] < $arr[$j]){
    //     $highestEven = $arr[$j];
    //     echo $highestEven;
    // }
    else if($arr[$i] % 2== 0 && $arr[$i] == $arr[$j]){
        continue;
    }
echo $highestEven;
}

}
    // if( $arr[$i] % 2 == 1){
    //     continue;
    // }
?>
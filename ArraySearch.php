<?php

function findDuplicate(){
// $arr = [1,2,3,45,67,89,1]
$arr = [1,4,5,7,8,3,3,4,13,11,45];
$duplicateNum = NULL;
$len = count($arr);
if($len>=2 && $len<=1000){
	for ($i=0; $i<$len ; $i++){
		for($j=$i+1; $j<$len; $j++){
    		if($arr[$i] == $arr[$j]){
				$duplicateNum = $arr[$j];
            	echo "$duplicateNum ";
           		}      
       		 }
  		  }
		}

else if($len>1000){
echo 'Array is larger than Max.Length';
}

else {
	echo 'Array is shorter than Min.Length';
	}
}

findDuplicate();

?> 
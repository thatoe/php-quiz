<?php
function transformedArray(array $inputArray) : array {
    //your code here
    $zeros = 0;
    foreach($inputArray as $key=>$input){
        if($input == 0){
            $zeros++;
            unset($inputArray[$key]);
        }
    }
    
    if($zeros > 0){
        for($i=0;$i<$zeros;$i++){
            if($i%2 == 0){
                array_unshift($inputArray, 0);
            }
            else{
                array_push($inputArray , 0);
            }
        }
    }
    return $inputArray;
}

$input_arr = [1,2,3,0,3,0,0,9];
var_dump(transformedArray($input_arr));


?>
<?php
// 2. Logic Test 
// Write a PHP program that pushes half of the zeros in a given array to the beginning of the array, and the other half to the end. 
// Examples 1: 
// Input: [3,5,6,0,7,0,1] 
// Output: [0,3,5,6,7,1,0] 
// Examples 2: 
// Input: [5,0,0,6,0,8] 
// Output: [0,0,5,6,8,0] 
// Examples 3: 
// Input: [1,2,3,0,0,0,0] 
// Output: [0,0,1,2,3,0,0] 
// Examples 4: 
// Input: [1,2,3] 
// Output: [1,2,3] 
// function transformedArray(array $inputArray) : array { 
// //your code here 
// } 

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
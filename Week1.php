<?php
/* 
Task1
Write a range function that takes two arguments, start and end, 
and returns an array containing all the numbers 
from start up to (and including) end.
*/
function loneRanger($start, $ender){
	$my_array = range($start, $ender);
    print_r($my_array);

}

loneRanger(5, 9)
  
/*
Task2
Next, write a sum function that takes an array of numbers 
and returns the sum of these numbers.
*/

$arr = [0, 5, 9, 8, 5];

function sum($arr){
    $array_sum = array_sum($arr);
    return $array_sum;
}
print_r (sum($arr));

?>

<?php

function sum(int $num1 = 7, int $num2 = 21){
  return $num1 + $num2;
}

$result = sum(9, 23);
$result = sum($result, 10);
$result = sum($result);
var_dump($result);

// function hello ($str){
//     print($str);
// }

// hello("Hello World!");

?>

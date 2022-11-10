<?php

$num = 10;

function sum($n) {
  return $n + 10;
}

#######################
var_dump($num);

$num = sum($num);
var_dump($num);

$num = 13;
var_dump($num);

$num = sum($num);
var_dump($num);

?>
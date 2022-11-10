<?php 
$numbers = [100, 200, 111, 10, 256, 432];

var_dump($numbers);
array_push($numbers, 99);
var_dump($numbers);

$sum = 0;
foreach ($numbers as $number) {
  $sum = $sum + $number;
  print("計算の途中結果：" . $sum);
}

var_dump($sum);
var_dump(count($numbers));

$ave = $sum / count($numbers);
var_dump($ave);
?>

<?php

function getPrice($age, $isStudents=false, $waribiki = 1.0) {
  $basePrice = 1000 * $waribiki;
  if($age >= 60) {
    return $basePrice * 0.9;
  } elseif ($age <= 3) {
    return 0;
  } elseif ($age <= 15) {
    return $basePrice * 0.5;
  } else {
    if($isStudents==true) {
      return $basePrice * 0.9;
    } else {
      return $basePrice;
    }
  }
}

var_dump(getPrice(20, false));

?>
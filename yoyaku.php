<?php 
$customers = [];

// 受付待ち
array_push($customers, "太郎");
array_push($customers, "次郎");
array_push($customers, "三郎");
// ...

// 受付
var_dump($customers);

var_dump("次郎さんをご案内");
unset($customers[1]);
$customers = array_values($customers);

var_dump($customers);

?>
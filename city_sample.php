<?php

class City {
  public $code; // 都道府県コード
  public $name; // 都道府県名
  public $description; // 都道府県の説明・特徴

  // コンストラクタを定義する
  public function __construct(string $code) {
    $this->code = $code;
    if($code=='hokkaido') {
      $this->name = "北海道";
      $this->description = "海の幸がおいしい。";
    } else if($code=="aomori") {
      $this->name = "青森県";
      $this->description = "リンゴ";
    }
  }

  function getSpots(): array {
    if($this->code=='hokkaido') {
      return [
        [ 
          'name' => '札幌',
          'description' => '~~~~~~' // アピールポイント
        ],
        [ 
          'name' => 'xx',
          'description' => '~~~~~~' // アピールポイント
        ],
      ];
    } else if($this->code == 'aomori') {
      return [
        [ 
          'name' => '津軽海峡',
          'description' => '~~~~~~' // アピールポイント
        ],
        [ 
          'name' => 'xx',
          'description' => '~~~~~~' // アピールポイント
        ],
      ];
    }
  }
}

$hokkaido = new City('hokkaido');
var_dump($hokkaido->name);
var_dump($hokkaido->descrition);
var_dump($hokkaido->getSpots());
$aomori = new City('aomori');
var_dump($aomori->getSpots());

?>
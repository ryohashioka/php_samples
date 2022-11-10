<?php
class Car
{
    static $class_name = "Car";
    static function hello() {
      print("hello!");
    }

    public $name = ""; # 車種
    public $power = "";

    function __construct($name, $power){
      $this->name = $name;
      $this->power = $power;
    }
  
    function init($name, $power){
      $this->name = $name;
      $this->power = $power;
    }

    public function show() {
      print($this->name."(" . $this->power . ")" . "\n");
    }
}
# Carクラスのインスタンスを作成する
$aventador = new Car("アヴェンタドール", 780);
// $aventador->init("アヴェンタドール", 780);
$huracan = new Car("ウラカン", 640);
// $huracan->init("ウラカン", 640);

print($aventador->show());
print($huracan->show());

# Carクラス内にあるクラス変数$class_nameをターミナルに表示する
print(Car::$class_name);
print(Car::hello());
# ターミナルにはCarと表示される
?>
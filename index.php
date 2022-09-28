
<?php

class Car {
  public $name;
  public $price;

  public function  CarDetails(){
      $this->size="120";
      return "this is .$this->size. a tesla car";
  }
}

$obj = new Car;
echo $obj->name ="tesla";

$obj->price ="$2000";
echo $obj->price;
echo $obj->CarDetails();


?>
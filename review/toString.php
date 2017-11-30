<?php

class Car{

  private $hoge;

  public function __construct($hoge){
    $this->hoge = $hoge;
  }

  public function __toString(){
    return 'echo adfa' . $this->hoge;
  }
}

$car = new Car('car');
echo $car;

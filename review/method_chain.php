<?php

class Chain {
  private $price;
  private $quantity;
  private $option;

  public function setPrice($price){
    $this->price = $price;
    return $this;
  }

  public function setQuantity($quantity){
    $this->quantity = $quantity;
    return $this;
  }

  public function setOption($option){
    $this->option = $option;
    return $this;
  }

  public function total_amount(){
    $amount = $this->price * $this->quantity;
    foreach($this->option as $key => $val){
      if ($key == 'tax') $amount -= ceil($amount * $val);
      elseif($key == 'discount') $amount -= $val;
    }
    return $amount;
  }
}

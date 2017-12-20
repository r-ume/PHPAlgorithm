<?php

// abstractとinterfaceの違い 
// abstract
// 複数の派生先クラスで、一部の実装が異なる場合。
// 抽象クラス内で定義している、抽象メソッドは、必ず継承先でオーバーライドする必要があります。

// interface
// 不特定のクラスを共通の方法で、取り扱えるようにしたい場合。

// インターフェイスは、クラスに複数実装できるが、抽象クラスは１つしか継承できない。
// インターフェイスは、実装のあるメソッドを持つことができないが、抽象クラスは、実装のあるメソッドを持つことができる。

interface Communication{
  public function talk();
  public function hear($words);
}

abstract class Creature{
  abstract public function eat();

  public function sleep(){
    echo 'おやすみなさい';
  }

}

class Human extends Creature implements Communication{

  public function talk(){

  }

  public function hear($words){
    echo $words;
  }

  public function eat(){
    echo 'たべう';
  }

}

// エイリアン
class Alien extends Creature implements Communication{
  public function talk(){
    echo '█████!?';
  }

  public function hear($words){

  }

  public function eat(){
    echo 'ヒトうま';
  }
}

class Robot implements Communication{

  public function talk(){
    echo 'ガガピー';
  }

  public function hear($words){
  // 内蔵マイクで聞く
  }
}

$robot = new Robot();
$robot->talk();

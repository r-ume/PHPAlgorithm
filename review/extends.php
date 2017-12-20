<?php

class Parent_Class {

  public function work_item1($str){
    echo $str.'ParentClass';
  }

  public function work_item2(){
    echo 'Processing of workItem2 of ParentClass. <br>';
  }
}

class Child_Class extends Parent_Class{

  public function work_item1($str){
    echo $str.'Child_Class';
  }

  public function test(){
    $this->work_item2();
  }

}

$parent = new Parent_Class();
$parent->work_item1('Processing ');

$child = new Child_Class();
$child->work_item2();

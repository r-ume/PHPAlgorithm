<?php

class SelfAndThis{
	public $hoge = 'hoge';
	public static $fuga = 'fuga';

	public function piyo(){
		echo 'piyo';
	}
}

// proper ways of calling respective properties
$obj = new SelfAndThis();
$result1 = $obj->hoge;
$result2 = SelfAndThis::$fuga;

// improper ways of calling respective properties

// error - static properties can not get called by an object of the class.
$obj = new SelfAndThis();
$result3 = $obj->fuga;
// error - NON-static properties can not get called without making an instance
$result4 = SelfAndThis::$hoge;

var_dump($result1);
var_dump($result2);
// var_dump($result3); error 
// var_dump($result4); error




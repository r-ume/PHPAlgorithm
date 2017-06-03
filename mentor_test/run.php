<?php

class Run{

	static $record = [];

	public function __construct($distance){
		$this->distance = $distance;
	}

	public static function input(){
		$input = $argv;
	}

}

while(true){
	echo "[0]: 今日走った距離を入力する\n";
	echo "[1]: 走った距離の合計を見る\n";

	$input = fgets(STDIN);

	if($input[1] == (int) 0){
		Run.input
	}

	


}





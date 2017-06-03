<?php

class Bmi {

	static $bmis = [];

	public function __construct($name, $height, $weight){
		$this->name = $name;
		$this->height = $height;
		$this->weight = $weight;
	}

	public static function input() {
		echo "あなたの名前を入力してください\n";
		$name = trim(fgets(STDIN));
		echo "身長を入力してください : 単位(cm) \n";
		$height = trim(fgets(STDIN));
		echo "体重を入力してください : 単位(kg) \n";
		$weight = trim(fgets(STDIN));
		
		$bmi = new Bmi($name, $height, $weight);
		Bmi::$bmis[] = $bmi;
	}
	
	public static function show_result() {
		$line = "------------------------------\n";
		echo $line;

		foreach(Bmi::$bmis as $bmi){

			$result = intval($bmi->weight / (($bmi->height / 100)**2));
			//$result = $this->calculateBmi($bmi->weight, $bmi->height);

			if ($result >= 40) echo "肥満(4度)\n";
			if ($result >= 35) echo "肥満(3度)\n";
			if ($result >= 30) echo "肥満(2度)\n";
			if ($result >= 25) echo "肥満(1度)\n";
			if ($result >= 18) echo "普通体重\n";
			if ($result < 17) echo "低体重\n";
		}
        # 肥満度の計算
        echo $line;
	}

	// good thing to learn -> this calculateBmi function cannot get called in show_result function because show_result is static
	private function calculateBmi($weight, $height){
		return intval($weight / (($height / 100)**2));
	}

}

while(true){
	echo "[0]:データを入力する\n";
	echo "[1]:BMIの結果を見る\n";
	echo "[2]:終了する\n";

	$input = intval(fgets(STDIN));
	
	if($input == 0){
		Bmi::input();
	}else if ($input == 1){
		Bmi::show_result();
	}else if ($input == 2){
		exit;
	}else{
		exit;
	}
}

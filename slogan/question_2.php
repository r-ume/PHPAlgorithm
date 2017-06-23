<?php

// 1から1,000,000までの全ての素数を出力するプログラムを作成してください。
// 例　2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97 101

$assigned_number = 1000000;
$prime_numbers = [];

function is_prime($num){

	// 1は素数ではない
	if($num == 1) return false;

	// 2は素数である
	if($num == 2) return true;

	// 2以外の偶数は、素数ではない。
	if($num % 2 == 0) return false;

	// ceilを使ったのは、保険のため

	$ceil = ceil(sqrt($num));
	// 割り切れたら、素数ではない
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0) return false;
    }

    return true;
} 


for($i = 0; $i <= $assigned_number; $i++){
	if(is_prime($i)){
		$prime_numbers[] = $i;
	}
}

var_dump($prime_numbers);
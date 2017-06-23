<?php 

/*
1から3,000までの全てのPPAP素数を出力してください。ここで、PPAP素数とは、以下のような条件を満たす素数を指します。
定義) 整数nに対して、n番目の素数をp_nとします。以下の2つの条件を満たすとき、nをPPAP素数とします。
 1. n自身が素数
 2. nとp_nを横に並べた数もまた素数
例) 2017は素数ですが、2017番目の素数p_2017 = 17539と並べた数201717539もまた素数なので、「2017」はPPAP素数となります。
*/


$ppap_arr = [];
$prime_numbers = [];
$prime_numbers_for_ppap = [];
$assigned_number = 3000;
$getting_close_to_three_thousand = true;

function is_prime($num){

	if($num == 1) return false;

	if($num == 2) return true;

	if($num % 2 == 0) return false;

	$ceil = ceil(sqrt($num));
    for($i = 3; $i <= $ceil; $i = $i + 2) {
        if($num % $i == 0) return false;
    }

    return true;
} 

for($i = 1; $i < $assigned_number; $i++){
	if(is_prime($i)) $prime_numbers[] = $i;
}

while($getting_close_to_three_thousand){
	$num = 0;

	if(is_prime($num)){
		$prime_numbers_for_ppap[] = $num;
		$num = $num + 1; 
	}

	if((int)count($prime_numbers_for_ppap) == 3000){
		$getting_close_to_three_thousand  = false;
	} 

}

function is_ppap(){
	if($index = 0; $index < $assigned_number; $index++){
		$ppap_int = $prime_numbers[$index] + $prime_numbers_for_ppap[$index];
		if(is_prime($ppap_int) $ppap_arr[] = $ppap_int;
	}
}

echo('<pre>');
var_dump($ppap_arr);
echo('</pre>');
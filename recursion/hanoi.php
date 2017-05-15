<?php

echo "hanoi 2 \n";
hanoi(2, "A", "B", "C");

echo "\n";

echo "hanoi 3 \n";
hanoi(3, "A", "B", "C");

function hanoi($n, $a, $b, $c){
	if($n > 0){
		hanoi($n-1, $a, $b, $c);
		echo "moving $n th hanoi from $a to $b";
		echo "\n";
		hanoi($n-1, $a, $b, $c);
	}
}

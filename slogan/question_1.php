<?php

function FizzBuzz($input){
	if($input % 15 == 0){
		echo "FizzBuzz";
	} else if ($input % 5 == 0){
		echo "Buzz";
	} else if ($input % 3 == 0){
		echo "Fizz";
	}
}


$input = (int)fgets(STDIN);

FizzBuzz($input);
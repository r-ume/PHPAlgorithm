<?php

// Two strings are given.
// Make a function that checks if letters in one given string are in a different order in the other given string. 
// dog -> dgo true

$str = 'dog';
$str2 = 'dgo';
$result = '';

function original_sort($str){
	$str = str_split($str);
	sort($str);
	return $str;
}

function permutation($str, $str2){
        if(strlen($str) != strlen($str2)){
                return "false";
        }else{
                if(original_sort($str) == original_sort($str2)){
                        return "true";
                }
                else{
                        return "false";
                }
        }
}

$result = permutation($str, $str2);
echo $result;

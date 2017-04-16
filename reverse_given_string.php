<?php

// reverse the order of letters of given string。

$str = 'banana';
$result = '';

function reverse_string($str) {
        $arr = str_split($str);
        $reverse_arr = '';
        while($arr){
                // $array_popは配列の末尾から要素をとるもの
                $reverse_arr .= array_pop($arr);
        }
        return $reverse_arr;
}

$result = reverse_string($str);
echo $result;

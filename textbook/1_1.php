<?php

// 与えられた文字列が全てユニークか

$str = 'abca';
$result = '';

function check_unique($str){
        // get length
        $len = strlen($str);
        // 文字列をばらして、配列にする。
        $arr = str_split($str);

        for($i = 0; $i < $len; $i++){
                $char = array_shift($arr);
                if(in_array($char, $arr)){
                        return 'false';
                }
        }

        return 'true';
}

$result = check_unique($str);
echo $result;
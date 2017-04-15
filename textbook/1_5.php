<?php
/**
 * Created by PhpStorm.
 * User: RyosukeUmeki
 * Date: 2017/02/04
 * Time: 15:16
 */

//文字の連続する数を使って、基本的な文字列圧縮をするプログラムを実装してください
// aabcccccaaa

$str = 'aabcccaaa';
$result = '';

function compressStr($str){
        $len = strlen($str);
        $str = str_split($str);
        $tmp_str = '';
        $last_str = $str[0];
        $count = 1;

        for($i = 1; $i < $len; $i++){
                if($str[$i] == $last_str){
                        $count++;
                } else {
                        $tmp_str .= $last_str +  $count;
                        $last_str = $str[$i];
                        $count = 1;
                }
        }
        return $tmp_str + $last_str + $count;
}

$result = compressStr($str);
echo $result;

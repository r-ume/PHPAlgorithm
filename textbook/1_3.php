<?php
/**
 * Created by PhpStorm.
 * User: RyosukeUmeki
 * Date: 2017/02/04
 * Time: 14:01
 */

// 2つの文字列が与えられたとき、片方がもう片方の並び変えになっているのかどうかを決定するプログラムを実装しなさい

$str = 'dog';
$str2 = 'dgo';
$result = '';

function sort_umeki($str){
        $str = str_split($str);
        sort($str);
        return $str;
}

function permutation($str, $str2){
        if(strlen($str) != strlen($str2)){
                return "false";
        }else{
                if(sort_umeki($str) == sort_umeki($str2)){
                        return "true";
                }
                else{
                        return "false";
                }
        }
}

$result = permutation($str, $str2);
echo $result;



//
////　自分の書き方
//function umeki_sort($str, $str2){
//        $len = strlen($str);
//        $len2 = strlen($str2);
//
//        // 文字列をバラバラにし、配列に
//        $str = str_split($str);
//        $str2 = str_split($str2);
//
//        sort($str, SORT_STRING);
//        sort($str2, SORT_STRING);
//
//        // 文字列の長さが違かったら、アウト
//        if($len != $len2) {
//                return "false";
//        }else {
//                for($i = 0; $i <= $len; $i++){
//                        // 一つ一つ要素を確かめる。
//                        if($str[$i] == $str2[$i]){
//                                continue;
//                        }else{
//                                return "false";
//                        }
//                }// for
//        } //else
//        return "true";
//}//umeki_sort



<?php

/*
 * バブルソート
 * 隣り合う要素の大小を比較しながら、整列させること。
 * 最後の要素から、1個ずつ順々に見ていき、一個ずつ最小値を出していく。
 * これをソートしたい数-1回分行う。
 */

$list = array(9, 8, 7, 6, 5, 4, 3, 2, 1, 0);

$listCount= count($list);

$sortedCount = 0;

while($sortedCount < $listCount - 1){
    $last = $listCount - 1;

    for ($index = $listCount - 1; $index > $sortedCount; $index--) {
        if($list[$index - 1] > $list[$index]) {
            //１個前の要素の方が大きい時、自分のと1個前の値を交換する
            $tmp              = $list[$index-1];
            $list[$index - 1] = $list[$index];
            $list[$index]     = $tmp;
            
            $last = $index;
        }
    }
    
     $sortedCount = $last;
     echo $sortedCount . '個昇順にソート済み';
     echo '<br>';
}

var_dump($list);

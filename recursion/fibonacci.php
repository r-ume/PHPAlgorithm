<?php

/*
 * フィボナッチ整列
 */

echo 'メモ化再帰を使わない場合のgetFib(35)を求める。';
echo '<br>';

$startTime = microtime(true);

echo 'getFib(35)の答えは、' . getFib(35);

$endTime = microtime(true);

$deltaTime = $endTime - $startTime;

echo '<br>処理にかかった時間は、' . $deltaTime . 'ミリ秒です。';
echo '<br><br>';


$startTime = microtime(true);

echo 'getFibWithMemo(35)の答えは、' . getFibByMemo(35);

$endTime = microtime(true);
$deltaTime = $endTime - $startTime;

function getFib($n){
	if ($n == 0) return 1;
	if ($n == 1) return 2;
	return getFib($n - 1) + getFib($n - 2);
}

$memo = [];

function getFibByMemo($n){
	global $memo;

	if($n == 0) return 1;
	if($n == 1) return 2;
	if(isset($memo[$n])) return $memo[$n];

	return $memo[$n] = getFibByMemo($n - 1) + getFibByMemo($n - 2);
}

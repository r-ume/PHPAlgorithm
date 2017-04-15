<?php

/* binarySearch
 * A technique for searching an ordered list in which it first checks the middle item and based on that comparison it discards the other half the records.
 * The same procedure is then applied to the remaining half until a match is found or there are no more items left
 */

/* Question
 * Find 95400 in the array.
 */

define('SEARCHINGVALUE', 95400);

//0から100000の配列を生成。stepは1
$list = range(0, 100000 , 1);
$startTime = microtime(true);
$listCount = count($list);
$startTime = microtime(true);
$firstIndex  = 0;
$lastIndex   = $listCount - 1;
$isFind = false;

do {
    $centerIndex = (Int) (($firstIndex + $lastIndex) / 2);
    if ($list[$centerIndex] == SEARCHINGVALUE) {
        $isFind = true;
        echo 'Found the key'. $centerIndex;
        break;
    } else if ($list[$centerIndex] < SEARCHINGVALUE) {
        $firstIndex = $centerIndex + 1;
    } else if ($list[$centerIndex] > SEARCHINGVALUE) {
        $lastIndex = $centerIndex - 1;
    }
} while($firstIndex <= $lastIndex);
if (!$isFind) {
    echo 'didn'/'t find any';
}

$endTime = microtime(true);
$deltaTime = $endTime - $startTime;
echo('It took' . $deltaTime . 'to deal with the action');
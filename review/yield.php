<?php

// 二次元配列
$num_lists = [
  [1, 2, 3],
  [4, 5, 6],
  [7, 8, 9],
];

// 二次元配列を二重のループで展開 ==================
//foreach ($num_lists as $nums) {
//  foreach ($nums as $num) {
//    echo "\$num is $num.\n";
//  }
//}

// ジェネレータを使う ==============================
// ジェネレータ関数に二重のループ部分を押し込む
function flatten($num_lists) {
  foreach ($num_lists as $nums) {
    foreach ($nums as $num) {
      yield $num;
    }
  }
}

// フラットに値が返ってくるので素直にループ
foreach (flatten($num_lists) as $num) {
  echo "\$num is $num.\n";
}

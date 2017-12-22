<?php

// PHPでfalseになるとき

// boolean の FALSE
// integer の 0 (ゼロ)
// float の 0.0 (ゼロ)
// 空の文字列、 および文字列の "0"
// 要素の数がゼロである 配列
// 特別な値 NULL (値がセットされていない変数を含む)
// 空のタグから作成された SimpleXML オブジェクト

$false = false;
if ($false) {
  echo 'true';
}else {
  echo 'false';
}

$num = 0;
if($num){
  echo 'true';
}else {
  echo 'false';
}

$string_num = '0';
if($string_num){
  echo 'true';
}else{
  echo 'false';
}




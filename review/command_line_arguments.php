<?php

echo "入力もう一回";

$input = fgets(STDIN);

echo "コマンドライン引数は、配列の形で変数に入る。";
var_dump($argv);

echo "入力されたものは、{$input}";

<?php

$callback = function($num){
  return $num < 5;
};
$array = [1, 2, 5, 7, 10];
$filtered_items = array_filter($array, $callback);
var_dump($filtered_items);

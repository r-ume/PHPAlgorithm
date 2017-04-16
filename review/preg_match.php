<?php

$str = '201602_1_0,153-0044,東京都目黒区,大橋1-5-1,松村たかひり,201602_1_0_f.jpeg,201602_1_0_b.jpeg';
 preg_match('/(20[0-9]{4})_([0-9]{1,6}+)_([0-9]{1}+)/', $str, $matches);

var_dump($matches);

$str = '201510_739_0';
preg_match('/^(20[0-9]{4})_([0-9]+)(_[0-9]+)?$/', $str, $matches);
var_dump($matches);

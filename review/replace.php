<?php

// Replace all empty spaces in a given string with %20

$str = 'suika';

$result = str_replace(' ', '%20', $str);

var_dump($result);

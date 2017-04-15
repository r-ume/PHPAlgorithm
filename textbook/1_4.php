<?php
/**
 * Created by PhpStorm.
 * User: RyosukeUmeki
 * Date: 2017/02/04
 * Time: 14:38
 */

// 文字列内に出てくるsすべての空白文字を"%20"で置き換えるメソッドを書いてください。
$str = 'ryosuke umeki';

$result = str_replace(' ', '%20', $str);

var_dump($result);

strlen($str);
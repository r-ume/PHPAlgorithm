<?php

function pc_permute($items, $perms = []) {
	if (empty($items)) {
		$return = array($perms);
	}  else {
		$return = [];
		for ($i = count($items) - 1; $i >= 0; --$i) {
			$newitems = $items;
			$newperms = $perms;
			list($foo) = array_splice($newitems, $i, 1);
			array_unshift($newperms, $foo);
			$return = array_merge($return, pc_permute($newitems, $newperms));
		}
	}
	return $return;
}

$arr = ['1', '2', '3'];
foreach(pc_permute($arr) as $permuted){
	var_dump(implode($permuted, ''));
};

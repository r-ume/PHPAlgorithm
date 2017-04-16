<?php

function warizan($num1, $num2){
    if($num2 == 0){
            throw new Exception("0では除算できません");
    }
    return $num1/$num2;
}

try{
    echo warizan(6, 0);
}catch (Exception $e){
    echo "エラー" . $e->getMessage();
}
<?php

class Television{
    private $channelNo;

    // コンストラクタの書き方
    function _construct(){
        $this->channelNo = 8; // Javaの　this.変数＝　みたいな書き方
    }

    function getChannel(){
        return $this->channelNo;
    }
}

// コンストラクタの書き方
$tvl = new Television();
print('the current channel'.$tvl -> getChannel().'<br>');
     
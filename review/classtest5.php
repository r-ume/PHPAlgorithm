<?php

class Television{
    private $channelNo = 8;

    const MAX_CHANNEL = 12;
    const MIX_CHANNEL = 1;
    const ERROR_MSG = 'choose a channel from 1 to 12<br>';

    // またクラス内からこの定数の値を参照するには"self::定数名"のように記述します。
    function setChannel($channel){
        if (($channel >= self::MIX_CHANNEL) and ($channel <= self::MAX_CHANNEL)){
            $this -> channelNo = $channel;
        } else {
            print(self::ERROR_MSG);
        }
    }

    function getChannel(){
        return $this -> channelNo;
    }
}

// 定数onstの使い方のプログラム
$tv = new Television();

$tv -> setChannel(20);
print('the current channel is'.$tv -> getChannel().'<br>');

$tv -> setChannel(10);
print('the current channel is'.$tv -> getChannel().'<br>');
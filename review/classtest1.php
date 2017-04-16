<?php
class Television{
    public $channelNo;
    
    function dispChannel(){
      print('現在のチャンネルは'.$this->channelNo);
    }
}

// Televisionクラスのインスタンス作成
$tv = new Television();

// インスタンスからクラス内の変数にアクセスする方法
$tv -> channelNo = 8;

// インスタンスからクラス内の関数にアクセスする方法
$tv -> dispChannel();
<?php

class Media{

  private $type;

  public function __construct($type){
    $this->type = $type;
  }

  public function getType(){
    return $this->type;
  }
}

class Television extends Media{
  private $channelNo;
  private $type;

  // コンストラクタの書き方
  function __construct($type){
    parent::__construct($type);
    $this->type = $type;
    $this->channelNo = 8; // Javaの　this.変数＝　みたいな書き方
  }

  function getChannel(){
    return $this->channelNo;
  }
}

// コンストラクタの書き方
$tvl = new Television('Television');
print('the current channel'.$tvl->getType().'<br>');
     

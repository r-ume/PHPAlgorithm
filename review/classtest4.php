<?php

class Television{
    private $channelNo = 8;
    
    function setChannel($channel){
      if(($channel >= 1) and ($channel <= 12)){
        $this->channelNo = $channel;
      } else {
        print('choose a channel from 1 to 12<br>');
      }
    }
    
    function getChannel(){
      return $this->channelNo;
    }
}

$tv = new Television();

// 出力結果は "choose a channel from 1 gto 10"
$tv -> setChannel(20);

// 出力結果は "The current channel is 8"
print('The current channel is '.$tv -> getChannel().'<br>');

// the result is "The current channel is 10"
$tv -> setChannel(10);
print('The current channel is '.$tv -> getChannel().'<br>');


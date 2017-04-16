<?php
class Television{
    
    public $channelNo;
    
    function dispChannel(){
    print("The current channel" . $this->channelNo);
    }
    
    function setChannel($channel){
    $this->channelNo = $channel;
    $this->dispChannel();
    }
}

$tv = new Television();
$tv -> setChannel(5);
<html>
  <head>
    <title>PHP TEST</title>
  </head>

  <body>

    <?php

      $tv = new Television();
      $tv->channelNo = 5; // システムエラーになる　
                            //このtelevisionクラスしかアクセスできない
      $tv->dispChannel();

      class Television{
        private $channelNo;

        function dispChannel(){
          print('現在のチャンネルは'.$this->channelNo);
        }
      }

    ?>
</body>
</html>

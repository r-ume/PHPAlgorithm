<?php

class User{
    public function getByID($ID = null){
        if(!empty($ID)){
            try{
            // DBからdataを取ってきたりする
            }catch(PDOException $e){
                    throw $e;
            }
        } else{
            throw new Exception('IDがないよ~');
        }
    }
}

$user = new User();

try{
    $user->getByID($ID);
}catch(PDOException $e) {
    echo 'PDOException' . $e->getMessage();
}catch(Exception $e){
    echo 'Exception' . $e->getMessage();
}
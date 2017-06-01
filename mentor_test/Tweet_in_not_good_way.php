<?php


class Tweet{

	static $tweets = [];

	function __construct($name, $post){
		$this->name = $name;
		$this->post = $post;
	}

	static function input_tweet(){
		echo "Put your name";
		$name = trim(fgets(STDIN));
		echo "Post your tweet";
		$post = trim(fgets(STDIN));

		$tweet = new Tweet($name, $post);
		Tweet::$tweets[] = $tweet;
	}

	static function read_tweet(){
		$line = "-----";

		if(empty(Tweet::$tweets){
			echo "Any tweets have not been posted yet";
			return;
		}else{
			echo "Name: Tweet";
			echo $line;
			foreach(Tweet::$tweets as $tweet){
				echo "$tweet->name : " . $tweet->post . "\n";
			}
			echo $line;
		}
	}

	static function destroy_tweet(){
		if(empty(Tweet::$tweets){
			echo "Any tweet has not been poseted yet";
			return;
		}

		while(true){
			echo "Choose the number of the tweet you would like to delete";
			for($i = 0; $i < count(Tweet::$tweets); $i++){
				echo "[num] : ". Tweet::$tweets[$i]->name . "\n";  
			}

			$input = trim(fgets(STDIN));
			
			if($input <= count(Tweet::$tweet) && $input > 0){
				unset(Tweet::$tweets[$input - 1]);
				Tweet::$tweets = array_values(Tweet::$tweets);

				echo "Deletion Completed";
				break;
			}else{
				Tweet::exeption();
			}
		}
	}

	static function end_program(){
		echo "Thank you for using this application";
		exit;
	}

	static function execption(){
		echo "Input number is invalid. Try again";
	}
}

while(true){
	echo "Choose the number\n";

	echo "[0] : Post a tweet.\n";
	echo "[1] : See all tweets.\n";
	echo "[2] : Delete a chosen tweet.\n";
	echo "[3] : Close this application.\n";

	$input = (int)trim(fgets(STDIN));

	if($input == 0){
		Tweet::input_tweet();
	} else if ($input == 1){
		Tweet::read_tweet();
	} else if ($input == 2){
		Tweet::destroy_tweet();	
	} else{
		Tweet::execption();
	}
}


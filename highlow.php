<?php 

$randomn = mt_rand($argv[1], $argv[2]);
var_dump($randomn);


function playHighLow(){

// $randomn = rand(php1, 100);
echo $randomn;
// echo $random;
$guess;
$score = 100;

	do {
		// echo $randomn;
		fwrite(STDOUT, 'Guess a number between 1 & 100 ');

		$guess = intval(fgets(STDIN));
		var_dump($guess);
		if (!is_numeric($guess)){
			echo "make sure yr guess is a number between 1 and 100";
			// playHighLow();
			fwrite(STDOUT, 'Guess a number between 1 & 100 ');
			$guess = fgets(STDIN);
			// playHighLow();
		}
		elseif($guess == $randomn) {
			echo "GOOD GUESS! SCORE IS " . $score . PHP_EOL;
			playHighLow();
		}
		elseif($guess < $randomn - 15){
			var_dump($guess);
			echo "MUCH HIGHER!" . PHP_EOL;
			$score--;
		}
		elseif($guess < $randomn){
			var_dump($guess);
			echo "HIGHER!" . PHP_EOL;
			$score--;
		}
		elseif($guess > $randomn + 15){
			var_dump($guess);
			echo "MUCH LOWER!" . PHP_EOL;
			$score--;
		}
		elseif($guess > $random){
			var_dump($guess);
			echo "LOWER" . PHP_EOL;
			$score--;
		}
	} while($guess != $random);
}

playHighLow();


// echo $randomn;


 ?>
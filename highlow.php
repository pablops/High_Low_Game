<?php 


function playHighLow(){

$randomn = mt_rand(0, 100);
$guess;
$score = 100;

	do {
		// echo $randomn;
		fwrite(STDOUT, 'Guess a number between 1 & 100 ');

		$guess = trim(fgets(STDIN));
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
			echo "MUCH HIGHER!" . PHP_EOL;
			$score--;
		}
		elseif($guess < $randomn){
			echo "HIGHER!" . PHP_EOL;
			$score--;
		}
		elseif($guess > $randomn + 15){
			echo "MUCH LOWER!" . PHP_EOL;
			$score--;
		}
		elseif($guess > $random){
			echo "LOWER" . PHP_EOL;
			$score--;
		}
	} while($guess != $random);
}

playHighLow();


// echo $randomn;


 ?>
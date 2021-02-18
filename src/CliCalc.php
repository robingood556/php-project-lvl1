<?php

declare(strict_ytpes=1)

include '../vendor/autoload.php';

use function cli\line;
use function cli\prompt;


function Game()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');



for($i = 0; $i < 3; $i++){

$firstnumber = rand();
$secondnumber = rand();

$arr = ['-', '+', '*'];
$key = array_rand($arr);
$sign = $arr[$key];

print("Qustion: ". $firstnumber. $sign. $secondnumber.  "\n");
$answer = prompt('Your answer: ');

if($sign == "+"){

	$correctanswer = $firstnumber + $secondnumber;
}elseif($sign == "-"){

	$correctanswer = $firstnumber - $secondnumber;
}elseif($sign == "*"){

	$correctanswer = $firstnumber * $secondnumber;
}
 
    if($answer == $correctanswer){

		$responce = "Correct" ;
    }elseif($answer != $correctanswer) {
		$responce = $answer . " is wrong answer ;(. Correct answer was ". $correctanswer ;
}

print $responce . "\n";

if($responce != "Correct"){

        break;

}elseif(($i == 2) && ($responce == "Correct")){
        print "Congrats";
}


}

}

Game();
print("\n");


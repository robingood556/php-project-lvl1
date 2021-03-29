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

print("Qustion: ". $firstnumber. " ". $secondnumber.  "\n");

$answer = prompt('Your answer: ');

while(($firstnumber > 0) && ($secondnumber > 0)){
        if($firstnumber > $secondnumber){

                $firstnumber %= $secondnumber;
                $third = $firstnumber;
                $firstnumber = $secondnumber;
                $secondnumber = $third;
        }else{
                $secondnumber %= $firstnumber;
                $third = $secondnumber;
                $secondnumber = $firstnumber;
                $firstnumber = $third;
        }


}
$correctanswer = $firstnumber + $secondnumber;

if($answer == $correctanswer){

	$responce = "Correct";
}else{
	$responce = $answer . "is wrong". $correctanswer;
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


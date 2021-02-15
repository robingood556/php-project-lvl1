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

$number = rand();
print("Qustion: ". $number. "\n");
$answer = prompt('Your answer: ');


    if(($number % 2 === 0) && ($answer === "yes")) {
        $responce = "Correct";
    }elseif(($number % 2 !== 0) && ($answer === "no")) {
        $responce = "Correct";
    }elseif(($number % 2 !== 0) && ($answer === "yes")) {
        $responce = "yes is wrong answer ;(. Correct answer was no";
    }elseif(($number % 2 === 0) && ($answer === "no")) {
        $responce = "no is wrong answer ;(. Correct answer was yes";
    }else{
        $responce = "dont correct";
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


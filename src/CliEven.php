<?php

declare(strict_types=1);

include '../vendor/autoload.php';

use function cli\line;
use function cli\prompt;



line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');




$number = rand();
print("Qustion: ". $number. "\n");
$answer = prompt('Your answer: ');

function CorrectedAns(int $number, string $answer)
{
    if(($number % 2 === 0) && ($answer === "yes")){
        print "Correct";
    }elseif(($number % 2 !== 0) && ($answer === "no")){
        print "Correct";
    }elseif(($number % 2 !== 0) && ($answer === "yes")) {
        print "yes is wrong answer ;(. Correct answer was no";
    }else{
        print "no is wrong answer ;(. Correct answer was yes";
    }
}

CorrectedAns($number, $answer);
print("\n");


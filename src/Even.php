<?php

namespace Brain\Games\Even;

use function cli\line;
use function cli\prompt;

function startGame($name)
{
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $answers = ['yes', 'no'];
    for ($q = 0; $q < 3; $q++) {
        $number = rand();
        $correctAnswer = $answers[$number % 2];
        $answer = prompt("Question: {$number}");
        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}

<?php

namespace Brain\Games\Games\Even;

use function cli\line;

function game(string $name): string
{
    $correctAnswer = null;
    $number = rand(1, 100);
    if ($number % 2 === 0) {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }
    line("Question: {$number}");
    return $correctAnswer;
}

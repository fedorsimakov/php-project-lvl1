<?php

namespace Brain\Games\Games\Prime;

use function cli\line;

function game(string $name): string
{
    $correctAnswer = null;
    $number = rand(2, 100);
    $correctAnswer = 'yes';
    for ($i = 2; $i <= round($number / 2, 0, PHP_ROUND_HALF_DOWN); $i++) {
        if ($number % $i === 0) {
            $correctAnswer = 'no';
        }
    }
    line("Question: {$number}");
    return $correctAnswer;
}

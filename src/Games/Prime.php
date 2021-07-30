<?php

namespace Brain\Games\Games\Prime;

use function cli\prompt;

function game(string $name): array
{
    $number = rand(2, 100);
    $correctAnswer = 'yes';
    for ($i = 2; $i <= round($number / 2, 0, PHP_ROUND_HALF_DOWN); $i++) {
        if ($number % $i === 0) {
            $correctAnswer = 'no';
        }
    }
    $answer = prompt("Question: {$number}") ;
    $result['correctAnswer'] = $correctAnswer;
    $result['answer'] = $answer;
    return $result;
}

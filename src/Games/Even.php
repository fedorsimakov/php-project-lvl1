<?php

namespace Brain\Games\Games\Even;

use function cli\prompt;

function game(string $name): array
{
    $number = rand(1, 100);
    if ($number % 2 === 0) {
        $correctAnswer = 'yes';
    } else {
        $correctAnswer = 'no';
    }
    $answer = prompt("Question: {$number}") ;
    $result['correctAnswer'] = $correctAnswer;
    $result['answer'] = $answer;
    return $result;
}

<?php

namespace Brain\Games\Games\Calc;

use function cli\prompt;

function game(string $name): array
{
    $operators = ['-', '+', '*'];
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $operatorIndex = rand(0, 2);
    switch ($operators[$operatorIndex]) {
        case '-':
            $correctAnswer = $firstNumber - $secondNumber;
            break;
        case '+':
            $correctAnswer = $firstNumber + $secondNumber;
            break;
        case '*':
            $correctAnswer = $firstNumber * $secondNumber;
            break;
    }
    $answer = (int) prompt("Question: {$firstNumber} {$operators[$operatorIndex]} {$secondNumber}");
    $result['correctAnswer'] = $correctAnswer;
    $result['answer'] = $answer;
    return $result;
}

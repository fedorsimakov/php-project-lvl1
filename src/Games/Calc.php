<?php

namespace Brain\Games\Games\Calc;

use function cli\line;

function game(string $name): ?int
{
    $correctAnswer = null;
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
    line("Question: {$firstNumber} {$operators[$operatorIndex]} {$secondNumber}");
    return $correctAnswer;
}

<?php

namespace Brain\Games\Games\Gcd;

use function cli\line;

function game(string $name): int
{
    $correctAnswer = null;
    $firstNumber = rand(1, 100);
    $secondNumber = rand(1, 100);
    $remaindersOfDivision = [];
    $remaindersOfDivision[] = max($firstNumber, $secondNumber);
    $remaindersOfDivision[] = min($firstNumber, $secondNumber);
    $i = 1;
    while ($remaindersOfDivision[$i - 1] % $remaindersOfDivision[$i] !== 0) {
        $remaindersOfDivision[] = $remaindersOfDivision[$i - 1] % $remaindersOfDivision[$i];
        $i++;
    }
    $correctAnswer = $remaindersOfDivision[$i];
    line("Question: {$firstNumber} {$secondNumber}");
    return $correctAnswer;
}

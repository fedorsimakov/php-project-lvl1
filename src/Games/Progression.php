<?php

namespace Brain\Games\Games\Progression;

use function cli\line;

function game(string $name): ?int
{
    $correctAnswer = null;
    $progression = [];
    $a1 = rand(1, 20);
    $d = rand(1, 20);
    $emptyPosition = rand(0, 4);
    for ($i = 0; $i < 10; $i++) {
        if ($i === $emptyPosition) {
            $correctAnswer = $a1 + $i * $d;
            $progression[$i] = "..";
        } else {
            $progression[$i] = $a1 + $i * $d;
        }
    }
    $progressionString = implode(' ', $progression);
    line("Question: {$progressionString}");
    return $correctAnswer;
}

<?php

namespace Brain\Games\Games\Progression;

use function cli\line;

function game(string $name): int
{
    $correctAnswer = null;
    $progression = [];
    $progressionString = '';
    $a1 = rand(1, 20);
    $d = rand(1, 20);
    $emptyPosition = rand(0, 4);
    for ($i = 0; $i < 10; $i++) {
        $progression[$i] = $a1 + $i * $d;
        if ($i === $emptyPosition) {
            $progressionString = "{$progressionString} ..";
        } else {
            $progressionString = "{$progressionString} {$progression[$i]}";
        }
    }
    $correctAnswer = $progression[$emptyPosition];
    line("Question: {$progressionString}");
    return $correctAnswer;
}

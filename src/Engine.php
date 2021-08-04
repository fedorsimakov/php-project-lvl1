<?php

namespace Brain\Games\Games\Engine;

use Brain\Games\Games\Even;
use Brain\Games\Games\Calc;
use Brain\Games\Games\Gcd;
use Brain\Games\Games\Progression;
use Brain\Games\Games\Prime;

use function cli\line;
use function cli\prompt;

function game(string $name, string $game, string $question): bool
{
    $answer = null;
    $correctAnswer = null;
    line($question);
    for ($q = 0; $q < 3; $q++) {
        switch ($game) {
            case 'even':
                $correctAnswer = Even\game($name);
                $answer = prompt("Your answer");
                break;
            case 'calc':
                $correctAnswer = Calc\game($name);
                $answer = (int) prompt("Your answer");
                break;
            case 'gcd':
                $correctAnswer = Gcd\game($name);
                $answer = (int) prompt("Your answer");
                break;
            case 'progression':
                $correctAnswer = Progression\game($name);
                $answer = (int) prompt("Your answer");
                break;
            case 'prime':
                $correctAnswer = Prime\game($name);
                $answer = prompt("Your answer");
                break;
        }

        if ($answer !== $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, %s!", $name);
            return false;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
    return true;
}

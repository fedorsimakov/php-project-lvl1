<?php

namespace Brain\Games\Games\Engine;

use Brain\Games\Games\Even;
use Brain\Games\Games\Calc;
use Brain\Games\Games\Gcd;
use Brain\Games\Games\Progression;

use function cli\line;

function startGame($name, $game, $question)
{
    line($question);
    for ($q = 0; $q < 3; $q++) {
        switch ($game) {
            case 'even':
                $result = Even\game($name);
                break;
            case 'calc':
                $result = Calc\game($name);
                break;
            case 'gcd':
                $result = Gcd\game($name);
                break;
            case 'progression':
                $result = Progression\game($name);
                break;
        }
        if ($result['answer'] !== $result['correctAnswer']) {
            line("'{$result['answer']}' is wrong answer ;(. Correct answer was '{$result['correctAnswer']}'.");
            line("Let's try again, %s!", $name);
            return;
        }
        line("Correct!");
    }
    line("Congratulations, %s!", $name);
}

<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

function engine(
    string $question1,
    string $answer1,
    string $question2,
    string $answer2,
    string $question3,
    string $answer3,
    string $test
) {
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($test);

    line("Question: %s", $question1);
    $answer = prompt('Your answer: ');
    if ($answer == $answer1) {
        line("Correct!");
    } elseif ($answer != $answer1) {
        return line("%s! is wrong answer ;(. Correct answer was $answer1.
Let's try again, %s!", $answer, $name);
    }

    line("Question: %s", $question2);
    $answer = prompt('Your answer: ');
    if ($answer == $answer2) {
        line("Correct!");
    } elseif ($answer != $answer2) {
        return line("%s! is wrong answer ;(. Correct answer was $answer2.
Let's try again, %s!", $answer, $name);
    }

    line("Question: %s", $question3);
    $answer = prompt('Your answer: ');
    if ($answer == $answer3) {
        line("Correct!");
    } elseif ($answer != $answer3) {
        return line("%s! is wrong answer ;(. Correct answer was $answer3.
Let's try again, %s!", $answer, $name);
    }
    return line("Congratulations, %s!", $name);
}

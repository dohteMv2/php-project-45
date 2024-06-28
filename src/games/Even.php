<?php
namespace BrainGames\Even;



use function cli\line;
use function cli\prompt;

function evenGame()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
line('Answer "yes" if the number is even, otherwise answer "no".');

$i = 0;
$count = 3;

while ($i < $count)
{
$number = rand(0, 99);
line("Question: %s!", $number);
$answer = prompt('You answer: ');
$test = $number % 2;
if ($test === 0 and $answer == 'yes')
{
line("Correct!");
$i++;
}
else if ($test === 0 and $answer != 'yes')
{
return line("%s! is wrong answer ;(. Correct answer was 'yes'.
Let's try again, %s!", $answer, $name);
}
if ($test !== 0 and $answer == 'no')
{
line("Correct!");
$i++;
}
else if ($test !==0 and $answer != 'no')
{
return line("%s! is wrong answer ;(. Correct answer was 'no'.
Let's try again, %s!", $answer, $name);
}
}
return line("Congratulations, %s!", $name);
}

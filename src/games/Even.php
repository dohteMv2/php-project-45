<?php
namespace BrainGames\Even;



use function cli\line;
use function cli\prompt;

function evenGame()
{
line('Welcome to the Brain Game!');
$name = prompt('May I have your name?');
line("Hello, %s!", $name);
}



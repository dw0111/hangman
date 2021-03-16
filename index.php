<?php

$word = ['d', 'o', 'o', 'r'];
$guesses = ['_', '_', '_', '_'];
$turns = 5;
$won = false;

$guess = strtolower(trim(readline("Your guess: ")));

while ($turns  > 0) {

  for ($i = 0; $i < count($word); $i++) {
    if ($guess === $word[$i]) {
      $guesses[$i] = $guess;
    }
  }

  if (in_array($guess, $word)) {
    echo "You guessed correctly! The word includes $guess\n\n";
    echo implode(" ", $guesses) . "\n\n";
  } else {
    echo "Sorry, $guess is not included.\n\n";
    echo implode(" ", $guesses) . "\n\n";
    $turns--;
  }

  echo "$turns guesses left\n\n";

  if ($turns === 0) {
    echo "--- Oh no, you were hanged ---\n";
    break;
  }

  if ($guesses === $word) {
    echo "--- Congratulations! You won! *confetti* ---\n";
    break;
  }

  $guess = strtolower(trim(readline("Your next guess: ")));
}

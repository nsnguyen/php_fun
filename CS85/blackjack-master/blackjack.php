#!/usr/bin/env php
<?php

/**
 * Main file that runs the program
 */

/**
 * Autoloads the classes as needed.
 * @param string $class_name Class name
 */
function __autoload($class_name) {
    include $class_name . '.class.php';
}

// Start the game
if (isset($argv[1])) {
  if ((int) $argv[1] > 25) {
    echo "Too many players, not enough cards in a single deck for this.\n";
  }
  else {
    $game = new Game((int) $argv[1]);
  }
}
else {
  echo "You can override the default number of players by passing an argument.\n";
  echo "EX: blackjack.php 5\t\tLaunches a game with 5 players + the dealer\n\n";
  $game = new Game();
}
if (isset($game)) {
  $game->dealCards();
  $game->showPlayers();
  $game->determineWinner();
}

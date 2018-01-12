<?php

/**
 * Dealer Class
 * 
 * subclass of Player, we keep the distinction so that we can
 * implement specific house rules down the line (ie in some casinos a tie
 * with the dealer means he wins)
 * @package blackjack
 * @author tirdad
 *
 */
class Dealer extends Player {
  public function __construct() {
    $this->name = 'Dealer';
    echo $this->name . " created\n";
  }  
}
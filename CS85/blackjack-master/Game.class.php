<?php

/**
 * Game Class
 * 
 * Defines what a card is, its value and what suit it belongs to.
 * @package blackjack
 * @author tirdadc
 */
class Game {
  /**
   * The deck built for this game.
   * @var Deck
   */
  protected $deck;
  /**
   * an array of Players.
   * @var array
   */
  protected $players;
  /**
   * The maximum value found during the game.
   * @var int
   */
  protected $maximum;
  /**
   * an array of winning Players.
   * @var array
   */
  protected $winners;
  
  /**
   * Constructor
   * 
   * Initializes the game with the provided number of players.
   * @param int $players the number of players
   */
  public function __construct($players = 2) {
    
    // Initialize deck
    $this->deck = new Deck();
    
    // Check for invalid number of players
    if (!is_int($players) || $players === 0) {
      $players = 2;
    }
    // Create right number of players
    for ($i = 1; $i <= $players; $i++) {
      $this->players[] = new Player($i);
    }
    // Create dealer (last player)
    $this->players[] = new Dealer('Dealer');
    
    $this->maximum = 0;
  }
  
  /**
   * Displays the players and what cards they hold.
   */
  public function showPlayers() {
    foreach($this->players as $player) {
      $player->showHand();
    }
  }
  
  /**    
   * Hands out cards to all players.
   */
  public function dealCards() {
    $this->deck->dealAllHands($this->players);
  }
  
  /**
   * Determines who the winner is and displays the outcome.
   */
  public function determineWinner() {
    foreach($this->players as $player) {
      // Anything above 21 is a bust
      if ($player->getHandValue() > $this->maximum && $player->getHandValue() < 22) {
        $this->winners = array();
        $this->winners[] = $player;
        $this->maximum = $player->getHandValue(); 
      }
      // Tie
      elseif ($player->getHandValue() == $this->maximum && $player->getHandValue() < 22) {
        $this->winners[] = $player;
      }
    }
    
    if (count($this->winners) === 1) {
      echo "\n\n***** " . $this->winners[0]->getName() . " is the winner.\n";
    }
    else {
      echo "\n\n***** The game is a tie between the following players: ";
      foreach($this->winners as $winner) {
        echo "\n- " . $winner->getName();
      }
      echo "\n";
    }
  }
}

<?php

/**
 * Player Class
 * 
 * Defines a player in the context of the Blackjack game.
 * @package blackjack
 * @author tirdadc
 */
Class Player {
  /**
   * 
   * The player's name.
   * @var string
   */
	protected $name;
	/**
	 * An array of Cards held by the player.
	 * @var array
	 */
	protected $hand;
	/**
	 * Total worth of the player's hand
	 * @var int
	 */
	protected $handValue;
	
	/**
	 * Constructor
	 * 
	 * Initializes a player.
	 * @param int $id The player's id, used to build the name if none is provided
	 * @param string $name The player's name
	 */
	public function __construct($id, $name = '') {
	  if (empty($name)) {
	    $this->name = "Player " . $id;
	  }
	  else {
	    $this->name = $name;
	  }
	  echo $this->name . " created\n";
	}
	
	/**
	 * Returns the Player's name;
	 * @return string
	 */
	public function getName() {
	  return $this->name;
	}
	
	/**
	 * Returns what the player's hand is worth.
	 * @return int
	 */
	public function getHandValue() {
	  return $this->handValue;
	}
	
	/**
	 * Sets the player's hand to contain Cards and calculates the hand's value.
	 * @param array $hand an array of Cards
	 */
	public function setHand($hand) {
	  $this->hand = $hand;
	  foreach ($hand as $card) {
	    $this->handValue += $card->getCardValue();
	  }
	}
	
	/**
	 * Displays the player's cards and their total value.
	 */
	public function showHand() {
	  if (empty($this->hand)) {
	    echo "\n" . $this->name . " has no cards.\n";
	  }
	  else {
	    echo "\n" . $this->name . " has the following cards:\n---------\n";
	    foreach($this->hand as $card) {
	      echo $card->showCard();
	    }
	    $this->showHandValue();
	  }
	}
	
	/**
	 * Displays what the player's hand is worth.
	 */
	public function showHandValue() {
	  print $this->name . "'s hand has the following total: " . $this->handValue . "\n\n";
	}
}
<?php

/**
 * Deck Class
 * 
 * Allows the creation and shuffling of the deck along with
 * the ability to hand out cards to players.
 * @package blackjack
 * @author tirdadc
 */
class Deck {
  
  /**
   * Deck
   * 
   * An array of Card objects. 
   * @var array
   */
  protected $deck = array();
  
  /**
   * Constructor
   * 
   * Builds a deck of 52 cards and shuffles them.
   */
  public function __construct() {
    $suits = array(
      "spades",
      "clubs",
      "hearts",
      "diamonds",
    );
    foreach ($suits as $suit) {
      for ($i = 1; $i <= 13; $i++) {
        $card = new Card($i, $suit);
        $this->deck[] = $card;
      }
    }
    echo "Deck created\n";
    $this->shuffleDeck();
  }
  
  /**
   * Shuffles the deck
   */
  public function shuffleDeck() {
    shuffle($this->deck);
    echo "Deck shuffled\n";
  }
  
  /**
   * Displays the deck
   */
  public function showDeck() {
    print_r($this->deck);
  }
  
  /**
   * Gives all players a hand of cards
   * 
   * @param array the list of players being handed cards.
   */
  public function dealAllHands($players) {
    foreach($players as $player) {
      $this->dealHand($player);
    }
  }
  
  /**
   * Gives a player a hand of cards (ie 2 cards)
   * 
   * @param Player the player who's getting the cards.
   */
  public function dealHand($player) {
    $player->setHand(array_splice($this->deck, 0, 2));
  }
}

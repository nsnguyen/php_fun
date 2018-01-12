<?php

/**
 * Card Class
 * 
 * Defines what a card is, its value and what suit it belongs to.
 * @package blackjack
 * @author tirdadc
 */
class Card {
  /**
   * description of the card.
   * @var string
   */
  protected $title;
  /**
   * The value of the card.
   * @var int
   */
	protected $value;
	/**
	 * The suit to which the card belongs.
	 * @var string
	 */
	protected $suit;
	
	/**
   * Constructor
   * @param int the id of the card (ie numeric value for numeric cards and then 11 for Jack,
   * 12 for Queen and 13 for King).
   * @param string the suit to which the card belongs to.
   */
	public function __construct($id, $suit) {
	  switch ($id) {
	    case 1:
	      $this->title = 'Ace of ' . $suit;
	      $this->value = 11;
	      break;
	      
	    case 11:
	      $this->title = 'Jack of ' . $suit;
	      $this->value = 10;
	      break;
	      
	    case 12:
	      $this->title = 'Queen of ' . $suit;
	      $this->value = 10;
	      break;
	      
	    case 13:
	      $this->title = 'King of ' . $suit;
	      $this->value = 10;
	      break;
	    
	    default:
	      $this->title = $id . ' of ' . $suit;
	      $this->value = $id;
	      break;
	  }
	  $this->suit = $suit;
	}
	
	/**
	 * Returns the card's value
	 *
	 * @return int the card's value
	 */
	public function getCardValue() {
	  return $this->value;
	}
	
	/**
	 * Displays the card's description
	 */
	public function showCard() {
	  echo $this->title . "\n";
	}
}

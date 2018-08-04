<?php

class Players {
  private $players;

  public function __construct() {
var_dump('FOX FOX FOX');
    $intersection = array_intersect(array_keys($card_stack), $players_cards);
    $matching_card = reset($intersection); // return first array element
    return $matching_card ? $card_stack[$matching_card] : NULL;
  }

}

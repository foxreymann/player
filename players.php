<?php

require 'vendor/autoload.php';

function highCard($card_stack, $players_cards) {
  $intersection = array_intersect(array_keys($card_stack), $players_cards);
  $matching_card = reset($intersection); // return first array element
  return $matching_card ? $card_stack[$matching_card] : NULL;
}


use PHPUnit\Framework\TestCase;

class Test extends TestCase {

  public function testTasksExample() {
    $card_stack = [
    'Ace of Spades' => 11379,
    'King of Clubs' => 85561,
    'Queen of Hearts' => 703,
    'Jack of Diamonds' => 6222,
    'Nine of Clubs' => 511288,
    ];

    $players_cards = [
    'Nine of Clubs',
    'Two of Spades',
    'Six of Hearts',
    'King of Clubs',
    ];

    $expected = 85561;
    $actual = highCard($card_stack, $players_cards);

    $this->assertEquals($actual, $expected);
  }

  public function testNoCards() {
    $card_stack = [
    'Ace of Spades' => 11379,
    'King of Clubs' => 85561,
    'Queen of Hearts' => 703,
    'Jack of Diamonds' => 6222,
    'Nine of Clubs' => 511288,
    ];

    $players_cards = [
    'One of Spades',
    'Six of Hearts',
    'Ace of Clubs'
    ];

    $expected = NULL;
    $actual = highCard($card_stack, $players_cards);

    $this->assertEquals($actual, $expected);
  }

  public function testNoMatching() {
    $card_stack = [
    'a' => 65,
    'b' => 66,
    'c' => 67
    ];

    $players_cards = [
      'e','f'
    ];

    $expected = NULL;
    $actual = highCard($card_stack, $players_cards);

    $this->assertEquals($actual, $expected);
  }

  public function testDobuleMatching() {
    $card_stack = [
    'a' => 65,
    'b' => 66,
    'c' => 67
    ];

    $players_cards = [
      'e','f','b','b'
    ];

    $expected = 66;
    $actual = highCard($card_stack, $players_cards);

    $this->assertEquals($actual, $expected);
  }

}

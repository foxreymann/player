<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

require 'players.php';

class Test extends TestCase {

  public function testTasksExample() {
var_dump('FOX');
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
    $actual = new Players($card_stack, $players_cards);

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

}

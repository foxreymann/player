<?php

require 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;
require 'players.php';

class Test extends TestCase {

  private $samplePlayers = [
    'p1' => [
      'before' => ['p1b1','p1b2'],
      'after' => ['p1a1', 'p1a2']
    ],
    'p2' => [
      'before' => ['tb1','tb2'],
      'after' => ['ta1', 'ta2']
    ]
  ];

  protected function setUp() {
  }

  public function  testGetAll() {
    // store init data
    file_put_contents('./players.dat', serialize($this->samplePlayers));
    // load class
    $players = new Players();
    // get all
    $this->assertEquals($players->get(), $this->samplePlayers);
  }

}

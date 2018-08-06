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

  private $dataUri = './players.dat';

  protected function setUp() {
  }

  protected function tearDown() {
    unlink($this->dataUri);
  }

  public function  testGetAll() {
var_dump($this->dataUri);
    // store init data
    file_put_contents($this->dataUri, serialize($this->samplePlayers));
    // load class
    $players = new Players($this->dataUri);
    // get all
    $this->assertEquals($players->get(), $this->samplePlayers);
  }

  public function testGetAllReturnsEmptyArrayIfNoDataFile() {
    // load class
    $players = new Players($this->dataUri);
    // get all
    $this->assertEquals($players->get(), []);
  }
}

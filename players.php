<?php

class Players {
  private $players;
  private $dataUri = './players.dat';
  private $backupUri = './players.bak';

  public function __construct() {
    $this->players = unserialize(file_get_contents($this->dataUri));
  }

  public function get() {
    return $this->players;
  }

}

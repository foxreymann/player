<?php

class Players {
  private $players;
  private $dataUri;
  private $backupUri;

  public function __construct($dataUri) {
echo 'construct';
    $this->dataUri = $dataUri;
    $this->backupUri = $dataUri . '.bak';
var_dump($dataUri);
var_dump($this->dataUri);
    $this->players = unserialize(file_get_contents($this->dataUri));
  }

  public function get() {
    return $this->players;
  }

}

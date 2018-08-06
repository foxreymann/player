<?php

class Players {
  private $players;
  private $dataUri;
  private $backupUri;

  public function __construct($dataUri) {
    $this->dataUri = $dataUri;
    $this->backupUri = $dataUri . '.bak';
    try {
      $this->players = unserialize(file_get_contents($this->dataUri));
    } catch (Exception $e) {
      $this->players = [];
    }
  }

  public function get() {
    return $this->players;
  }

}

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

  public function add($player, $itemGroup, $item) {
    if(!array_key_exists($player, $this->players)) {
      $this->players[$player] = [];
    }

    if(!array_key_exists($itemGroup, $this->players[$player])) {
      $this->players[$player][$itemGroup] = [];
    }

    if(!in_array($item, $this->players[$player][$itemGroup])) {
      $this->players[$player][$itemGroup][] = $item;
    }
  }

  public function save() {
    file_put_contents($this->dataUri, serialize($this->players));
  }

}

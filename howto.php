<?php

require 'players.php';

$players = new Players('./players.dat');

var_dump($players->get());

$players->add('Fox', 'before', "let's do it ąą");
$players->add('Thura', 'before', "kung");
$players->add('Thura', 'after', "fu");
$players->add('Donald', 'before', "tweet tweet");

var_dump($players->get());

$players->save();

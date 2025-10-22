<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayHello, SayGoodBye};

$person = new Person();
$person->goodBye("qian");
$person->hello("aira");

$person->name = "aira";
var_dump($person);

$person->run();
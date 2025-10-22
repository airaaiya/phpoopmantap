<?php

require_once "data/Person.php";

$eko = new Person("aira", "batam");
$eko->name = "aira";
$eko->sayHello("cut");

$joko = new Person("qian", "batam");
$joko->name = "qian";
$joko->sayHello(null);

$eko->info();
$joko->info();
<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "aira";
$manager->sayHello("qian");

$vp = new VicePresident();
$vp->name = "cut";
$vp->sayHello("qian");

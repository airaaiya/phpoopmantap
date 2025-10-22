<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("aira");
var_dump($company);

$company->programmer = new BackendProgrammer("qian");
var_dump($company);

$company->programmer = new FrontendProgrammer("cut");
var_dump($company);

sayHelloProgrammer(new Programmer("aira"));
sayHelloProgrammer(new BackendProgrammer("qian"));
sayHelloProgrammer(new FrontendProgrammer("cut"));
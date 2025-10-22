<?php

$matches = [];
$result = preg_match_all("/aira|aiya|aiwa/i", "aira mahsyura", $matches);

var_dump($result);
var_dump($matches);

$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu ANJING dan BANGSAT!");

var_dump($result);

$result = preg_split("/[\s,-]/", "aira mahsyura,Programmer,Zaman-Now");

var_dump($result);
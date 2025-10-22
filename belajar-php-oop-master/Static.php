<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "aira mahsyura";
echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 10, 10, 10, 10);
echo "Result : $result" . PHP_EOL;
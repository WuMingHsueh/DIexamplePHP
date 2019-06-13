<?php

require __DIR__ . "/vendor/autoload.php";

session_start();

require __DIR__ . "/src/Bootstrap/dependencies.php";

use DIexample\A;
use DIexample\B;

$a = new A($container);
$a->saveA();
print $a->readA() . PHP_EOL;

$b = new B($container);
$b->saveB();
print $b->readB() . PHP_EOL;
print $a->readA() . PHP_EOL;

$a->deleteA();
print $a->readA() . PHP_EOL;
print $b->readB() . PHP_EOL;

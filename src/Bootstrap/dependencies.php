<?php

use Pimple\Container;

$container = new Container;
$container->register(new DIexample\Service\Session\SessionService);

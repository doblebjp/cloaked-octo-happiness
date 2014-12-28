<?php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;

$app = new Application('Cloaked Octo Happiness', '0.0');
$app->run();

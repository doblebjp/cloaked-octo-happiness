<?php

namespace CloakedOctoHappiness;

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Pimple\Container;

$container = new Container();
$container->register(new ConfigProvider());

$app = new Application('Cloaked Octo Happiness', '0.0');
$app->run();

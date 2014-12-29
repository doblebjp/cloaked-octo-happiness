<?php

require __DIR__.'/../vendor/autoload.php';

use Pimple\Container;
use Symfony\Component\Console\Application;
use CloakedOctoHappiness\ConfigProvider;

$container = new Container();
$container->register(new ConfigProvider());

$app = new Application('Cloaked Octo Happiness', '0.0');
$app->run();

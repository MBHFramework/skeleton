<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/config.php';

$app = new \Mbh\App;

require __DIR__ . '/routes.php';

$app->run();

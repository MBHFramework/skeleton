<?php

define('IS_API', false);

require __DIR__ . '/vendor/autoload.php';

use Mbh\App;

// App::registerAutoload();

$app = new App;

$app->any('/', function() {
    /* code */
});

$app->firewall()
    ->debug()
    ->run();

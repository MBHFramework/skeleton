<?php

define('IS_API', false);

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/mbh-framework/rest/Mbh/Settings/config.php';

use Mbh\App;

// App::registerAutoload();

$app = new App;

$app->any('/', function() {
    /* code */
});

$app->firewall()
    ->debug()
    ->run();

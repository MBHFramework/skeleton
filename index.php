<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/config/config.php';

$app = new \Mbh\App;

$app->any('/', function() {
    return "MBHFramework is working!";
});

$app->run();

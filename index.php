<?php

/**
 * Defines the directory in which the framework is installed
 * @example "/" If to access the framework we place http://url.com in the URL, or http://localhost
 * @example "/mbh-framework/" if to access the framework we place http://url.com/mbh-framework, or http://localhost/mbh-framework/
*/
define('__ROOT__', '/skeleton/');
define('URL', 'http://localhost/skeleton/');
define('IS_API', false);

require __DIR__ . '/vendor/autoload.php';

use Mbh\App;

$app = new App;

$app->any('/', function() {
    return "MBHFramework is working!";
});

$app->firewall()
    ->debug()
    ->run();

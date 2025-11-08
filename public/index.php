<?php

use Jadob\Framework\Application;
use Symfony\Component\HttpFoundation\Request;

if (\version_compare(PHP_VERSION, '8.4.0') < 0) {
    die('Sorry! Jadob need at least PHP 8.0 to work properly.');
}

require_once __DIR__.'/../boot.php';


$bootstrap = new Bootstrap();
$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app = new Application(
    $_ENV['APP_ENV'],
    new Bootstrap(),
    [],
    []
);
$app->handleWebRequest($request)->send();
$app->terminate();


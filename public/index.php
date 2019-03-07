<?php

if (\version_compare(PHP_VERSION, '7.2.0') < 0) {
    die('Sorry! Jadob need at least PHP 7.2 to work properly.');
}

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../Bootstrap.php';

$bootstrap = new Bootstrap();
$request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();


$kernel = new \Jadob\Core\Kernel('dev', $bootstrap);
$kernel->execute($request)->send();


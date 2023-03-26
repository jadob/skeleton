<?php

use Symfony\Component\HttpFoundation\Request;

if (\version_compare(PHP_VERSION, '8.0.0') < 0) {
    die('Sorry! Jadob need at least PHP 8.0 to work properly.');
}

require_once __DIR__.'/../boot.php';

$bootstrap = new Bootstrap();
$request = Request::createFromGlobals();


$kernel = new \Jadob\Core\Kernel('dev', $bootstrap);
$kernel->execute($request)->send();


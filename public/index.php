<?php

declare(strict_types=1);

if (version_compare(PHP_VERSION, '8.4.0') < 0) {
    die('Sorry! Jadob need at least PHP 8.0 to work properly.');
}
$app = include __DIR__ . '/../boot.php';

$request = Symfony\Component\HttpFoundation\Request::createFromGlobals();

$app->handleWebRequest($request)->send();
$app->terminate();


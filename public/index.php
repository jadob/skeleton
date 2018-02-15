<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../Bootstrap.php';

$bootstrap = new Bootstrap();

$kernel = new \Jadob\Core\Kernel('dev', $bootstrap);
$kernel->execute();
$kernel->send();


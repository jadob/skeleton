<?php

use Jadob\Router\ServiceProvider\RouterConfiguration;

return function (RouterConfiguration $configuration) {
    $configuration->importRoutes(include __DIR__ . '/routes.php');
    $configuration->configureFromBaseUrl($_ENV['BASE_URL']);


    return $configuration;
};
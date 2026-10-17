<?php

declare(strict_types=1);

use Jadob\Framework\ServiceProvider\LoggerConfig;
use Psr\Log\LogLevel;

return static function (LoggerConfig $config): LoggerConfig {
    $config
        ->configureHandler('stderr')
        ->withType('rotating_file')
        ->withParameters([
            'file' => __DIR__ . '/../var/logs/dev.log',
        ])
        ->withLevel(LogLevel::INFO);

    return $config;
};

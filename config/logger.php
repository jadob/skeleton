<?php

use Monolog\Logger;

return [
    'default_logger_channel' => 'default',
    'default_error_logger_channel' => 'error',
    'channels' => [
        'error' => [
            'stderr',
            'default'
        ],
        'dispatcher' => [
            'default'
        ],
        'event' => [
            'default'
        ],
        'default' => [
            'default',
        ],
    ],

    'handlers' => [
        'default' => [
            'type' => 'stream',
            'rotating' => true,
            'level' => Logger::DEBUG,
            'path' => '%log_dir%/app.log'
        ],
        'dbal' => [
            'type' => 'stream',
            'rotating' => true,
            'level' => Logger::DEBUG,
            'path' => '%log_dir%/dbal.log',
        ],
        'stderr' => [
            'type' => 'stream',
            'rotating' => false,
            'level' => Logger::DEBUG,
            'path' => 'php://stderr',
        ]
    ]
];
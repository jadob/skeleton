<?php

return [
    'globals' => [
        'locale' => 'en'
    ],
    'framework' => [
        'error_handler' => [
            'custom_prod_controller' => null
        ],
    ],
    'dbal' => [
        'dbname' => '%{database_name}',
        'user' => '%{database_user}',
        'password' => '%{database_pass}',
        'host' => '%{database_host}',
        'driver' => 'pdo_mysql',
        'charset' => 'utf8',
    ],
    'database' => [
        'models' => []
    ],
    'schema_manager' => [
        'schema' => include __DIR__ . '/schema.php',
        'cli_only' => false
    ],
    'router' => [
        //'locale_prefix' => '/{_locale}',
        'routes' => include __DIR__ . '/routes.php',
        'case_sensitive' => false,
    ],
    'twig' => [
        'strict_variables' => true,
        'cache' => false,
        'templates_paths' => [
            'App' => '/src/App/templates'

        ]
    ],
    'translator' => [
        'locale' => 'en',
        'sources' => []
    ],
    'security' => []
];
<?php

return [
    'router' => [
        'routes' => include __DIR__.'/routes.php'
    ],
    'framework' => [
        'dev' => [
            'profiler' => true,
            'pretty_print_json_responses' => true,
        ],
        'security' => [

        ]
    ],
    'twig' => [
        'templates_paths' => [
            'App' => 'src/App/templates',
            //'__main__' => 'vendor/symfony/twig-bridge/Resources/views/Form'
        ],
        'cache' => false,
        'strict_variables' => true,
        'globals' => [
            'php_version' => PHP_VERSION
        ]
    ],
    'sf_forms' => [
        'forms' => ['bootstrap_4_horizontal_layout.html.twig']
    ],
];
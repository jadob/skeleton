<?php

return [
    'router' => [

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
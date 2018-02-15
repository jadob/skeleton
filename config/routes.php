<?php

return [
    'hello' => [
        'path' => '/',
        'controller' => \App\Controller\HelloController::class,
        'action' => 'index'
    ],
    'hello_with_parameter' => [
        'path' => '/hello/{name}',
        'controller' => \App\Controller\HelloController::class,
        'action' => 'hello'
    ],
];
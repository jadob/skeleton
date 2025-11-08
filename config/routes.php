<?php

use App\Controller\HelloController;

return [
    'hello' => [
        'path' => '/',
        'handler' => HelloController::class,
        'methods' => [
            'GET'
        ]

    ]
];


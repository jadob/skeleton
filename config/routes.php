<?php

$collection = new \Jadob\Router\RouteCollection();


$collection->addRoute(
    new \Jadob\Router\Route('home', '/', \App\Controller\HelloController::class, 'index')
);

$collection->addRoute(
    new \Jadob\Router\Route('hello_with_parameter', '/hello/{name}', \App\Controller\HelloController::class, 'hello')
);


return $collection;


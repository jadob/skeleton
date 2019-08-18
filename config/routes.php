<?php

$collection = new \Jadob\Router\RouteCollection();


$collection->addRoute(
    new \Jadob\Router\Route('home', '/', \App\Controller\HelloController::class, 'index')
);


return $collection;


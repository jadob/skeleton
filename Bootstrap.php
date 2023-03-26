<?php

use Jadob\Core\AbstractBootstrap;


class Bootstrap extends AbstractBootstrap
{

    public function getServiceProviders(string $env): array
    {
        return [
            \Jadob\Bridge\Symfony\Console\ServiceProvider\ConsoleProvider::class,
            \Jadob\Router\ServiceProvider\RouterServiceProvider::class,
            \Jadob\Bridge\Twig\ServiceProvider\TwigProvider::class
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getRootDir(): string
    {
        return __DIR__;
    }
}
<?php

use Jadob\Core\AbstractBootstrap;

/**
 * Class Bootstrap
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class Bootstrap extends AbstractBootstrap
{

    public function getServiceProviders(string $env): array
    {
        return [
            \Jadob\SymfonyConsoleBridge\ServiceProvider\ConsoleProvider::class,
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
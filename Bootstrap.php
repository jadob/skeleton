<?php

use Jadob\Core\AbstractBootstrap;

/**
 * Class Bootstrap
 * @author pizzaminded <miki@appvende.net>
 * @license MIT
 */
class Bootstrap extends AbstractBootstrap
{
    /**
     * {@inheritdoc}
     */
    public function getServiceProviders(): array
    {
        return [
            \Jadob\SymfonyConsoleBridge\ServiceProvider\ConsoleProvider::class,
            \Jadob\Core\ServiceProvider\FrameworkServiceProvider::class,
            \Jadob\Router\ServiceProvider\RouterServiceProvider::class,
            \Jadob\TwigBridge\ServiceProvider\TwigServiceProvider::class,
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
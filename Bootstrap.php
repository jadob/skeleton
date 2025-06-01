<?php

use Jadob\Bridge\Twig\Module\TwigModule;
use Jadob\Core\AbstractBootstrap;
use Jadob\Framework\Module\FrameworkModule;
use Jadob\Framework\ServiceProvider\SymfonyTranslatorProvider;


class Bootstrap extends AbstractBootstrap
{

    public function getServiceProviders(string $env): array
    {
        return [
            /**
             * @TODO: translator is provided because twig requires it - it should not, this is a known issue.
             */
            new SymfonyTranslatorProvider()
        ];
    }

    public function getModules(): array
    {
        return [
            new FrameworkModule(),
            new TwigModule()
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
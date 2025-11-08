<?php

use Jadob\Bridge\Doctrine\Common\ServiceProvider\DoctrineCommonServiceProvider;
use Jadob\Bridge\Doctrine\DBAL\ServiceProvider\DoctrineDBALProvider;
use Jadob\Bridge\Doctrine\Migrations\ServiceProvider\DoctrineMigrationsProvider;
use Jadob\Bridge\Doctrine\ORM\ServiceProvider\DoctrineORMProvider;
use Jadob\Bridge\Doctrine\Persistence\ServiceProvider\DoctrinePersistenceProvider;
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
            new SymfonyTranslatorProvider(),
            new DoctrinePersistenceProvider(),
            new DoctrineCommonServiceProvider(),
            new DoctrineDBALProvider(),
            new DoctrineORMProvider($env),
            //new DoctrineMigrationsProvider()
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
<?php

declare(strict_types=1);

use Jadob\Bridge\Doctrine\Migrations\Configuration\MigrationsConfiguration;

return static function (MigrationsConfiguration $configuration): MigrationsConfiguration {

    $configuration
        ->withMigrationPath('Migrations', __DIR__.'/../resources/migrations')
        ->withAllOrNothing()
        ->withCheckDatabasePlatform();

    return $configuration;
};

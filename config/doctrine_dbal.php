<?php

declare(strict_types=1);

use Jadob\Bridge\Doctrine\DBAL\Configuration\DbalConfiguration;

return function (DbalConfiguration $dbalConfiguration) {
    $dbalConfiguration
        ->configureConnection('default')
        ->setAsDefault()
        ->withDsn($_ENV['DB_DSN']);

    return $dbalConfiguration;
};
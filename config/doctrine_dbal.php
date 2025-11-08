<?php

use Jadob\Bridge\Doctrine\DBAL\Configuration\DbalConfiguration;

return function (DbalConfiguration $dbalConfiguration) {

    $dbalConfiguration->addConnection(
        name: 'default',

        /**
         * @see https://www.doctrine-project.org/projects/doctrine-dbal/en/4.3/reference/configuration.html#configuration
         *
         * Instead of passing full configuration, you can pass `dsn` key with DSN as a value. You cannot mix both explicit
         * configs and DSN as the latter has precedence.
         */
        configuration: [
            'driver' => 'pdo_mysql',
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
            'host' => $_ENV['DB_HOST'],
            'port' => $_ENV['DB_PORT'],
            'dbname' => $_ENV['DB_NAME'],
        ]
    );

    return $dbalConfiguration;
};
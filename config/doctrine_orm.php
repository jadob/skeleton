<?php

declare(strict_types=1);

use Jadob\Bridge\Doctrine\Orm\Configuration\DoctrineOrmConfig;

return static function (DoctrineOrmConfig $ormConfig): DoctrineOrmConfig {
    $ormConfig
        ->configureManager('default')
        ->setAsDefault()
        ->withDbalConnectionName('default')
        ->withEntityPath( 'src/App/Entity');

    return $ormConfig;
};

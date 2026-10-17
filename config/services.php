<?php

declare(strict_types=1);

use Jadob\Container\Builder\ContainerBuilder;

return function (ContainerBuilder $builder): void {
    /**
     * You can autowire classes (eg controllers) in batch by using namespace scans:
     */
    $builder
        ->configureNamespaceScan()
        ->autowire()
        ->in(
            __DIR__ . '/../src/App/Controller',
        );


};
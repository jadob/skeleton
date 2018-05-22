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
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getRootDir(): string
    {
        return __DIR__;
    }
}
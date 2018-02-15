<?php

class Bootstrap
{

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getPublicDir()
    {
        return __DIR__ . '/public';
    }

    public function getConfigDir()
    {
        return $this->getRootDir() . '/config';
    }

    public function getCacheDir()
    {
        return $this->getRootDir() . '/var';
    }

    public function getServiceProviders()
    {
        return [];
    }

}
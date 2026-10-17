<?php

declare(strict_types=1);

use Jadob\Framework\ServiceProvider\TranslatorConfig;

return static function (TranslatorConfig $config): TranslatorConfig {

    /**
     * Configures default locale.
     */
    $config->withLocale('pl');

    /**
     * Emits information about missing translations etc.
     * Disabled by default.
     */
    $config->enableLogging();

    return $config;
};
<?php

declare(strict_types=1);

use Jadob\Bridge\Twig\Configuration\TwigConfig;

return static function (TwigConfig $config): TwigConfig {

    $config
        ->enableCaching()
        ->enableStrictVariables()
        ->withTemplatePath('/templates');

    return $config;
};

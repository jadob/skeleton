<?php
/**
 * Includes all required files and performs basic env checks before continuing with execution.
 */
use Jadob\Core\Kernel;
use Symfony\Component\Dotenv\Dotenv;

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/Bootstrap.php';

(new Dotenv())->load(__DIR__.'/.env');

/**
 * If your app relies on some environment variables, pass it here.
 */
Kernel::checkEnvsPresence([
    'APP_ENV'
]);

/**
 * If your app relies on specific PHP extensions, pass the names here.
 */
Kernel::checkExtensionsPresence([

]);
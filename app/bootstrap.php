<?php
declare(strict_types=1);

/*
 * Boots the application: autoloads classes, loads settings, sets error handling.
 * Works on PHP 7.4 and newer, no Composer packages needed.
 */

define('APP_ROOT', dirname(__DIR__));

spl_autoload_register(function (string $class): void {
    $prefix = 'App\\';
    if (strncmp($class, $prefix, strlen($prefix)) !== 0) {
        return;
    }
    $file = APP_ROOT . '/app/' . str_replace('\\', '/', substr($class, strlen($prefix))) . '.php';
    if (is_file($file)) {
        require $file;
    }
});

require APP_ROOT . '/app/helpers.php';

$config = require APP_ROOT . '/config/app.php';
App\Core\Config::set($config);

error_reporting(E_ALL);
ini_set('display_errors', $config['debug'] ? '1' : '0');

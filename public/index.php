<?php
declare(strict_types=1);

/*
 * Front controller: every request to the landing page comes through here.
 */

require dirname(__DIR__) . '/app/bootstrap.php';

$router = new App\Core\Router();
require APP_ROOT . '/app/routes.php';

echo $router->dispatch($_SERVER['REQUEST_METHOD'] ?? 'GET', App\Core\Router::requestPath());

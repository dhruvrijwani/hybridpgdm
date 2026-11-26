<?php
declare(strict_types=1);

/*
 * URL map. Each line sends one address to one controller method.
 * @var App\Core\Router $router
 */

use App\Controllers\LandingController;

$router->get('/', [LandingController::class, 'index']);
$router->get('/thank-you', [LandingController::class, 'thankYou']);

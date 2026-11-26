<?php
declare(strict_types=1);

namespace App\Core;

/**
 * Maps a URL path to a controller action.
 * Routes are declared in routes.php as  $router->get('/path', [Controller::class, 'method']).
 */
final class Router
{
    /** @var array<string,array<string,callable|array>> */
    private $routes = ['GET' => [], 'HEAD' => []];

    /** @param callable|array{0:class-string,1:string} $action */
    public function get(string $path, $action): void
    {
        $path = self::normalise($path);
        $this->routes['GET'][$path] = $action;
        $this->routes['HEAD'][$path] = $action;
    }

    public function dispatch(string $method, string $path): string
    {
        $path = self::normalise($path);
        $action = $this->routes[$method][$path] ?? null;

        if ($action === null) {
            http_response_code(404);
            $action = [\App\Controllers\ErrorController::class, 'notFound'];
        }
        if (is_array($action)) {
            [$class, $methodName] = $action;
            return (new $class())->$methodName();
        }
        return (string) $action();
    }

    /** The request path relative to where the app is installed, e.g. "/" or "/thank-you". */
    public static function requestPath(): string
    {
        $uri = (string) parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);
        $base = base_path();
        if ($base !== '' && strncmp($uri, $base, strlen($base)) === 0) {
            $uri = substr($uri, strlen($base));
        }
        return $uri === '' ? '/' : $uri;
    }

    private static function normalise(string $path): string
    {
        $path = '/' . trim($path, '/');
        return $path === '/index.php' ? '/' : $path;
    }
}

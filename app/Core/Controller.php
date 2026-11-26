<?php
declare(strict_types=1);

namespace App\Core;

/** Base class for controllers: gives them a view renderer and response headers. */
abstract class Controller
{
    /** @param array<string,mixed> $data */
    protected function view(string $template, array $data = []): string
    {
        if (!headers_sent()) {
            header('Content-Type: text/html; charset=utf-8');
            header('X-Content-Type-Options: nosniff');
            header('Referrer-Policy: strict-origin-when-cross-origin');
        }
        return (new View())->render($template, $data);
    }
}

<?php
declare(strict_types=1);

namespace App\Core;

/**
 * Renders PHP templates from app/Views.
 * A view can choose a layout with  $this->layout('layouts/main')  and include
 * smaller templates with  $this->partial('partials/header', [...]).
 */
final class View
{
    /** @var string|null */
    private $layout;
    /** @var array<string,mixed> */
    private $shared = [];

    /** @param array<string,mixed> $data */
    public function render(string $template, array $data = []): string
    {
        $this->shared = $data;
        $content = $this->capture($template, $data);
        if ($this->layout !== null) {
            $layout = $this->layout;
            $this->layout = null;
            $content = $this->capture($layout, $data + ['content' => $content]);
        }
        return $content;
    }

    public function layout(string $template): void
    {
        $this->layout = $template;
    }

    /** @param array<string,mixed> $data */
    public function partial(string $template, array $data = []): string
    {
        return $this->capture($template, $data + $this->shared);
    }

    /** @param array<string,mixed> $data */
    private function capture(string $template, array $data): string
    {
        $file = APP_ROOT . '/app/Views/' . $template . '.php';
        if (!is_file($file)) {
            throw new \RuntimeException("View not found: {$template}");
        }
        extract($data, EXTR_SKIP);
        ob_start();
        try {
            include $file;
        } catch (\Throwable $e) {
            ob_end_clean();
            throw $e;
        }
        return (string) ob_get_clean();
    }
}

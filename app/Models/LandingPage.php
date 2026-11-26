<?php
declare(strict_types=1);

namespace App\Models;

/**
 * The landing page's content.
 * Today it reads content/hybrid-pgdm.php. If WeSchool later keeps this content in a
 * database or CMS, only this class changes: controllers and views stay as they are.
 */
final class LandingPage
{
    /** @var array<string,mixed> */
    private $data;

    /** @param array<string,mixed> $data */
    private function __construct(array $data)
    {
        $this->data = $data;
    }

    public static function load(string $slug = 'hybrid-pgdm'): self
    {
        $file = APP_ROOT . '/content/' . basename($slug) . '.php';
        if (!is_file($file)) {
            throw new \RuntimeException("Content file not found: {$slug}");
        }
        $data = require $file;
        if (!is_array($data)) {
            throw new \RuntimeException("Content file must return an array: {$slug}");
        }
        return new self($data);
    }

    /** One section's content, or [] if it does not exist. @return array<string,mixed>|array<int,mixed> */
    public function section(string $key): array
    {
        $value = $this->data[$key] ?? [];
        return is_array($value) ? $value : [];
    }

    /** Section keys in page order, skipping any without a content block. @return string[] */
    public function sections(): array
    {
        $order = $this->data['order'] ?? [];
        return array_values(array_filter($order, function ($key) {
            return isset($this->data[$key]);
        }));
    }

    /** FAQ items for the structured-data block. @return array<int,array{q:string,a:string}> */
    public function faqForSchema(): array
    {
        $out = [];
        foreach ($this->section('faq')['items'] ?? [] as $item) {
            $out[] = ['q' => $item['q'], 'a' => strip_tags(implode(' ', (array) $item['a']))];
        }
        return $out;
    }

    /** @return array<string,mixed> */
    public function all(): array
    {
        return $this->data;
    }
}

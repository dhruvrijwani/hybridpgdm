<?php
declare(strict_types=1);

use App\Core\Config;

/** Escape text for HTML. */
function e($value): string
{
    return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

/** Text from the content file that may hold a few inline tags (bold, emphasis, line breaks). */
function rich($value): string
{
    return strip_tags((string) $value, '<b><strong><em><i><br><span>');
}

/** The path the app is installed under, e.g. '' or '/hybrid-pgdm'. */
function base_path(): string
{
    $configured = Config::get('base_path');
    if (is_string($configured)) {
        return rtrim($configured, '/');
    }
    $dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/index.php'));
    $dir = preg_replace('#/public$#', '', $dir);
    return rtrim((string) $dir, '/');
}

/** URL of a page inside the app. */
function url(string $path = '/'): string
{
    if (defined('STATIC_EXPORT')) {
        return $path === '/' ? 'index.html' : ltrim($path, '/') . '.html';
    }
    return base_path() . '/' . ltrim($path, '/');
}

/** URL of a file in public/assets, with a version stamp so browsers pick up changes. */
function asset(string $path, bool $versioned = true): string
{
    $path = ltrim($path, '/');
    $file = APP_ROOT . '/public/assets/' . $path;
    $version = ($versioned && is_file($file)) ? '?v=' . substr(md5((string) filemtime($file)), 0, 8) : '';
    if (defined('STATIC_EXPORT')) {
        return 'assets/' . $path . $version;
    }
    return base_path() . '/assets/' . $path . $version;
}

/** An icon from the sprite in Views/partials/icons.php. */
function icon(string $name, string $class = 'i'): string
{
    return '<svg class="' . e($class) . '" aria-hidden="true" focusable="false"><use href="#i-' . e($name) . '"/></svg>';
}

function config(string $key, $default = null)
{
    return Config::get($key, $default);
}

/** Where "Apply Now" buttons point. */
function apply_href(): string
{
    return '#enquire';
}

/** Where "Download Brochure" points: the PDF if set, else the enquiry form. */
function brochure_href(): string
{
    $url = (string) config('brochure_url', '');
    return $url !== '' ? $url : '#enquire';
}

/** Two-digit index: 1 -> "01". */
function nn(int $n): string
{
    return str_pad((string) $n, 2, '0', STR_PAD_LEFT);
}

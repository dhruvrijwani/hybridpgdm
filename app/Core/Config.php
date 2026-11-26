<?php
declare(strict_types=1);

namespace App\Core;

/** Read-only access to config/app.php. */
final class Config
{
    /** @var array<string,mixed> */
    private static $values = [];

    /** @param array<string,mixed> $values */
    public static function set(array $values): void
    {
        self::$values = $values;
    }

    /** @return mixed */
    public static function get(string $key, $default = null)
    {
        $node = self::$values;
        foreach (explode('.', $key) as $part) {
            if (!is_array($node) || !array_key_exists($part, $node)) {
                return $default;
            }
            $node = $node[$part];
        }
        return $node;
    }
}

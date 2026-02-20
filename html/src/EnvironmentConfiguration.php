<?php

declare(strict_types=1);

namespace HeleneCoaching;

final class EnvironmentConfiguration
{
    private static ?array $data = null;

    public static function load(string $envPath = null): void
    {
        $path = $envPath ?? dirname(__DIR__) . '/.env';
        if (file_exists($path)) {
            self::$data = parse_ini_file($path);
        } else {
            self::$data = [];
        }
    }

    public static function get(string $key, string $default = ''): string
    {
        if (self::$data === null) {
            self::load();
        }
        if (isset(self::$data[$key])) {
            return self::$data[$key];
        }
        $env = $_ENV[$key] ?? $_SERVER[$key] ?? getenv($key);
        return $env !== false && $env !== null ? (string)$env : $default;
    }
}

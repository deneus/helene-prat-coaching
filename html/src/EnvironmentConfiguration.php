<?php

declare(strict_types=1);

namespace HeleneCoaching;

final class EnvironmentConfiguration
{
    private static ?array $data = null;

    public static function load(string $envPath = null): void
    {
        $path = $envPath ?? dirname(__DIR__) . '/.env';
        if (!file_exists($path)) {
            throw new \RuntimeException('Configuration file not found: ' . $path);
        }
        self::$data = parse_ini_file($path);
    }

    public static function get(string $key, string $default = ''): string
    {
        if (self::$data === null) {
            self::load();
        }
        return self::$data[$key] ?? $default;
    }
}

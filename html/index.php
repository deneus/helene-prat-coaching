<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use HeleneCoaching\FrontEnd\Router;

$uri = $_SERVER['REQUEST_URI'] ?? '/';

// PHP built-in server (dev): serve existing static files directly,
// so /css/*, /js/*, /images/*, /i18n/*, /sitemap.xml, /robots.txt work
// without needing Vercel's rewrite rules.
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($uri, PHP_URL_PATH) ?: '/';
    $filePath = __DIR__ . $path;
    if ($path !== '/' && is_file($filePath)) {
        return false;
    }
}

echo Router::dispatch($uri);

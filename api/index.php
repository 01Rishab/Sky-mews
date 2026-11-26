<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Setup temporary writable storage on Vercel's read-only serverless filesystem
$storagePath = sys_get_temp_dir() . '/storage';

$dirs = [
    $storagePath,
    $storagePath . '/app',
    $storagePath . '/app/public',
    $storagePath . '/framework',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0777, true);
    }
}

putenv("VIEW_COMPILED_PATH={$storagePath}/framework/views");
putenv("APP_CONFIG_CACHE={$storagePath}/framework/cache/config.php");
putenv("APP_SERVICES_CACHE={$storagePath}/framework/cache/services.php");
putenv("APP_PACKAGES_CACHE={$storagePath}/framework/cache/packages.php");
putenv("APP_ROUTES_CACHE={$storagePath}/framework/cache/routes.php");
putenv("APP_EVENTS_CACHE={$storagePath}/framework/cache/events.php");

try {
    require __DIR__ . '/../vendor/autoload.php';

    /** @var Application $app */
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    $app->useStoragePath($storagePath);

    $app->handleRequest(Request::capture());
} catch (\Throwable $e) {
    http_response_code(500);
    header('Content-Type: text/plain');
    echo "Sky Mews Serverless Error:\n\n";
    echo $e->getMessage() . "\n\n";
    echo "File: " . $e->getFile() . " (Line: " . $e->getLine() . ")\n\n";
    echo "Trace:\n" . $e->getTraceAsString();
}

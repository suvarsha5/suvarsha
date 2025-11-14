<?php
/**
 * Router for PHP Built-in Server
 * This file handles URL routing when using php -S (built-in server)
 * The built-in server doesn't support .htaccess, so we use this router
 */

$uri = urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

// Serve static files directly (CSS, JS, images, etc.)
$staticFile = __DIR__ . $uri;
if ($uri !== '/' && $uri !== '' && file_exists($staticFile) && !is_dir($staticFile)) {
    return false;
}

// Parse route from URI
$route = trim($uri, '/');
if (empty($route) || $route === '/') {
    $route = '';
}

// Set route parameter for index.php (empty string for home)
$_GET['route'] = $route;

// Route everything through index.php
chdir(__DIR__);
require_once __DIR__ . '/index.php';


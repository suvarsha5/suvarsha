<?php
/**
 * Application Configuration
 */

// Site Information
define('SITE_NAME', 'Suvarsha TechConsult');
define('SITE_URL', 'http://localhost');
define('SITE_EMAIL', 'info@suvarsh.com');
define('SITE_PHONE', '+1 (555) 123-4567');

// Paths
define('BASE_PATH', dirname(__DIR__));
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PAGES_PATH', BASE_PATH . '/pages');
// Assets path - adjust if needed based on your server setup
define('ASSETS_PATH', '/assets');

// Timezone
date_default_timezone_set('America/New_York');

// Error Reporting (set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Start session
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}


<?php
// Simple test file to check if PHP is working
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "PHP is working!<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";
echo "Current Directory: " . __DIR__ . "<br>";

// Test config loading
if (file_exists(__DIR__ . '/config/config.php')) {
    require_once __DIR__ . '/config/config.php';
    echo "Config loaded successfully!<br>";
    echo "Site Name: " . SITE_NAME . "<br>";
} else {
    echo "Config file not found!<br>";
}

// Test database connection (will fail if DB not set up, but that's OK)
if (file_exists(__DIR__ . '/config/database.php')) {
    require_once __DIR__ . '/config/database.php';
    try {
        $pdo = getDBConnection();
        echo "Database connection: OK<br>";
    } catch (Exception $e) {
        echo "Database connection: Failed (this is OK if DB not set up yet)<br>";
        echo "Error: " . $e->getMessage() . "<br>";
    }
}

echo "<br><a href='/'>Go to Homepage</a>";


<?php
/**
 * Main Router - Entry Point
 */

require_once 'config/config.php';
require_once 'config/database.php';

/**
 * Simple Router
 */
class Router {
    private $routes = [];
    
    public function addRoute($path, $handler) {
        $this->routes[$path] = $handler;
    }
    
    public function dispatch() {
        $route = $_GET['route'] ?? 'home';
        $route = rtrim($route, '/');
        
        // Check if route exists
        if (isset($this->routes[$route])) {
            $handler = $this->routes[$route];
            if (is_callable($handler)) {
                call_user_func($handler);
            } elseif (file_exists($handler)) {
                require $handler;
            }
        } else {
            // Try to load page file
            $pageFile = PAGES_PATH . '/' . $route . '.php';
            if (file_exists($pageFile)) {
                require $pageFile;
            } else {
                http_response_code(404);
                require PAGES_PATH . '/404.php';
            }
        }
    }
}

// Initialize router
$router = new Router();

// Define routes
$router->addRoute('', function() {
    require PAGES_PATH . '/home.php';
});

$router->addRoute('home', function() {
    require PAGES_PATH . '/home.php';
});

$router->addRoute('about', function() {
    require PAGES_PATH . '/about.php';
});

$router->addRoute('services', function() {
    require PAGES_PATH . '/services.php';
});

$router->addRoute('portfolio', function() {
    require PAGES_PATH . '/portfolio.php';
});

$router->addRoute('blog', function() {
    require PAGES_PATH . '/blog.php';
});

$router->addRoute('contact', function() {
    require PAGES_PATH . '/contact.php';
});

// API Routes
$router->addRoute('api/contact', function() {
    require 'api/contact.php';
});

// Dispatch
$router->dispatch();


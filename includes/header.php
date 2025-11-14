<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? htmlspecialchars($pageDescription) : 'Professional IT Consultancy Services'; ?>">
    <meta name="keywords" content="IT consultancy, technology consulting, software development, digital transformation">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . ' - ' : ''; ?><?php echo SITE_NAME; ?></title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo ASSETS_PATH; ?>/css/style.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="/" class="text-2xl font-bold text-blue-600">
                        <i class="fas fa-code mr-2"></i><?php echo SITE_NAME; ?>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="/" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Home</a>
                    <a href="/about" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">About</a>
                    <a href="/services" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Services</a>
                    <a href="/portfolio" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Portfolio</a>
                    <a href="/blog" class="text-gray-700 hover:text-blue-600 px-3 py-2 text-sm font-medium transition">Blog</a>
                    <a href="/contact" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition text-sm font-medium">Contact</a>
                </div>
                
                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-blue-600 focus:outline-none">
                        <i class="fas fa-bars text-2xl"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="/" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Home</a>
                <a href="/about" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-md">About</a>
                <a href="/services" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Services</a>
                <a href="/portfolio" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Portfolio</a>
                <a href="/blog" class="block px-3 py-2 text-gray-700 hover:bg-blue-50 rounded-md">Blog</a>
                <a href="/contact" class="block px-3 py-2 bg-blue-600 text-white rounded-md">Contact</a>
            </div>
        </div>
    </nav>


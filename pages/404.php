<?php
http_response_code(404);
$pageTitle = '404 - Page Not Found';
$pageDescription = 'The page you are looking for could not be found';
require_once INCLUDES_PATH . '/header.php';
?>

<section class="py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="text-6xl font-bold text-gray-300 mb-4">404</div>
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Page Not Found</h1>
        <p class="text-gray-600 text-lg mb-8">Sorry, the page you are looking for does not exist.</p>
        <a href="/" class="bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block">
            Go Back Home
        </a>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


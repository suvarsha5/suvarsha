<?php
$pageTitle = 'Home';
$pageDescription = 'Professional IT Consultancy Services - Transform your business with cutting-edge technology solutions';
require_once INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Transform Your Business with Technology</h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100">Expert IT consultancy services to drive innovation and growth</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
                    Get Started
                </a>
                <a href="/services" class="bg-transparent border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition">
                    Our Services
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Services</h2>
            <p class="text-gray-600 text-lg">Comprehensive IT solutions tailored to your business needs</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-code"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                <p class="text-gray-600">Custom web applications built with modern technologies and best practices.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-cloud"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Cloud Solutions</h3>
                <p class="text-gray-600">Migrate to the cloud and leverage scalable infrastructure for your business.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition">
                <div class="text-blue-600 text-4xl mb-4">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Digital Transformation</h3>
                <p class="text-gray-600">Modernize your business processes with cutting-edge digital solutions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Why Choose Us</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-users text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Expert Team</h3>
                <p class="text-gray-600 text-sm">Experienced professionals with industry expertise</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-rocket text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Fast Delivery</h3>
                <p class="text-gray-600 text-sm">Quick turnaround times without compromising quality</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-shield-alt text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">Secure Solutions</h3>
                <p class="text-gray-600 text-sm">Enterprise-grade security for your peace of mind</p>
            </div>
            
            <div class="text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-headset text-2xl"></i>
                </div>
                <h3 class="font-semibold mb-2">24/7 Support</h3>
                <p class="text-gray-600 text-sm">Round-the-clock assistance when you need it</p>
            </div>
        </div>
    </div>
</section>

<!-- Recent Projects -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Recent Projects</h2>
            <p class="text-gray-600 text-lg">See how we've helped businesses succeed</p>
        </div>
        
        <?php
        try {
            $pdo = getDBConnection();
            $stmt = $pdo->query("SELECT * FROM case_studies WHERE featured = 1 ORDER BY created_at DESC LIMIT 3");
            $projects = $stmt->fetchAll();
        } catch (PDOException $e) {
            $projects = [];
        }
        ?>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php if (!empty($projects)): ?>
                <?php foreach ($projects as $project): ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-project-diagram text-white text-6xl"></i>
                        </div>
                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="text-gray-600 mb-4"><?php echo htmlspecialchars(substr($project['description'], 0, 100)) . '...'; ?></p>
                            <a href="/portfolio" class="text-blue-600 hover:text-blue-800 font-medium">Learn More →</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="col-span-3 text-center text-gray-500 py-8">
                    <p>No featured projects yet. Check back soon!</p>
                </div>
            <?php endif; ?>
        </div>
        
        <div class="text-center mt-8">
            <a href="/portfolio" class="bg-blue-600 text-white px-6 py-3 rounded-lg hover:bg-blue-700 transition">
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-blue-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Transform Your Business?</h2>
        <p class="text-xl mb-8 text-blue-100">Let's discuss how we can help you achieve your goals</p>
        <a href="/contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition inline-block">
            Get in Touch
        </a>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


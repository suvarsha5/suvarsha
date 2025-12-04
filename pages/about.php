<?php
$pageTitle = 'About Us';
$pageDescription = 'Learn about our IT consultancy team and our mission to transform businesses through technology';
require_once INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">About Us</h1>
        <p class="text-xl text-blue-100">Your trusted partner in digital transformation</p>
    </div>
</section>

<!-- About Content -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-3xl font-bold mb-6">Who We Are</h2>
                <p class="text-gray-600 mb-4 text-lg">
                    <?php echo SITE_NAME; ?> is a leading IT consultancy firm dedicated to helping businesses 
                    leverage technology to achieve their strategic goals. With years of experience in the industry, 
                    we've successfully transformed numerous organizations across various sectors.
                </p>
                <p class="text-gray-600 mb-4 text-lg">
                    Our team of expert consultants, developers, and strategists work collaboratively to deliver 
                    innovative solutions that drive growth, improve efficiency, and enhance customer experiences.
                </p>
                <p class="text-gray-600 text-lg">
                    We believe in building long-term partnerships with our clients, understanding their unique 
                    challenges, and providing tailored solutions that deliver measurable results.
                </p>
            </div>
            
            <div class="bg-gray-100 p-8 rounded-lg">
                <div class="grid grid-cols-2 gap-6">
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                        <div class="text-gray-600">Projects Completed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">50+</div>
                        <div class="text-gray-600">Happy Clients</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">10+</div>
                        <div class="text-gray-600">Years Experience</div>
                    </div>
                    <div class="text-center">
                        <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                        <div class="text-gray-600">Support Available</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Values -->
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-blue-600 text-3xl mb-4">
                    <i class="fas fa-lightbulb"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Innovation</h3>
                <p class="text-gray-600">We stay ahead of the curve, constantly exploring new technologies and methodologies to deliver cutting-edge solutions.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-blue-600 text-3xl mb-4">
                    <i class="fas fa-handshake"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Integrity</h3>
                <p class="text-gray-600">We conduct business with honesty, transparency, and ethical practices, building trust with every interaction.</p>
            </div>
            
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="text-blue-600 text-3xl mb-4">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-xl font-semibold mb-3">Excellence</h3>
                <p class="text-gray-600">We strive for excellence in everything we do, ensuring the highest quality standards in our deliverables.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Team</h2>
            <p class="text-gray-600 text-lg">Meet the experts behind our success</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gradient-to-r from-blue-400 to-blue-600 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user text-white text-5xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Dolly Dhanwani</h3>
                <p class="text-blue-600 mb-2">CEO & Founder</p>
                <p class="text-gray-600 text-sm">20+ years of experience in IT consulting and digital transformation</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gradient-to-r from-blue-400 to-blue-600 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user text-white text-5xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Suketu Deliwala</h3>
                <p class="text-blue-600 mb-2">CTO</p>
                <p class="text-gray-600 text-sm">Expert in cloud architecture and enterprise solutions</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gradient-to-r from-blue-400 to-blue-600 w-32 h-32 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-user text-white text-5xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Vinit Deliwala</h3>
                <p class="text-blue-600 mb-2">Lead Developer</p>
                <p class="text-gray-600 text-sm">Specialized in modern web technologies and agile methodologies</p>
            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


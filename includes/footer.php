    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <h3 class="text-xl font-bold mb-4"><?php echo SITE_NAME; ?></h3>
                    <p class="text-gray-400 mb-4">Transforming businesses through innovative technology solutions.</p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                
                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="/" class="text-gray-400 hover:text-white transition">Home</a></li>
                        <li><a href="/about" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition">Services</a></li>
                        <li><a href="/portfolio" class="text-gray-400 hover:text-white transition">Portfolio</a></li>
                    </ul>
                </div>
                
                <!-- Services -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Services</h4>
                    <ul class="space-y-2">
                        <li><a href="/services" class="text-gray-400 hover:text-white transition">Web Development</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition">Cloud Solutions</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition">Digital Transformation</a></li>
                        <li><a href="/services" class="text-gray-400 hover:text-white transition">IT Consulting</a></li>
                    </ul>
                </div>
                
                <!-- Contact Info -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Contact</h4>
                    <ul class="space-y-2 text-gray-400">
                        <li><i class="fas fa-envelope mr-2"></i><?php echo SITE_EMAIL; ?></li>
                        <li><i class="fas fa-phone mr-2"></i><?php echo SITE_PHONE; ?></li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i>151 Dan Leckie Way, Toronto, Ontario M5V4B2 Canada</li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
    
    <!-- JavaScript -->
    <script src="<?php echo ASSETS_PATH; ?>/js/main.js"></script>
</body>
</html>


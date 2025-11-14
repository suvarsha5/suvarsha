<?php
$pageTitle = 'Contact Us';
$pageDescription = 'Get in touch with us for your IT consultancy needs';
require_once INCLUDES_PATH . '/header.php';

$success = false;
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $service = trim($_POST['service'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Validation
    if (empty($name) || empty($email) || empty($message)) {
        $error = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Please enter a valid email address.';
    } else {
        try {
            $pdo = getDBConnection();
            $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone, message, service_type) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $message, $service]);
            $success = true;
            
            // Clear form data
            $name = $email = $phone = $service = $message = '';
        } catch (PDOException $e) {
            $error = 'Sorry, there was an error submitting your message. Please try again later.';
        }
    }
}
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-xl text-blue-100">Let's discuss how we can help your business</p>
    </div>
</section>

<!-- Contact Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div>
                <h2 class="text-2xl font-bold mb-6">Send us a Message</h2>
                
                <?php if ($success): ?>
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                        <i class="fas fa-check-circle mr-2"></i>Thank you! Your message has been sent successfully. We'll get back to you soon.
                    </div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-6">
                        <i class="fas fa-exclamation-circle mr-2"></i><?php echo htmlspecialchars($error); ?>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="/contact" class="space-y-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" required 
                               value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" required
                               value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                        <input type="tel" id="phone" name="phone"
                               value="<?php echo isset($phone) ? htmlspecialchars($phone) : ''; ?>"
                               class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                    
                    <div>
                        <label for="service" class="block text-sm font-medium text-gray-700 mb-2">Service Interest</label>
                        <select id="service" name="service" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            <option value="">Select a service...</option>
                            <option value="web-development" <?php echo (isset($service) && $service === 'web-development') ? 'selected' : ''; ?>>Web Development</option>
                            <option value="cloud-solutions" <?php echo (isset($service) && $service === 'cloud-solutions') ? 'selected' : ''; ?>>Cloud Solutions</option>
                            <option value="digital-transformation" <?php echo (isset($service) && $service === 'digital-transformation') ? 'selected' : ''; ?>>Digital Transformation</option>
                            <option value="it-consulting" <?php echo (isset($service) && $service === 'it-consulting') ? 'selected' : ''; ?>>IT Consulting</option>
                            <option value="mobile-development" <?php echo (isset($service) && $service === 'mobile-development') ? 'selected' : ''; ?>>Mobile Development</option>
                            <option value="support-maintenance" <?php echo (isset($service) && $service === 'support-maintenance') ? 'selected' : ''; ?>>Support & Maintenance</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="5" required
                                  class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                    </div>
                    
                    <button type="submit" class="w-full bg-blue-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h2 class="text-2xl font-bold mb-6">Get in Touch</h2>
                
                <div class="space-y-6 mb-8">
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-lg mr-4">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Email</h3>
                            <a href="mailto:<?php echo SITE_EMAIL; ?>" class="text-gray-600 hover:text-blue-600">
                                <?php echo SITE_EMAIL; ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-lg mr-4">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Phone</h3>
                            <a href="tel:<?php echo str_replace([' ', '(', ')', '-'], '', SITE_PHONE); ?>" class="text-gray-600 hover:text-blue-600">
                                <?php echo SITE_PHONE; ?>
                            </a>
                        </div>
                    </div>
                    
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-600 p-3 rounded-lg mr-4">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold mb-1">Address</h3>
                            <p class="text-gray-600">123 Tech Street<br>City, State 12345<br>United States</p>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gray-100 p-6 rounded-lg">
                    <h3 class="font-semibold mb-4">Business Hours</h3>
                    <ul class="space-y-2 text-gray-600">
                        <li class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Saturday</span>
                            <span>10:00 AM - 4:00 PM</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


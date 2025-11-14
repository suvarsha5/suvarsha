<?php
$pageTitle = 'Portfolio';
$pageDescription = 'View our portfolio of successful IT projects and case studies';
require_once INCLUDES_PATH . '/header.php';

try {
    $pdo = getDBConnection();
    $stmt = $pdo->query("SELECT * FROM case_studies ORDER BY created_at DESC");
    $projects = $stmt->fetchAll();
} catch (PDOException $e) {
    $projects = [];
}
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Portfolio</h1>
        <p class="text-xl text-blue-100">Showcasing our successful projects and client transformations</p>
    </div>
</section>

<!-- Portfolio Grid -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($projects)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($projects as $project): ?>
                    <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-project-diagram text-white text-6xl"></i>
                        </div>
                        <div class="p-6">
                            <div class="flex items-center justify-between mb-2">
                                <h3 class="text-xl font-semibold"><?php echo htmlspecialchars($project['title']); ?></h3>
                                <?php if ($project['featured']): ?>
                                    <span class="bg-yellow-400 text-yellow-900 text-xs font-semibold px-2 py-1 rounded">Featured</span>
                                <?php endif; ?>
                            </div>
                            <?php if ($project['client_name']): ?>
                                <p class="text-gray-500 text-sm mb-3">
                                    <i class="fas fa-building mr-1"></i><?php echo htmlspecialchars($project['client_name']); ?>
                                </p>
                            <?php endif; ?>
                            <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($project['description']); ?></p>
                            <?php if ($project['technologies']): ?>
                                <div class="mb-4">
                                    <p class="text-sm text-gray-500 mb-2">Technologies:</p>
                                    <div class="flex flex-wrap gap-2">
                                        <?php 
                                        $techs = explode(',', $project['technologies']);
                                        foreach ($techs as $tech): 
                                        ?>
                                            <span class="bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded"><?php echo htmlspecialchars(trim($tech)); ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                            <div class="text-sm text-gray-500">
                                <i class="far fa-calendar mr-1"></i><?php echo date('F Y', strtotime($project['created_at'])); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-gray-400 text-6xl mb-4">
                    <i class="fas fa-folder-open"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">No Projects Yet</h3>
                <p class="text-gray-500">Check back soon for our portfolio updates!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Testimonials -->
<section class="bg-gray-100 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Client Testimonials</h2>
        </div>
        
        <?php
        try {
            $stmt = $pdo->query("SELECT * FROM testimonials WHERE featured = 1 ORDER BY created_at DESC LIMIT 3");
            $testimonials = $stmt->fetchAll();
        } catch (PDOException $e) {
            $testimonials = [];
        }
        ?>
        
        <?php if (!empty($testimonials)): ?>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <?php foreach ($testimonials as $testimonial): ?>
                    <div class="bg-white p-6 rounded-lg shadow">
                        <div class="flex mb-4">
                            <?php for ($i = 0; $i < $testimonial['rating']; $i++): ?>
                                <i class="fas fa-star text-yellow-400"></i>
                            <?php endfor; ?>
                        </div>
                        <p class="text-gray-600 mb-4 italic">"<?php echo htmlspecialchars($testimonial['testimonial']); ?>"</p>
                        <div>
                            <p class="font-semibold"><?php echo htmlspecialchars($testimonial['client_name']); ?></p>
                            <?php if ($testimonial['company']): ?>
                                <p class="text-sm text-gray-500"><?php echo htmlspecialchars($testimonial['company']); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center text-gray-500 py-8">
                <p>No testimonials available yet.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4">Have a Project in Mind?</h2>
        <p class="text-gray-600 text-lg mb-8">Let's discuss how we can bring your vision to life</p>
        <a href="/contact" class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition inline-block">
            Start Your Project
        </a>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


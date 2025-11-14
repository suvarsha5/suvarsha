<?php
$pageTitle = 'Blog';
$pageDescription = 'Read our latest insights, tips, and updates on IT consultancy and technology';
require_once INCLUDES_PATH . '/header.php';

try {
    $pdo = getDBConnection();
    $stmt = $pdo->query("SELECT * FROM posts WHERE published_at IS NOT NULL AND published_at <= NOW() ORDER BY published_at DESC");
    $posts = $stmt->fetchAll();
} catch (PDOException $e) {
    $posts = [];
}
?>

<!-- Page Header -->
<section class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Our Blog</h1>
        <p class="text-xl text-blue-100">Insights, tips, and updates from our team</p>
    </div>
</section>

<!-- Blog Posts -->
<section class="py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <?php if (!empty($posts)): ?>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($posts as $post): ?>
                    <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition">
                        <div class="h-48 bg-gradient-to-r from-blue-400 to-blue-600 flex items-center justify-center">
                            <i class="fas fa-blog text-white text-5xl"></i>
                        </div>
                        <div class="p-6">
                            <div class="text-sm text-gray-500 mb-2">
                                <i class="far fa-calendar mr-1"></i><?php echo date('F j, Y', strtotime($post['published_at'])); ?>
                                <?php if ($post['author']): ?>
                                    <span class="ml-3"><i class="fas fa-user mr-1"></i><?php echo htmlspecialchars($post['author']); ?></span>
                                <?php endif; ?>
                            </div>
                            <h2 class="text-xl font-semibold mb-3">
                                <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" class="hover:text-blue-600 transition">
                                    <?php echo htmlspecialchars($post['title']); ?>
                                </a>
                            </h2>
                            <?php if ($post['excerpt']): ?>
                                <p class="text-gray-600 mb-4"><?php echo htmlspecialchars($post['excerpt']); ?></p>
                            <?php else: ?>
                                <p class="text-gray-600 mb-4"><?php echo htmlspecialchars(substr(strip_tags($post['content']), 0, 150)) . '...'; ?></p>
                            <?php endif; ?>
                            <a href="/blog/<?php echo htmlspecialchars($post['slug']); ?>" class="text-blue-600 font-semibold hover:text-blue-800">
                                Read More →
                            </a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="text-center py-16">
                <div class="text-gray-400 text-6xl mb-4">
                    <i class="fas fa-newspaper"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-700 mb-2">No Blog Posts Yet</h3>
                <p class="text-gray-500">Check back soon for our latest articles and insights!</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<?php require_once INCLUDES_PATH . '/footer.php'; ?>


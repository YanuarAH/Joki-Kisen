<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$is_categories_page = strpos($current_page, '-categories') !== false;

if ($is_categories_page) {
    // Extract game ID from categories page
    $current_game = str_replace('-categories', '', $current_page);
    $current_category = '';
} else {
    $current_game = $current_page;
    $current_category = $_GET['category'] ?? '';
    if (isset($games[$current_game]) && empty($current_category)) {
        $current_category = array_keys($games[$current_game]['categories'])[0];
    }
}
?>
<aside class="sidebar">
    <!-- Mobile Sidebar Header -->
    <div class="sidebar-header">
        <h3>Menu</h3>
        <button class="sidebar-close-btn" onclick="closeSidebar()" aria-label="Close menu">
            ✕
        </button>
    </div>

    <div class="sidebar-content">
        <!-- Back Navigation -->
        <?php if ($is_categories_page): ?>
        <div class="sidebar-section">
            <a href="../index.php" class="back-home-btn">
                <span class="back-icon">←</span>
                <span>Kembali ke Beranda</span>
            </a>
        </div>
        <?php else: ?>
        <div class="sidebar-section">
            <a href="<?php echo $current_game; ?>-categories.php" class="back-categories-btn">
                <span class="back-icon">←</span>
                <span>Kembali ke Kategori</span>
            </a>
        </div>
        <?php endif; ?>

        <!-- Game Navigation -->
        <div class="sidebar-section">
            <h3 class="sidebar-title">Game List</h3>
            <nav class="sidebar-nav">
                <a href="<?php echo $is_categories_page ? '../' : '../'; ?>index.php" class="sidebar-link" onclick="handleSidebarLinkClick()">
                    <span class="sidebar-icon">🏠</span>
                    Beranda
                </a>
                <?php foreach ($games as $game_id => $game): ?>
                <a href="<?php echo $game_id; ?><?php echo $is_categories_page ? '-categories' : '-categories'; ?>.php" 
                   class="sidebar-link <?php echo $current_game === $game_id ? 'active' : ''; ?>"
                   onclick="handleSidebarLinkClick()">
                    <?php echo $game['title']; ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>

        <!-- Category Navigation (only show on detail pages) -->
        <?php if (!$is_categories_page && isset($games[$current_game])): ?>
        <div class="sidebar-section">
            <h3 class="sidebar-title">Joki <?php echo $games[$current_game]['title']; ?></h3>
            <nav class="sidebar-nav">
                <?php foreach ($games[$current_game]['categories'] as $cat_id => $category): ?>
                <a href="?category=<?php echo $cat_id; ?>" 
                   class="sidebar-link category-link <?php echo $current_category === $cat_id ? 'active' : ''; ?>"
                   onclick="handleSidebarLinkClick()">
                    <?php echo $category['title']; ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>
        <?php endif; ?>

        <!-- Footer -->
        <div class="sidebar-footer">
            <p>&copy; 2025 Joki Epsi</p>
        </div>
    </div>
</aside>

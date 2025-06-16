<?php
$current_game = basename($_SERVER['PHP_SELF'], '.php');
$current_category = $_GET['category'] ?? '';
if (isset($games[$current_game]) && empty($current_category)) {
    $current_category = array_keys($games[$current_game]['categories'])[0];
}
?>
<aside class="sidebar">
    <!-- Mobile Sidebar Header -->
    <div class="sidebar-header">
        <h3>Menu</h3>
    </div>

    <div class="sidebar-content">
        <!-- Game Navigation -->
        <div class="sidebar-section">
            <h3 class="sidebar-title">Game List</h3>
            <nav class="sidebar-nav">
                <a href="/" class="sidebar-link" onclick="handleSidebarLinkClick()">
                    <span class="sidebar-icon">🏠</span>
                    Beranda
                </a>
                <?php foreach ($games as $game_id => $game): ?>
                <a href="<?php echo $game_id; ?>.php" 
                   class="sidebar-link <?php echo $current_game === $game_id ? 'active' : ''; ?>"
                   onclick="handleSidebarLinkClick()">
                    <?php echo $game['title']; ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>

        <!-- Category Navigation -->
        <?php if (isset($games[$current_game])): ?>
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

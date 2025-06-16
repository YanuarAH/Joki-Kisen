<?php
$current_game = basename($_SERVER['PHP_SELF'], '.php');
$current_category = $_GET['category'] ?? '';
if (isset($games[$current_game]) && empty($current_category)) {
    $current_category = array_keys($games[$current_game]['categories'])[0];
}
?>
<aside class="sidebar">
    <div class="sidebar-header">
        <h3>Menu</h3>
    </div>

    <div class="sidebar-content">
        <div class="sidebar-section">
            <h3 class="sidebar-title">Game List</h3>
            <nav class="sidebar-nav">
                <a href="/" class="sidebar-link" onclick="handleSidebarLinkClick()">
                    <span class="sidebar-icon">🏠</span>
                    Beranda
                </a>
                <?php foreach ($games as $sidebar_game_id => $sidebar_game): ?>
                <a href="<?php echo $sidebar_game_id; ?>.php" 
                   class="sidebar-link <?php echo $current_game === $sidebar_game_id ? 'active' : ''; ?>"
                   onclick="handleSidebarLinkClick()">
                    <?php echo $sidebar_game['title']; ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>

        <?php if (isset($games[$current_game])): ?>
        <div class="sidebar-section">
            <h3 class="sidebar-title">Joki <?php echo $games[$current_game]['title']; ?></h3>
            <nav class="sidebar-nav">
                <?php foreach ($games[$current_game]['categories'] as $sidebar_cat_id => $sidebar_category): ?>
                <a href="?category=<?php echo $sidebar_cat_id; ?>" 
                   class="sidebar-link category-link <?php echo $current_category === $sidebar_cat_id ? 'active' : ''; ?>"
                   onclick="handleSidebarLinkClick()">
                    <?php echo $sidebar_category['title']; ?>
                </a>
                <?php endforeach; ?>
            </nav>
        </div>
        <?php endif; ?>

        <div class="sidebar-footer">
            <p>&copy; 2025 Joki Epsi</p>
        </div>
    </div>
</aside>
<?php 
require_once dirname(__DIR__) . '/config/games.php';
require_once dirname(__DIR__) . '/components/price-list.php';
$game_id = 'genshin';
$game = $games[$game_id];
$current_category = $_GET['category'] ?? 'explore';
$category = $game['categories'][$current_category] ?? $game['categories']['explore'];
$page_title = $game['title'] . ' - ' . $category['title'] . ' - ' . $site_config['site_name'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $category['description']; ?> - <?php echo $site_config['site_description']; ?>">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
    <?php include dirname(__DIR__) . '/includes/header.php'; ?>
    
    <div class="game-layout">
        <!-- Mobile Header -->
        <div class="mobile-header">
            <button class="mobile-menu-btn" onclick="toggleSidebar()">☰</button>
            <h1><?php echo $game['title']; ?></h1>
        </div>

        <?php include dirname(__DIR__) . '/includes/sidebar.php'; ?>
        
        <main class="game-content">
            <div class="content-wrapper">
                <?php renderPriceList($category, $game['title']); ?>
            </div>
        </main>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>

<?php 
require_once dirname(__DIR__) . '/config/games.php';
$game_id = 'hsr';
$game = $games[$game_id];
$current_category = $_GET['category'] ?? 'endgame_content';
$category = $game['categories'][$current_category] ?? $game['categories']['endgame_content'];
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
</head>
<body>
    <?php include dirname(__DIR__) . '/includes/header.php'; ?>
    
    <div class="game-layout">
        <div class="mobile-header">
            <button class="mobile-menu-btn" onclick="toggleSidebar()">☰</button>
        </div>

        <?php include dirname(__DIR__) . '/includes/sidebar.php'; ?>
        
        <main class="game-content">
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="content-title">
                        <h1><?php echo $category['title']; ?></h1>
                        <span class="game-badge"><?php echo $game['title']; ?></span>
                    </div>
                    <p class="content-description"><?php echo $category['description']; ?></p>
                </div>

                <div class="price-list">
                    <?php foreach ($category['services'] as $service): ?>
                    <div class="price-card">
                        <?php 
                        // Cek untuk gambar opsional
                        if (isset($service['image']) && !empty($service['image'])): 
                        ?>
                            <img src="/<?php echo htmlspecialchars($service['image']); ?>" alt="<?php echo htmlspecialchars($service['name']); ?>" class="service-image">
                        <?php endif; ?>
                        
                        <div class="price-info">
                            <h3 class="service-name"><?php echo htmlspecialchars($service['name']); ?></h3>
                            <?php 
                            // KODE BARU: Cek apakah ada data 'unit' sebelum ditampilkan
                            if (isset($service['unit']) && !empty($service['unit'])): 
                            ?>
                                <p class="service-unit">Per <?php echo htmlspecialchars($service['unit']); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="price-display">
                            <div class="price"><?php echo htmlspecialchars($service['price']); ?></div>
                            <?php 
                            // KODE BARU: Cek juga di sini untuk 'unit' di sebelah harga
                            if (isset($service['unit']) && !empty($service['unit'])): 
                            ?>
                                <div class="price-unit">/<?php echo htmlspecialchars($service['unit']); ?></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php include dirname(__DIR__) . '/includes/contact.php'; ?>
            </div>
        </main>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>

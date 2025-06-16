<?php 
require_once dirname(__DIR__) . '/config/games.php';
$game_id = 'zzz';
$game = $games[$game_id];
$current_category = $_GET['category'] ?? 'story';
$category = $game['categories'][$current_category] ?? $game['categories']['story'];
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
            <h1><?php echo $game['title']; ?></h1>
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
                        <div class="price-info">
                            <h3 class="service-name"><?php echo $service['name']; ?></h3>
                            <p class="service-unit">Per <?php echo $service['unit']; ?></p>
                        </div>
                        <div class="price-display">
                            <div class="price"><?php echo $service['price']; ?></div>
                            <div class="price-unit">/<?php echo $service['unit']; ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>

                <div class="contact-card">
                    <h3>Cara Pemesanan</h3>
                    <p>Hubungi kami untuk melakukan pemesanan joki</p>
                    <ul class="contact-list">
                        <li>• Hubungi melalui WhatsApp atau Discord</li>
                        <li>• Berikan detail akun dan layanan yang diinginkan</li>
                        <li>• Pembayaran melalui Dana, GoPay, atau Saweria</li>
                        <li>• Estimasi pengerjaan 1-3 hari kerja</li>
                    </ul>
                    <div class="contact-buttons">
                        <a href="https://wa.me/<?php echo $site_config['contact']['whatsapp']; ?>" 
                           target="_blank" class="btn btn-success">WhatsApp</a>
                        <a href="<?php echo $site_config['contact']['saweria']; ?>" 
                           target="_blank" class="btn btn-primary">Saweria</a>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="../assets/js/script.js"></script>
</body>
</html>

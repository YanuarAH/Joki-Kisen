<?php 
require_once dirname(__DIR__) . '/config/games.php';
$page_title = 'Beranda - ' . $site_config['site_name'];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $site_config['site_description']; ?>">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include dirname(__DIR__) . '/includes/header.php'; ?>
    
    <main class="main-content">

        <!-- Carousel Section -->
        <section class="carousel-section">
            <div class="container">
                <div class="carousel-container">
                    <div class="carousel-wrapper">
    <div class="carousel-slide active">
        <img src="assets/images/carousel/c1.jpg" alt="Slide 1">
    </div>
    <div class="carousel-slide">
        <img src="assets/images/carousel/c2.jpg" alt="Slide 2">
    </div>
    <div class="carousel-slide">
        <img src="assets/images/carousel/c3.jpg" alt="Slide 3">
    </div>
    <div class="carousel-slide">
        <img src="assets/images/carousel/c4.jpg" alt="Slide 4">
    </div>
</div>

                    
                    <!-- Carousel Navigation -->
                    <div class="carousel-nav">
                        <button class="carousel-btn prev" onclick="prevSlide()" aria-label="Previous slide">‹</button>
                        <button class="carousel-btn next" onclick="nextSlide()" aria-label="Next slide">›</button>
                    </div>
                    
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators">
                        <button class="indicator active" onclick="goToSlide(0)" aria-label="Go to slide 1"></button>
                        <button class="indicator" onclick="goToSlide(1)" aria-label="Go to slide 2"></button>
                        <button class="indicator" onclick="goToSlide(2)" aria-label="Go to slide 3"></button>
                        <button class="indicator" onclick="goToSlide(3)" aria-label="Go to slide 4"></button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Saweria Support Section -->
        <section class="saweria-section">
            <div class="container">
                <div class="saweria-banner">
                    <div class="saweria-content">
                        <div class="saweria-icon">💰</div>
                        <div class="saweria-text">
                            <h3 class="saweria-title">Dukung Kami via Saweria</h3>
                            <p class="saweria-subtitle">Bantu kami memberikan layanan yang lebih baik</p>
                        </div>
                    </div>
                    <div class="saweria-action">
                        <a href="<?php echo $site_config['contact']['saweria']; ?>" 
                           target="_blank" class="btn-saweria">
                            <span class="btn-icon">💝</span>
                            <span class="btn-text">Support Saweria</span>
                            <span class="btn-arrow">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Games Grid -->
        <section class="games-section">
            <div class="container">
                <h2 class="section-title">All Games</h2>
                <div class="games-grid">
                    <?php foreach ($games as $game_id => $game): ?>
                    <a href="games/<?php echo $game_id; ?>" class="game-card">
                        <div class="game-image">
                            <img src="<?php echo $game['image']; ?>" alt="<?php echo $game['title']; ?>" 
                                 onerror="this.src='assets/images/placeholder.jpg'">
                        </div>
                        <div class="game-title"><?php echo $game['title']; ?></div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include dirname(__DIR__) . '/includes/footer.php'; ?>
    <script src="assets/js/script.js"></script>
</body>
</html>

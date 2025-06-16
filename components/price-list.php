<?php
function renderPriceList($category, $gameTitle) {
    ?>
    <div class="max-w-4xl">
        <!-- Header with Image -->
        <div class="category-header">
            <?php if (isset($category['image'])): ?>
            <div class="category-image">
                <img src="<?php echo $category['image']; ?>" alt="<?php echo $category['title']; ?>" 
                     onerror="this.style.display='none'">
            </div>
            <?php endif; ?>
            
            <div class="category-info">
                <div class="category-title-wrapper">
                    <h1 class="category-title"><?php echo $category['title']; ?></h1>
                    <span class="game-badge"><?php echo $gameTitle; ?></span>
                </div>
                <p class="category-description"><?php echo $category['description']; ?></p>
            </div>
        </div>

        <!-- Price List -->
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

        <!-- Important Notes -->
        <?php if (isset($GLOBALS['site_config']['notes'])): ?>
        <div class="notes-card">
            <h3>📌 Catatan Penting</h3>
            <ul class="notes-list">
                <?php foreach ($GLOBALS['site_config']['notes'] as $note): ?>
                <li>• <?php echo $note; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php endif; ?>

        <!-- Contact Info -->
        <div class="contact-card">
            <h3>⚡ Cara Pemesanan</h3>
            <p>Hubungi kami untuk melakukan pemesanan joki</p>
            <ul class="contact-list">
                <li>• Hubungi melalui WhatsApp atau Discord</li>
                <li>• Berikan detail akun dan layanan yang diinginkan</li>
                <li>• Pembayaran melalui Dana, GoPay, atau Saweria</li>
                <li>• Estimasi pengerjaan 1-3 hari kerja</li>
            </ul>
            <div class="contact-buttons">
                <a href="https://wa.me/<?php echo $GLOBALS['site_config']['contact']['whatsapp']; ?>" 
                   target="_blank" class="btn btn-success">
                   📱 WhatsApp
                </a>
                <a href="<?php echo $GLOBALS['site_config']['contact']['saweria']; ?>" 
                   target="_blank" class="btn btn-primary">
                   💰 Saweria
                </a>
            </div>
        </div>
    </div>
    <?php
}
?>

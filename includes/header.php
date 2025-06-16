<header class="header">
    <div class="container">
        <div class="header-content">
            <a href="/" class="logo">
                <div class="logo-icon">JE</div>
                <span class="logo-text"><?php echo $site_config['site_name']; ?></span>
            </a>
            
            <div class="header-actions">
                <button class="theme-toggle" onclick="toggleTheme()" aria-label="Toggle theme">
                    <span class="theme-icon">🌙</span>
                </button>
                <a href="<?php echo $site_config['contact']['saweria']; ?>" 
                   target="_blank" class="btn btn-primary">
                    Saweria
                </a>
            </div>
        </div>
    </div>
</header>

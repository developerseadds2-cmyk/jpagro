<nav class="site-nav" aria-label="Primary navigation">
    <a class="nav-link <?= is_active('home') ?>" href="<?= e(page_url()) ?>">Home</a>
    <a class="nav-link <?= is_active('about') ?>" href="<?= e(page_url('about')) ?>">About Us</a>
    <a class="nav-link <?= is_active('products') ?>" href="<?= e(page_url('products')) ?>">Products</a>
    <a class="nav-link <?= is_active('quality') ?>" href="<?= e(page_url('quality')) ?>">Quality</a>
    <!-- <a class="nav-link <?= is_active('gallery') ?>" href="<?= e(page_url('gallery')) ?>">Gallery</a> -->
    <!-- <a class="nav-link <?= is_active('contact') ?>" href="<?= e(page_url('contact')) ?>">Contact Us</a> -->
    <a class="button button-small" href="<?= e(page_url('contact')) ?>"><i class="bi bi-arrow-up-right"></i> Get a Quote</a>
</nav>

<?php
require_once __DIR__ . '/config/config.php';
$page = $_GET['page'] ?? 'home';
$allowedPages = ['home', 'about', 'products', 'quality', 'gallery', 'contact', 'privacy', 'terms'];
if (!in_array($page, $allowedPages, true)) {
    http_response_code(404);
    $page = '404';
}
if ($page === 'home') {
    $title = '';
    $description = 'Agricultural machinery parts for combine harvesters, straw reapers, super seeders and threshers from JP Agro Industries.';
} elseif ($page === 'about') {
    $title = 'About Us';
    $description = 'Learn how JP Agro Industries has built practical manufacturing experience since 2009.';
} elseif ($page === 'products') {
    $title = 'Products';
    $description = 'Browse combine, straw reaper, super seeder and thresher parts and components from JP Agro Industries.';
} elseif ($page === 'quality') {
    $title = 'Quality';
    $description = 'A disciplined quality process from material inspection through final product testing.';
} elseif ($page === 'gallery') {
    $title = 'Gallery';
    $description = 'A closer look at our machinery, fabrication and production environment.';
} elseif ($page === 'contact') {
    $title = 'Contact Us';
    $description = 'Contact JP Agro Industries about agricultural machinery parts and component requirements.';
} else {
    $title = ucwords(str_replace('-', ' ', $page));
}
include __DIR__ . '/includes/header.php';
if ($page === 'home')
    include __DIR__ . '/pages/home.php';
elseif ($page === 'about')
    include __DIR__ . '/pages/about.php';
elseif ($page === 'products')
    include __DIR__ . '/pages/products.php';
elseif ($page === 'quality')
    include __DIR__ . '/pages/quality.php';
elseif ($page === 'gallery')
    include __DIR__ . '/pages/gallery.php';
elseif ($page === 'contact')
    include __DIR__ . '/pages/contact.php';
elseif ($page === 'privacy')
    include __DIR__ . '/pages/privacy.php';
elseif ($page === 'terms')
    include __DIR__ . '/pages/terms.php';
else
    include __DIR__ . '/pages/404.php';
include __DIR__ . '/includes/footer.php';

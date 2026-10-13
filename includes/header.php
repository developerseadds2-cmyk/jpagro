<?php
require_once __DIR__ . '/../config/config.php';
$page = $page ?? 'home';
$title = $title ?? '';
$description = $description ?? 'JP Agro Industries manufactures dependable agricultural machinery, farm implements and precision-fabricated components for Indian industry.';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= page_title($title) ?></title>
    <meta name="description" content="<?= e($description) ?>">
    <meta name="keywords" content="JP Agro Industries, agricultural machinery manufacturer, chaff cutter manufacturer, farm implements, precision manufacturing India">
    <link rel="canonical" href="<?= e(page_url($page)) ?>">
    <meta property="og:title" content="<?= page_title($title) ?>">
    <meta property="og:description" content="<?= e($description) ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= e(page_url($page)) ?>">
    <base href="<?= e((SITE_URL ?: '') . '/') ?>">
    <link rel="icon" type="image/png" href="<?= asset('images/logo/logo.png') ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Space+Grotesk:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <link href="assets/css/style.css?v=<?= filemtime(__DIR__ . '/../assets/css/style.css') ?>" rel="stylesheet">
    <style>.intro-art{position:relative}</style>
</head>
<body>
<div class="site-preloader" id="site-preloader" role="status" aria-label="Loading JP Agro Industries">
    <div class="preloader-inner">
        <img src="assets/images/logo/logo.png" alt="JP Agro Industries" width="184" height="54">
        <span class="preloader-line" aria-hidden="true"></span>
    </div>
</div>
<a class="skip-link" href="<?= e(page_url($page)) ?>#main-content">Skip to content</a>
<header class="site-header" id="site-header">
    <div class="container header-inner">
        <a class="brand" href="<?= e(page_url()) ?>" aria-label="JP Agro Industries home">
            <img src="assets/images/logo/jp-logo.png" alt="JP Agro Industries logo" width="184" height="54">
        </a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="main-navigation" aria-label="Open navigation"><i class="bi bi-list"></i></button>
        <div class="navigation-wrap" id="main-navigation">
            <?php include __DIR__ . '/navbar.php'; ?>
        </div>
    </div>
</header>
<main id="main-content">

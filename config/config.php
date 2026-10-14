<?php

declare(strict_types=1);

session_start();

const SITE_NAME = 'JP Agro Industries';
const SITE_TAGLINE = 'Built on Trust. Driven by Excellence.';
$scriptPath = trim(str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '/index.php'), '/');
$siteSegments = explode('/', $scriptPath);
array_pop($siteSegments);
if ($siteSegments && end($siteSegments) === 'forms') {
    array_pop($siteSegments);
}
$sitePath = $siteSegments ? '/' . implode('/', $siteSegments) : '';
define('SITE_URL', $sitePath);
const CONTACT_EMAIL = 'enquiry@jpagroindustries.com';
const PHONE_NUMBER = '+91 98765 43210';
const WHATSAPP_NUMBER = '919876543210';
const COMPANY_ADDRESS = 'Industrial Area, India';

function e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function asset(string $path): string
{
    return 'assets/' . ltrim($path, '/');
}

function url(string $path = ''): string
{
    return SITE_URL . ($path ? '/' . ltrim($path, '/') : '');
}

function page_url(string $page = 'home', string $anchor = ''): string
{
    $url = $page === 'home'
        ? (SITE_URL ?: '') . '/'
        : SITE_URL . '/index.php?page=' . rawurlencode(trim($page, '/'));
    return $url . ($anchor ? '#' . ltrim($anchor, '#') : '');
}

function page_title(string $title = ''): string
{
    return $title ? e($title . ' | ' . SITE_NAME) : e(SITE_NAME . ' | Agricultural Machinery & Precision Manufacturing');
}

function is_active(string $page): string
{
    $current = $_GET['page'] ?? 'home';
    return $current === $page ? 'is-active' : '';
}

function csrf_token(): string
{
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verify_csrf(string $token): bool
{
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

$products = [
    ['name' => 'Combine Paddy Basket', 'category' => 'Combine Parts', 'image' => 'images/products/Combine paddy basket.jpeg'],
    ['name' => 'Combine Paddy Thresher', 'category' => 'Combine Parts', 'image' => 'images/products/Combine paddy thresher.jpeg'],
    ['name' => 'Combine Wheat Basket', 'category' => 'Combine Parts', 'image' => 'images/products/Combine wheat basket.jpeg'],
    ['name' => 'Combine Wheat Thresher', 'category' => 'Combine Parts', 'image' => 'images/products/Combine wheat thresher.jpeg'],
    ['name' => 'Reaper Basket (8 mm Rod)', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/Reaper basket 8 mm rod.jpeg'],
    ['name' => 'Straw Chopper Thresher', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/Straw chopper thresher.jpeg'],
    ['name' => 'Straw reaper blead flat', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/Straw reaper blead flat.jpeg'],
    ['name' => 'Straw Reaper Other Shafts', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/Straw reaper other shafts.jpeg'],
    ['name' => 'Straw Reaper Shaft Set', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/Straw reaper shaft set.jpeg'],
    ['name' => 'Super Seeder Pistol Rod', 'category' => 'Super Seeder Parts', 'image' => 'images/products/Super seeder pistol rod.jpeg'],
    ['name' => 'Self & Tractor Combine Harvester Shaft Set', 'category' => 'Combine Parts', 'image' => 'images/products/ResigedProducts/Self & tractor  Combine harvester  shaft set.jpg'],
    ['name' => 'Combine & Reaper Bush', 'category' => 'Combine Parts', 'image' => 'images/products/ResigedProducts/Combine&reaper bush.jpg'],
    ['name' => 'Straw Reaper Thresher', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper thresher.jpg'],
    ['name' => 'Straw Reaper Basket', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper basket.jpg'],
    ['name' => 'Straw Reaper Basket Side Flat', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper basket side flat.jpg'],
    ['name' => 'Straw Reaper Auger Plate with Bush', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper augger plate with bush.jpg'],
    ['name' => 'Straw Reaper Thresher Flat', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper thresher flat.jpg'],
    ['name' => 'Straw Reaper Thresher Plate (Heavy)', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper thresher plate  heavy.jpg'],
    ['name' => 'Straw Reaper Thresher Plate', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper thresher plate.jpg'],
    ['name' => 'Straw Reaper Thresher Ring', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper thresher ring.jpg'],
    ['name' => 'Straw Reaper Reel Plate', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper reel plate.jpg'],
    ['name' => 'Straw Reaper Dandia (5 Fan)', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper dandia 5 Fan.jpg'],
    ['name' => 'Straw Reaper Dandia (4 Fan)', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper dandia 4 fan.jpg'],
    ['name' => 'Straw Reaper Exhaust Band', 'category' => 'Straw Reaper Parts', 'image' => 'images/products/ResigedProducts/Straw reaper exhaust band.jpg'],
    ['name' => 'Super Seeder Ball', 'category' => 'Super Seeder Parts', 'image' => 'images/products/ResigedProducts/Super seeder ball.jpg'],
    ['name' => 'Combine Auger Plate', 'category' => 'Combine Parts', 'image' => 'images/products/ResigedProducts/Combine augger plate.jpg'],
    ['name' => 'Super Seeder Press Pipe', 'category' => 'Super Seeder Parts', 'image' => 'images/products/ResigedProducts/Super seeder press pipe.jpg'],
    ['name' => 'Super Seeder Step Pipe', 'category' => 'Super Seeder Parts', 'image' => 'images/products/ResigedProducts/Super seeder step pipe.jpg'],
    ['name' => 'Combine Sieves Set', 'category' => 'Combine Parts', 'image' => 'images/products/ResigedProducts/Combine sieves set.jpg', 'hover_image' => 'images/products/ResigedProducts/Combine sieves set-1.jpg'],
    ['name' => 'Maize Thresher', 'category' => 'Thresher Parts', 'image' => 'images/products/ResigedProducts/Maize thresher.jpg', 'hover_image' => 'images/products/ResigedProducts/Maize thresher downward bottom.jpg'],
    ['name' => 'Maize Thresher Basket', 'category' => 'Thresher Parts', 'image' => 'images/products/ResigedProducts/Maize thresher basket.jpg'],
    ['name' => 'Thresher Plate', 'category' => 'Thresher Parts', 'image' => 'images/products/ResigedProducts/Thresher plate.jpg'],
    ['name' => 'Tractor Combine Railing Set', 'category' => 'Combine Parts', 'image' => 'images/products/ResigedProducts/Tractor Combine Railing Set.jpg']
];

$capabilities = [
    ['icon' => 'bi-bullseye', 'title' => 'Laser Cutting', 'text' => 'Clean, accurate profiles for repeatable downstream fabrication.'],
    ['icon' => 'bi-gear-wide-connected', 'title' => 'CNC Turning', 'text' => 'Consistent turned parts built to match practical production needs.'],
    ['icon' => 'bi-bezier2', 'title' => 'Press Brake', 'text' => 'Controlled bends that support strong assemblies and clean fit-up.'],
    ['icon' => 'bi-diagram-3', 'title' => 'Robotic Welding', 'text' => 'Repeatable weld quality for reliable fabricated structures.']
];

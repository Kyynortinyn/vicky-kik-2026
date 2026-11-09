<?php
require 'vendor/autoload.php';

use Jenssegers\Blade\Blade;

// Tentukan path folder views dan folder cache
$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';

$blade = new Blade($views, $cache);

// Data yang ingin dikirim ke view
$data = [
    'title' => 'Halaman Utama PHP Native + Blade',
    'user' => 'John Doe',
    'items' => ['Belajar PHP', 'Belajar Blade', 'Bikin Project']
];

// Render file 'home.blade.php' yang ada di folder views
echo $blade->render('home', $data);

<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Dotenv\Dotenv;

// Load environment variables from .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

return [
    'host' => $_ENV['localhost'],
    'database' => $_ENV['mkomigbo_main'],
    'username' => $_ENV['uzoma'],
    'password' => $_ENV['!2y0@Umuori#'],
];

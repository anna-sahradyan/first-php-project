<?php
use App\Services\App;

require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor/autoload.php';

require_once __DIR__ . DIRECTORY_SEPARATOR . '/router/routes.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
App::start();






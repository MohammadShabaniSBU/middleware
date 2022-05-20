<?php

use App\controllers\AuthController;
use App\controllers\TodoController;
use App\core\Application;
require_once __DIR__ . "/../vendor/autoload.php";

// dotenv

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [

    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD']
    ]
];


$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', [TodoController::class, 'index']);

$app->router->get('/task/create', [TodoController::class, 'create']);
$app->router->post('/task/create', [TodoController::class, 'save']);

$app->router->post('/', [TodoController::class, 'delete']);
$app->router->get('/task/edit', [TodoController::class, 'edit']);
$app->router->post('/task/update', [TodoController::class, 'update']);

$app->router->get('/login', [AuthController::class, 'loginPage']);
$app->router->post('/login', [AuthController::class, 'login']);

$app->router->get('/register', [AuthController::class, 'registerShow']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->router->get('/armin', [AuthController::class, 'showDashboard']);


$app->run();




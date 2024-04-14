<?php

use \App\Services\Router;
use \App\Controllers\MainController;

$router = new Router();

$router->get('/', [MainController::class, 'main']);
$router->post('/add', [MainController::class, 'add']);
$router->post('/delete', [MainController::class, 'delete']);

$router->resolve();
<?php

use App\Services\Router;
use \App\Controllers\MainController;

$router = new Router();

$router->get('/', [MainController::class, 'main']);

$router->resolve();
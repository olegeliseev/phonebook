<?php

try {
    spl_autoload_register(function (string $className) {
        require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
    });

    require_once __DIR__ . '/../src/routes.php';
    
} catch (\App\Exceptions\NotFoundException $e) {
    $view = new \App\View\View(__DIR__ . '/../src/templates/errors');
    $view->renderHtml('404.php', ['error' => $e->getMessage()], 404);
}
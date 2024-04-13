<?php

try {
    //Для автозагрузки классов без композера
    
    // spl_autoload_register(function (string $className) {
    //     require_once __DIR__ . '/../src/' . str_replace('\\', '/', $className) . '.php';
    // });

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../src/routes.php';

} catch (\MyProject\Exceptions\DbException $e) {
    $view = new \MyProject\View\View(__DIR__ . '/../templates/errors');
    $view->renderHtml('500.php', ['error' => $e->getMessage()], 500);
} catch (\MyProject\Exceptions\NotFoundException $e) {
    $view = new \MyProject\View\View(__DIR__ . '/../templates/errors');
    $view->renderHtml('404.php', ['error' => $e->getMessage()], 404);
} catch (\MyProject\Exceptions\UnauthorizedException $e) {
    $view = new \MyProject\View\View(__DIR__ . '/../templates/errors');
    $view->renderHtml('401.php', ['error' => $e->getMessage()], 401);
}

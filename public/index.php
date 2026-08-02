<?php

require_once __DIR__ . "/../core/Database.php";
require_once __DIR__ . "/../core/Router.php";

$pdo = Database::conectar();

$router = new Router();

require_once __DIR__ . "/../routes/web.php";

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

// Caminho da pasta public onde o projeto está instalado
$base = rtrim(dirname($_SERVER['SCRIPT_NAME']), '/');

if ($base !== '' && str_starts_with($uri, $base)) {
    $uri = substr($uri, strlen($base));
}

if ($uri === '' || $uri === '/') {
    $uri = '/login';
}

$metodo = $_SERVER['REQUEST_METHOD'];

$router->dispatch(
    $metodo,
    $uri,
    $pdo
);

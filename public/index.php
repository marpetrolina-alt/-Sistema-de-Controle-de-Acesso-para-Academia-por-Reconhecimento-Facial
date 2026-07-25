<?php

require_once "../core/Database.php";
require_once "../core/Router.php";

$pdo = Database::conectar();

$router = new Router();

require_once "../routes/web.php";

$uri = parse_url(
    $_SERVER['REQUEST_URI'],
    PHP_URL_PATH
);

$metodo = $_SERVER['REQUEST_METHOD'];

$router->dispatch(
    $metodo,
    $uri,
    $pdo
);

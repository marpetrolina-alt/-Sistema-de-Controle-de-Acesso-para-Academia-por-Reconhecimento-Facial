<?php

class Router
{
    private $routes = [];

    public function get($rota, $acao)
    {
        $this->routes['GET'][$rota] = $acao;
    }

    public function post($rota, $acao)
    {
        $this->routes['POST'][$rota] = $acao;
    }

    public function dispatch($metodo, $uri)
    {
        if (!isset($this->routes[$metodo][$uri])) {
            http_response_code(404);
            die("Página não encontrada.");
        }

        $acao = $this->routes[$metodo][$uri];

        [$controller, $metodoController] = explode('@', $acao);

        require_once "../app/Controller/$controller.php";

        $objeto = new $controller();

        $objeto->$metodoController();
    }
}

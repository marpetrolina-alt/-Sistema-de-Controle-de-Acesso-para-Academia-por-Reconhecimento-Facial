<?php

class DashboardController
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function index()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['usuario_id'])) {
            header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/login");
            exit;
        }

        require __DIR__ . "/../View/dashboard/index.php";
    }
}
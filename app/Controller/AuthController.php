<?php

require_once __DIR__ . "/../Model/Usuario.php";

class AuthController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Usuario($pdo);
    }

    public function login()
    {
        require __DIR__ . "/../View/auth/login.php";
    }

    public function autenticar()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $email = trim($_POST['email']);
        $senha = $_POST['senha'];

        $usuario = $this->model->buscarPorEmail($email);

        if ($usuario && password_verify($senha, $usuario['senha'])) {

            session_regenerate_id(true);

            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nome'] = $usuario['nome'];

           
            header("Location: /teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/dashboard");
            exit;
        }

        echo "E-mail ou senha inválidos.";
    }

    public function logout()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $_SESSION = [];

        session_destroy();

        header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/login");
        exit;
    }
}
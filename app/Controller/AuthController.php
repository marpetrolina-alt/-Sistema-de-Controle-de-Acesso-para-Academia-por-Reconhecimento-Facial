
<?php

require_once "../Model/Usuario.php";

class AuthController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Usuario($pdo);
    }

    // Exibir tela de login
    public function login()
    {
        require "../View/auth/login.php";
    }

    // Realizar autenticação
    public function autenticar()
{
    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $usuario = $this->model->buscarPorEmail($email);

    if ($usuario && password_verify($senha, $usuario['senha'])) {

        session_regenerate_id(true);

        $_SESSION['usuario_id'] = $usuario['id'];

        $_SESSION['usuario_nome'] = $usuario['nome'];

        // Verifica se o usuário marcou "Lembrar meu e-mail"
        if (isset($_POST['lembrar'])) {

            setcookie(
                'lembrar_email',
                $email,
                time() + (86400 * 30),
                '/'
            );

        } else {

            // Remove o cookie caso o usuário não queira lembrar
            setcookie(
                'lembrar_email',
                '',
                time() - 3600,
                '/'
            );
        }

        header("Location: /alunos");

        exit;
    }

    echo "E-mail ou senha inválidos.";
}

    // Encerrar sessão
    public function logout()
    {
        session_start();

        $_SESSION = [];

        session_destroy();

        header("Location: /login");

        exit;
    }
}

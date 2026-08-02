<?php

require_once "../Model/Aluno.php";

class AlunoController
{
    private $model;

    // Verifica se o usuário está logado

    private function verificarLogin()
{
    if (session_status() === PHP_SESSION_NONE) {

        session_set_cookie_params([
            'httponly' => true,
            'secure' => false,
            'samesite' => 'Lax'
        ]);

        session_start();
    }

    if (!isset($_SESSION['usuario_id'])) {

        header("Location: /login");

        exit;
    }
}

        if (!isset($_SESSION['usuario_id'])) {

            header("Location: /login");

            exit;
        }
    }

    public function __construct($pdo)
    {
        $this->model = new Aluno($pdo);
    }

    // CREATE - Exibir formulário de cadastro
    public function create()
    {
        $this->verificarLogin();

        require "../View/alunos/create.php";
    }

    // CREATE - Salvar novo aluno
    public function store()
    {
        $this->verificarLogin();

        $this->model->cadastrar($_POST);

        header("Location: /alunos");

        exit;
    }

    // READ - Listar alunos
    public function index()
    {
        $this->verificarLogin();

        $alunos = $this->model->listar();

        require "../View/alunos/index.php";
    }

    // UPDATE - Exibir formulário de edição
    public function edit()
    {
        $this->verificarLogin();

        $id = $_GET['id'];

        $aluno = $this->model->buscar($id);

        require "../View/alunos/edit.php";
    }

    // UPDATE - Atualizar aluno
    public function update()
    {
        $this->verificarLogin();

        $id = $_POST['id'];

        $this->model->atualizar($id, $_POST);

        header("Location: /alunos");

        exit;
    }

    // DELETE - Excluir aluno
    public function delete()
    {
        $this->verificarLogin();

        $id = $_GET['id'];

        $this->model->excluir($id);

        header("Location: /alunos");

        exit;
    }
}

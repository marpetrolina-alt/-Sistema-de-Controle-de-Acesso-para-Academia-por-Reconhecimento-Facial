<?php

require_once __DIR__ . "/../Models/Aluno.php";

class AlunoController
{
    private $model;

    private function verificarLogin()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['usuario_id'])) {
            header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/login");
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

        require __DIR__ . "/../View/alunos/create.php";
    }

    // CREATE - Salvar novo aluno

    public function store()
{
    $this->verificarLogin();

    $_POST['cpf'] = trim($_POST['cpf']);

    $this->model->cadastrar($_POST);

    header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos");
    exit;
}
    // READ - Listar alunos
    public function index()
    {
        $this->verificarLogin();

        $alunos = $this->model->listar();

        require __DIR__ . "/../View/alunos/index.php";
    }

    // UPDATE - Exibir formulário de edição
    public function edit()
    {
        $this->verificarLogin();

        $id = $_GET['id'];

        $aluno = $this->model->buscar($id);

        require __DIR__ . "/../View/alunos/edit.php";
    }

    // UPDATE - Atualizar aluno

   public function update()
{
    $this->verificarLogin();

    $id = $_POST['id'];

    $_POST['cpf'] = trim($_POST['cpf']);

    $this->model->atualizar($id, $_POST);

   

        header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos");
        exit;
    }

    // DELETE - Excluir aluno
    public function delete()
    {
        $this->verificarLogin();

        $id = $_GET['id'];

        $this->model->excluir($id);

        header("Location: /-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos");
        exit;
    }
}

<?php

require_once "../Model/Aluno.php";

class AlunoController
{
    private $model;

    public function __construct($pdo)
    {
        $this->model = new Aluno($pdo);
    }

    // CREATE - Exibir formulário de cadastro
    public function create()
    {
        require "../View/alunos/create.php";
    }

    // CREATE - Salvar novo aluno
    public function store()
    {
        $this->model->cadastrar($_POST);

        header("Location: /alunos");
        exit;
    }

    // READ - Listar alunos
    public function index()
    {
        $alunos = $this->model->listar();

        require "../View/alunos/index.php";
    }

    // UPDATE - Exibir formulário de edição
    public function edit()
    {
        $id = $_GET['id'];

        $aluno = $this->model->buscar($id);

        require "../View/alunos/edit.php";
    }

    // UPDATE - Atualizar aluno
    public function update()
    {
        $id = $_POST['id'];

        $this->model->atualizar($id, $_POST);

        header("Location: /alunos");
        exit;
    }

    // DELETE - Excluir aluno
    public function delete()
    {
        $id = $_GET['id'];

        $this->model->excluir($id);

        header("Location: /alunos");
        exit;
    }
}

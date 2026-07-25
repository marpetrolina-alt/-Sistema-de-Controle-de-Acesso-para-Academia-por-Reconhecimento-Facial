<?php

class Aluno
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // CREATE - Cadastrar aluno
    public function cadastrar($dados)
    {
        $sql = $this->pdo->prepare("
            INSERT INTO alunos
            (nome, cpf, telefone, email, data_nascimento)
            VALUES (?, ?, ?, ?, ?)
        ");

        return $sql->execute([
            $dados['nome'],
            $dados['cpf'],
            $dados['telefone'],
            $dados['email'],
            $dados['data_nascimento']
        ]);
    }

    // READ - Listar alunos
    public function listar()
    {
        $sql = $this->pdo->query(
            "SELECT * FROM alunos ORDER BY nome"
        );

        return $sql->fetchAll(PDO::FETCH_ASSOC);
    }

    // READ - Buscar aluno por ID
    public function buscar($id)
    {
        $sql = $this->pdo->prepare(
            "SELECT * FROM alunos WHERE id = ?"
        );

        $sql->execute([$id]);

        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    // UPDATE - Atualizar aluno
    public function atualizar($id, $dados)
    {
        $sql = $this->pdo->prepare("
            UPDATE alunos
            SET nome = ?,
                cpf = ?,
                telefone = ?,
                email = ?,
                data_nascimento = ?
            WHERE id = ?
        ");

        return $sql->execute([
            $dados['nome'],
            $dados['cpf'],
            $dados['telefone'],
            $dados['email'],
            $dados['data_nascimento'],
            $id
        ]);
    }

    // DELETE - Excluir aluno
    public function excluir($id)
    {
        $sql = $this->pdo->prepare(
            "DELETE FROM alunos WHERE id = ?"
        );

        return $sql->execute([$id]);
    }
}

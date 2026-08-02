<?php

class Usuario
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Buscar usuário pelo e-mail
    public function buscarPorEmail($email)
    {
        $sql = $this->pdo->prepare(
            "SELECT * FROM usuarios WHERE email = ?"
        );

        $sql->execute([$email]);

        return $sql->fetch(PDO::FETCH_ASSOC);
    }

    // Cadastrar novo usuário
    public function cadastrar($dados)
    {
        $senhaHash = password_hash(
            $dados['senha'],
            PASSWORD_DEFAULT
        );

        $sql = $this->pdo->prepare("
            INSERT INTO usuarios
            (nome, email, senha)
            VALUES (?, ?, ?)
        ");

        return $sql->execute([
            $dados['nome'],
            $dados['email'],
            $senhaHash
        ]);
    }
}

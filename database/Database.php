<?php

class Database
{
    private $host = "localhost";
    private $db = "academia";
    private $user = "root";
    private $password = "";

    public function conectar()
    {
        try {

            $pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->db};charset=utf8mb4",
                $this->user,
                $this->password
            );

            $pdo->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );

            return $pdo;

        } catch (PDOException $e) {

            die(
                "Erro na conexão com o banco de dados: "
                . $e->getMessage()
            );
        }
    }
}

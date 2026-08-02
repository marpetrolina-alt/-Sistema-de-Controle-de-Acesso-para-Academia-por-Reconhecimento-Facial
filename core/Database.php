<?php

class Database
{
    public static function conectar()
    {
        try {

            $pdo = new PDO(
                "mysql:host=localhost;dbname=academia;charset=utf8mb4",
                "root",
                ""
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

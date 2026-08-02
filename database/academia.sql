CREATE DATABASE academia;

USE academia;

CREATE TABLE alunos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    cpf VARCHAR(14) NOT NULL UNIQUE,

    telefone VARCHAR(20),

    email VARCHAR(100),

    data_nascimento DATE,

    status ENUM('ATIVO', 'INATIVO') DEFAULT 'ATIVO'

);  

CREATE DATABASE academia;

USE academia;

CREATE TABLE alunos (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    cpf VARCHAR(14) NOT NULL UNIQUE,

    telefone VARCHAR(20),

    email VARCHAR(100),

    data_nascimento DATE,

    status ENUM('ATIVO', 'INATIVO') DEFAULT 'ATIVO'

);

CREATE TABLE usuarios (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nome VARCHAR(100) NOT NULL,

    email VARCHAR(100) NOT NULL UNIQUE,

    senha VARCHAR(255) NOT NULL

);

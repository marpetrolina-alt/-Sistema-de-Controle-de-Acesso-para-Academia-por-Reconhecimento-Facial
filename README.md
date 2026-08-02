# Sistema de Controle de Acesso para Academia por Reconhecimento Facial 
Atualizacoes do dia 02/08/2026  no final.

## Descrição do Projeto

Este projeto consiste no desenvolvimento de um sistema de controle de acesso para uma academia, com o objetivo de realizar o cadastro de alunos e controlar a entrada dos usuários por meio de reconhecimento facial.

O sistema será desenvolvido utilizando a arquitetura MVC (Model-View-Controller), buscando organizar o código e separar as responsabilidades entre as diferentes partes da aplicação.

## Objetivos

O principal objetivo do projeto é desenvolver um sistema capaz de realizar o cadastro de alunos e permitir o controle de entrada na academia por meio do reconhecimento facial.

Entre os objetivos específicos estão:

* Realizar o cadastro de alunos;
* Armazenar e consultar os dados dos alunos;
* Permitir a atualização dos dados cadastrais;
* Permitir a exclusão de cadastros;
* Realizar o controle de acesso à academia;
* Utilizar reconhecimento facial para realizar a liberação da entrada;
* Organizar o sistema utilizando a arquitetura MVC.

## Público-Alvo

O sistema é destinado a academias que desejam realizar o controle de acesso de seus alunos de forma mais organizada e automatizada.

O público-alvo do sistema são pessoas maiores de 18 anos que frequentam a academia e possuem cadastro ativo no sistema.

## Funcionalidades Previstas

As principais funcionalidades previstas para o sistema são:

### Cadastro de Alunos

Permitir o cadastro de informações dos alunos, como:

* Nome;
* CPF;
* Telefone;
* E-mail;
* Data de nascimento;
* Status do cadastro.

### Controle de Acesso por Reconhecimento Facial

O sistema deverá utilizar o reconhecimento facial para identificar o aluno no momento da entrada na academia.

Após a identificação, o sistema deverá verificar se o aluno possui um cadastro ativo e, caso esteja autorizado, liberar sua entrada.

### Gerenciamento de Alunos

O sistema contará com operações de CRUD para o gerenciamento dos alunos:

* **Create (Criar):** cadastrar novos alunos;
* **Read (Ler):** consultar e listar alunos cadastrados;
* **Update (Atualizar):** alterar informações dos alunos;
* **Delete (Excluir):** remover alunos do sistema.

## Tecnologias e Arquitetura

O projeto está sendo desenvolvido utilizando:

* PHP;
* MySQL;
* HTML;
* Arquitetura MVC;
* Git e GitHub.

A arquitetura MVC é utilizada para organizar o projeto em diferentes responsabilidades:

* **Model:** responsável pelo acesso e manipulação dos dados;
* **View:** responsável pela apresentação das informações ao usuário;
* **Controller:** responsável por intermediar as ações entre o usuário, as Views e os Models.

## Estrutura do Projeto

A estrutura inicial do projeto está organizada da seguinte forma:

```text
app/
├── Controller/
├── Model/
└── View/

core/
├── Database.php
└── Router.php

database/
└── academia.sql

routes/
└── web.php

public/
└── index.php
```

## Status do Projeto

🚧 Projeto em desenvolvimento.

O sistema está sendo desenvolvido como parte de um trabalho acadêmico e sua implementação ocorrerá de forma gradual.


02/08/2026
# Resumo das Atividades Desenvolvidas

Durante o desenvolvimento do projeto do Sistema de Controle de Acesso para Academia por Reconhecimento Facial, foram realizadas melhorias na estrutura, organização e funcionamento do sistema, utilizando PHP e arquitetura MVC.

Foi implementada e organizada a estrutura do projeto, separando as responsabilidades entre Controllers, Models, Views, rotas e conexão com o banco de dados. Também foram configurados os arquivos responsáveis pelo gerenciamento das rotas e pela conexão com o banco de dados MySQL.

Foi desenvolvido o sistema de autenticação de usuários, permitindo o acesso por meio de e-mail e senha. As senhas são armazenadas de forma protegida utilizando criptografia por hash, e o sistema utiliza sessões para controlar o acesso dos usuários autenticados.

Também foi implementada a funcionalidade de lembrar o e-mail do usuário por meio de cookies, além das funções de login e logout. Após a autenticação, o usuário é direcionado para a área de gerenciamento de alunos.

Foi realizada a proteção da área de alunos, impedindo que usuários não autenticados tenham acesso às páginas restritas. Quando um usuário tenta acessar a área protegida sem estar logado, o sistema o redireciona automaticamente para a tela de login.

Foram realizadas correções nos caminhos dos arquivos e na estrutura dos Controllers, Models e Views, garantindo que os arquivos sejam localizados corretamente pelo sistema. Também foi ajustado o arquivo principal de entrada (`index.php`) para identificar automaticamente o caminho de instalação do projeto, permitindo que o sistema seja executado mesmo quando o projeto é colocado em diferentes pastas.

O sistema foi testado localmente utilizando o XAMPP e o banco de dados MySQL. Foram realizados testes de login, criação de sessão, acesso à área de alunos, logout e tentativa de acesso à área protegida sem autenticação.

Após as alterações, os arquivos atualizados foram enviados para o repositório do projeto no GitHub. Em seguida, foi realizado um novo download do projeto diretamente do GitHub e os testes foram repetidos em uma nova cópia do sistema. Dessa forma, foi confirmado que as alterações estão sincronizadas com o repositório e que o projeto continua funcionando corretamente após ser baixado novamente.

Ao final dos testes, foi confirmado o funcionamento do fluxo de autenticação, desde o login até o logout, incluindo a proteção das páginas restritas e o redirecionamento de usuários não autenticados para a tela de login.


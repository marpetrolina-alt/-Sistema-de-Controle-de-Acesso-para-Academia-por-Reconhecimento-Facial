<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$nomeUsuario = $_SESSION['usuario_nome'] ?? 'Usuário';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Editar Aluno - Academia</title>

    <link rel="stylesheet"
          href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/css/alunos.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="alunos-layout">

    <!-- SIDEBAR -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                🏋
            </div>

            <h2>Academia</h2>

            <span>Sistema de Controle</span>

        </div>

        <nav class="menu">

            <a href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/dashboard">

                <i class="bi bi-house-door-fill"></i>

                Dashboard

            </a>

            <a href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos"
               class="active">

                <i class="bi bi-people-fill"></i>

                Alunos

            </a>

            <a href="#">

                <i class="bi bi-person-badge-fill"></i>

                Usuários

            </a>

            <a href="#">

                <i class="bi bi-camera-fill"></i>

                Reconhecimento

            </a>

            <a href="#">

                <i class="bi bi-bar-chart-fill"></i>

                Relatórios

            </a>

        </nav>

        <div class="logout">

            <a href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/logout">

                <i class="bi bi-box-arrow-right"></i>

                Sair

            </a>

        </div>

    </aside>


    <!-- CONTEÚDO -->

    <main class="content">

        <header class="topbar">

            <div>

                <h1>Editar Aluno</h1>

                <p>Atualize as informações do aluno.</p>

            </div>

            <div class="user">

                <i class="bi bi-person-circle"></i>

                <span>
                    <?= htmlspecialchars($nomeUsuario) ?>
                </span>

            </div>

        </header>


        <!-- FORMULÁRIO -->

        <section class="students-panel">

            <div class="panel-header">

                <div>

                    <h2>Dados do Aluno</h2>

                    <p>
                        Altere as informações necessárias e salve as mudanças.
                    </p>

                </div>

            </div>


            <form
                method="POST"
                action="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos/update"
                class="student-form"
            >

                <input
                    type="hidden"
                    name="id"
                    value="<?= htmlspecialchars($aluno['id']) ?>"
                >


                <div class="form-grid">

                    <div class="form-group">

                        <label for="nome">
                            Nome completo
                        </label>

                        <input
                            type="text"
                            id="nome"
                            name="nome"
                            value="<?= htmlspecialchars($aluno['nome']) ?>"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="cpf">
                            CPF
                        </label>

                        <input
                            type="text"
                            id="cpf"
                            name="cpf"
                            value="<?= htmlspecialchars($aluno['cpf']) ?>"
                            required
                        >

                    </div>


                    <div class="form-group">

                        <label for="telefone">
                            Telefone
                        </label>

                        <input
                            type="text"
                            id="telefone"
                            name="telefone"
                            value="<?= htmlspecialchars($aluno['telefone'] ?? '') ?>"
                        >

                    </div>


                    <div class="form-group">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            value="<?= htmlspecialchars($aluno['email'] ?? '') ?>"
                        >

                    </div>


                    <div class="form-group">

                        <label for="data_nascimento">
                            Data de nascimento
                        </label>

                        <input
                            type="date"
                            id="data_nascimento"
                            name="data_nascimento"
                            value="<?= htmlspecialchars($aluno['data_nascimento'] ?? '') ?>"
                        >

                    </div>

                </div>


                <div class="form-actions">

                    <a
                        href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos"
                        class="btn-secondary"
                    >

                        <i class="bi bi-arrow-left"></i>

                        Voltar

                    </a>


                    <button
                        type="submit"
                        class="btn-primary"
                    >

                        <i class="bi bi-check-circle-fill"></i>

                        Atualizar Aluno

                    </button>

                </div>

            </form>

        </section>

    </main>

</div>

</body>

</html> 
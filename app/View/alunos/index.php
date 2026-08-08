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

    <title>Alunos - Academia</title>

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

            <a href="#" class="active">

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

                <h1>Alunos</h1>

                <p>Gerencie os alunos cadastrados na Academia.</p>

            </div>

            <div class="user">

                <i class="bi bi-person-circle"></i>

                <span>
                    <?= htmlspecialchars($nomeUsuario) ?>
                </span>

            </div>

        </header>


        <!-- ÁREA DA LISTA -->

        <section class="students-panel">

            <div class="panel-header">

                <div>

                    <h2>Lista de Alunos</h2>

                    <p>
                        Alunos cadastrados no sistema.
                    </p>

                </div>

                <a
                    href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos/create"
                    class="btn-primary"
                >

                    <i class="bi bi-person-plus-fill"></i>

                    Cadastrar Novo Aluno

                </a>

            </div>


            <!-- TABELA -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>ID</th>

                            <th>Nome</th>

                            <th>CPF</th>

                            <th>Telefone</th>

                            <th>E-mail</th>

                            <th>Ações</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php if (empty($alunos)): ?>

                            <tr>

                                <td colspan="6" class="empty">

                                    <i class="bi bi-people"></i>

                                    <strong>Nenhum aluno cadastrado</strong>

                                    <span>
                                        Cadastre o primeiro aluno para começar.
                                    </span>

                                </td>

                            </tr>

                        <?php else: ?>

                            <?php foreach ($alunos as $aluno): ?>

                                <tr>

                                    <td>
                                        <?= htmlspecialchars($aluno['id']) ?>
                                    </td>

                                    <td class="student-name">

                                        <i class="bi bi-person-circle"></i>

                                        <?= htmlspecialchars($aluno['nome']) ?>

                                    </td>

                                    <td>
                                        <?= htmlspecialchars($aluno['cpf']) ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($aluno['telefone'] ?? '') ?>
                                    </td>

                                    <td>
                                        <?= htmlspecialchars($aluno['email'] ?? '') ?>
                                    </td>

                                    <td class="actions">

                                        <a
                                            href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos/edit?id=<?= $aluno['id'] ?>"
                                            class="btn-edit"
                                            title="Editar aluno"
                                        >

                                            <i class="bi bi-pencil-square"></i>

                                        </a>

                                        <a
                                            href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos/delete?id=<?= $aluno['id'] ?>"
                                            class="btn-delete"
                                            title="Excluir aluno"
                                            onclick="return confirm('Tem certeza que deseja excluir este aluno?')"
                                        >

                                            <i class="bi bi-trash3-fill"></i>

                                        </a>

                                    </td>

                                </tr>

                            <?php endforeach; ?>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>

        </section>

    </main>

</div>

</body>

</html>
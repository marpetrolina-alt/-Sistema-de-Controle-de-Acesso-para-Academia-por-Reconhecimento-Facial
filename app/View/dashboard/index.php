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

    <title>Dashboard - Academia</title>

    <link rel="stylesheet"
          href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/css/dashboard.css">

    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

</head>

<body>

<div class="dashboard">

    <!-- MENU LATERAL -->

    <aside class="sidebar">

        <div class="logo">

            <div class="logo-icon">
                🏋
            </div>

            <h2>Academia</h2>

            <span>Sistema de Controle</span>

        </div>

        <nav class="menu">

            <a href="#" class="active">

                <i class="bi bi-house-door-fill"></i>

                Dashboard

            </a>

            <a href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/alunos">

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

                <h1>Dashboard</h1>

                <p>Bem-vindo ao Sistema de Controle de Acesso.</p>

            </div>

            <div class="user">

                <i class="bi bi-person-circle"></i>

                <span>

                    <?= htmlspecialchars($nomeUsuario) ?>

                </span>

            </div>

        </header>

        <!-- CARDS -->

        <section class="cards">

            <div class="card">

                <div class="card-icon blue">

                    <i class="bi bi-people-fill"></i>

                </div>

                <div class="card-info">

                    <h3>256</h3>

                    <p>Total de Alunos</p>

                </div>

            </div>

            <div class="card">

                <div class="card-icon green">

                    <i class="bi bi-person-check-fill"></i>

                </div>

                <div class="card-info">

                    <h3>198</h3>

                    <p>Alunos Ativos</p>

                </div>

            </div>

            <div class="card">

                <div class="card-icon red">

                    <i class="bi bi-person-x-fill"></i>

                </div>

                <div class="card-info">

                    <h3>58</h3>

                    <p>Alunos Inativos</p>

                </div>

            </div>

            <div class="card">

                <div class="card-icon orange">

                    <i class="bi bi-calendar-check-fill"></i>

                </div>

                <div class="card-info">

                    <h3><?= date('d/m/Y') ?></h3>

                    <p>Data Atual</p>

                </div>

            </div>

        </section>

        <!-- PAINEL -->

        <section class="panel">

            <h2>Bem-vindo!</h2>

            <p>

                Este painel será o centro do Sistema de Controle de Acesso
                da Academia.

            </p>

            <p>

                Nas próximas etapas vamos adicionar:

            </p>

            <ul>

                <li>Cadastro de alunos</li>

                <li>Usuários</li>

                <li>Reconhecimento facial</li>

                <li>Relatórios</li>

                <li>Gráficos e estatísticas</li>

            </ul>

        </section>

    </main>

</div>

</body>

</html>
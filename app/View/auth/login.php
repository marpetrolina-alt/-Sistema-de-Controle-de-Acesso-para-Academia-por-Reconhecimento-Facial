<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Academia</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

<div class="login-page">

<div class="login-card">

<div class="login-header">
<div class="login-icon">🏋️</div>
<h1>Academia</h1>
<p>Sistema de Controle de Acesso</p>
</div>

<p class="welcome">Bem-vindo!<br>Faça login para continuar.</p>

<form method="POST"
action="/teste-github/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/login/autenticar"
class="login-form">

<div class="form-group">
<label for="email">E-mail</label>
<div class="inputForm">
<i class="bi bi-envelope-fill"></i>
<input class="input" type="email" id="email" name="email"
placeholder="Digite seu e-mail"
value="<?php echo htmlspecialchars($_COOKIE['lembrar_email'] ?? ''); ?>"
required>
</div>
</div>

<div class="form-group">
<label for="senha">Senha</label>
<div class="inputForm">
<i class="bi bi-lock-fill"></i>
<input class="input" type="password" id="senha" name="senha"
placeholder="Digite sua senha" required>
</div>
</div>

<div class="remember">
<label>
<input type="checkbox" name="lembrar" value="1">
Lembrar meu e-mail
</label>
</div>

<button class="btn-login" type="submit">Entrar</button>

</form>

</div>

</div>

</body>
</html>
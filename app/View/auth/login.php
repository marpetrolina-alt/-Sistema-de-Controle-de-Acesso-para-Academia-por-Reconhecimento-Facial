<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Login - Academia</title>

</head>

<body>

    <h1>Login</h1>

     <form method="POST" action="/-Sistema-de-Controle-de-Acesso-para-Academia-por-Reconhecimento-Facial-main/public/login/autenticar">

        <div>

            <label for="email">
                E-mail:
            </label>

         <input
    type="email"
    id="email"
    name="email"
    value="<?php echo htmlspecialchars($_COOKIE['lembrar_email'] ?? ''); ?>"
    required
>

        </div>

        <br>

        <div>

            <label for="senha">
                Senha:
            </label>

            <input
                type="password"
                id="senha"
                name="senha"
                required
            >

        </div>

        <br>

        <div>

            <label>
                <input
                    type="checkbox"
                    name="lembrar"
                    value="1"
                >

                Lembrar meu e-mail
            </label>

        </div>

        <br>

        <button type="submit">
            Entrar
        </button>

    </form>

</body>

</html>

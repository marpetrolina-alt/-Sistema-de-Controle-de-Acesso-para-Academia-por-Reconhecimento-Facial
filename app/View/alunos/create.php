<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>Cadastrar Aluno</title>
</head>

<body>

    <h1>Cadastrar Novo Aluno</h1>

    <form method="POST" action="/alunos/store">

        <div>
            <label>Nome:</label>
            <input
                type="text"
                name="nome"
                required
            >
        </div>

        <br>

        <div>
            <label>CPF:</label>
            <input
                type="text"
                name="cpf"
                required
            >
        </div>

        <br>

        <div>
            <label>Telefone:</label>
            <input
                type="text"
                name="telefone"
            >
        </div>

        <br>

        <div>
            <label>E-mail:</label>
            <input
                type="email"
                name="email"
            >
        </div>

        <br>

        <div>
            <label>Data de nascimento:</label>
            <input
                type="date"
                name="data_nascimento"
            >
        </div>

        <br>

        <button type="submit">
            Cadastrar Aluno
        </button>

    </form>

    <br>

    <a href="/alunos">
        Voltar para lista de alunos
    </a>

</body>

</html>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>Editar Aluno</title>
</head>

<body>

    <h1>Editar Aluno</h1>

    <form method="POST" action="/alunos/update">

        <input
            type="hidden"
            name="id"
            value="<?= $aluno['id'] ?>"
        >

        <div>

            <label>Nome:</label>

            <input
                type="text"
                name="nome"
                value="<?= $aluno['nome'] ?>"
                required
            >

        </div>

        <br>

        <div>

            <label>CPF:</label>

            <input
                type="text"
                name="cpf"
                value="<?= $aluno['cpf'] ?>"
                required
            >

        </div>

        <br>

        <div>

            <label>Telefone:</label>

            <input
                type="text"
                name="telefone"
                value="<?= $aluno['telefone'] ?>"
            >

        </div>

        <br>

        <div>

            <label>E-mail:</label>

            <input
                type="email"
                name="email"
                value="<?= $aluno['email'] ?>"
            >

        </div>

        <br>

        <div>

            <label>Data de nascimento:</label>

            <input
                type="date"
                name="data_nascimento"
                value="<?= $aluno['data_nascimento'] ?>"
            >

        </div>

        <br>

        <button type="submit">
            Atualizar Aluno
        </button>

    </form>

    <br>

    <a href="/alunos">
        Voltar para lista
    </a>

</body>

</html>

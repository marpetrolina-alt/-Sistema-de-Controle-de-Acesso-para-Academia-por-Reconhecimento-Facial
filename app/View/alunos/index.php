<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">

    <title>Lista de Alunos</title>
</head>

<body>

    <h1>Alunos da Academia</h1>

    <a href="/alunos/create">
        Cadastrar Novo Aluno
    </a>

    <br><br>

    <table border="1">

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

            <?php foreach ($alunos as $aluno): ?>

                <tr>

                    <td>
                        <?= $aluno['id'] ?>
                    </td>

                    <td>
                        <?= $aluno['nome'] ?>
                    </td>

                    <td>
                        <?= $aluno['cpf'] ?>
                    </td>

                    <td>
                        <?= $aluno['telefone'] ?>
                    </td>

                    <td>
                        <?= $aluno['email'] ?>
                    </td>

                    <td>

                        <a href="/alunos/edit?id=<?= $aluno['id'] ?>">
                            Editar
                        </a>

                        |

                        <a href="/alunos/delete?id=<?= $aluno['id'] ?>">
                            Excluir
                        </a>

                    </td>

                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

</body>

</html>

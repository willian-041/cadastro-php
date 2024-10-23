<?php include('db.php'); ?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Usuários Cadastrados</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM usuarios";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['nome']}</td>
                            <td>{$row['email']}</td>
                            <td><a href='delete_user.php?id={$row['id']}'>Deletar</a></td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='4'>Nenhum usuário cadastrado</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="index.php">Voltar</a>
</body>
</html>

<?php include("db.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro dos Usuários</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Cadastro de Usuários</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $nome = $_POST["nome"];
        $email = $_POST["email"];

        if (!empty($nome) && !empty($email)) {
            $sql = "INSET INTO usuario (nome, email)";
            if ($conn->query($sql) === TRUE) {
                echo "<p>Usuário cadastrado com sucesso!</p>";
            } else {
                echo "Erro:" . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "<p>Por favor, preencha todos os campos!</p>";
        }
    }
    ?>

    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Cadastrar</button>
    </form>

    <a href="list_user.php">Ver usuário cadastrado</a>

    <script> src="script.js"</script>
</body>
</html>
<?php
include('db.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM usuarios WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "<p>Usuário deletado com sucesso!</p>";
    } else {
        echo "Erro ao deletar: " . $conn->error;
    }
}

header("Location: list_users.php");
exit();
?>

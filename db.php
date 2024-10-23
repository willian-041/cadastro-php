<?php
$host = "localhost";
$user = "root"; //usuário padrão do xampp
$pass = ""; //senha vazia no xampp
$dbname = "cadastro_usuarios"; //cadastro do usario no banco

$conn = new mysqli($host,$user,$pass,$dbname); //conexão com o banco de dados

if ($conn->connect_error) {
    die("Sem conexão:". $conn -> connect_error);
}


?>
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Insira a senha do MySQL aqui, deixei em branco conforme seu exemplo
$dbname = "MeuBancoDeDados";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
  die("Falha na conexão: " . $conn->connect_error);
}
?>

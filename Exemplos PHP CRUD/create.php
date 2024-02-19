<?php
include 'connection.php';

$name = $conn->real_escape_string($_POST['name']);
$tel = $conn->real_escape_string($_POST['tel']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "INSERT INTO Pessoas (name, tel, email) VALUES ('$name', '$tel', '$email')";

if ($conn->query($sql) === TRUE) {
  echo "Novo registro criado com sucesso.";
} else {
  echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

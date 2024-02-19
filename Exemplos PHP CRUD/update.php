<?php
include 'connection.php';

$id = $conn->real_escape_string($_POST['id']);
$name = $conn->real_escape_string($_POST['name']);
$tel = $conn->real_escape_string($_POST['tel']);
$email = $conn->real_escape_string($_POST['email']);

$sql = "UPDATE Pessoas SET name='$name', tel='$tel', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro atualizado com sucesso.";
} else {
    echo "Erro ao atualizar o registro: " . $conn->error;
}

$conn->close();

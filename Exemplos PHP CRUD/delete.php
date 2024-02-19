<?php
include 'connection.php';

$id = $conn->real_escape_string($_POST['id']);

$sql = "DELETE FROM Pessoas WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro deletado com sucesso.";
} else {
    echo "Erro ao deletar o registro: " . $conn->error;
}

$conn->close();

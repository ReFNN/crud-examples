<?php
include 'connection.php';

$sql = "SELECT id, name, tel, email FROM Pessoas";
$result = $conn->query($sql);

$pessoas = array(); // Cria um array vazio para armazenar os objetos

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $pessoa = array(
        "id" => $row["id"],
        "name" => $row["name"],
        "tel" => $row["tel"],
        "email" => $row["email"]
    );
    array_push($pessoas, $pessoa); // Adiciona o objeto pessoa ao array pessoas
  }
  echo json_encode($pessoas); // Converte o array pessoas em JSON e o imprime
} else {
  echo json_encode([]); // Retorna um array vazio se não houver resultados
}
$conn->close();
?>

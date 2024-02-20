<?php

// Recebe os dados brutos da entrada
$dadosBrutos = file_get_contents("php://input");

// Decodifica os dados JSON para um array associativo
$dados = json_decode($dadosBrutos, true);

// Agora você pode acessar seus dados, por exemplo:
$nome = $dados['nome'];

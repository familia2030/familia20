<?php
// Conecta ao banco de dados MySQL
$conexao = mysqli_connect("localhost", "root", "", "meubanco");

// Verifica se houve erro na conexão
if (!$conexao) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Define o charset para UTF-8
if (!mysqli_set_charset($conexao, "utf8")) {
    die("Erro ao definir charset: " . mysqli_error($conexao));
}

// Se quiser exibir mensagem de sucesso, descomente a linha abaixo
// echo "Conexão bem sucedida!";
?>
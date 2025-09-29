<?php
// Criando o banco de dados se não existir
function criarBanco($conexao, $nomeBanco) {
  $banco = "CREATE DATABASE IF NOT EXISTS `$nomeBanco`";
  if ($conexao->query($banco) === TRUE) {
    echo "Banco de dados '$nomeBanco' criado com sucesso.<br>";
  } else {
    echo "Erro ao criar banco de dados: " . $conexao->error;
  }
}
?>
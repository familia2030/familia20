<?php
// Criando a tabela se não exisitir
function criaTb($conn, $nomeBanco, $nomeTabela) {
  $tabela_usuario = "CREATE TABLE IF NOT EXISTS $nomeTabela (
    id INT(10) AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR (50) NOT NULL,
    senha VARCHAR(50) NOT NULL,
    id_tipo_acesso INT(1) NOT NULL
    )";
  $conn->select_db($nomeBanco);
  if ($conn->query($tabela_usuario)) {
    echo "Tabela '$nomeTabela' já criada com sucesso.<br>";
  } else {
    echo "Erro ao criatb: " . $conexao->error;
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste de conexão</title>
</head>
<body>
  <h1>teste de conexão</h1>
  <?php
$conexao = mysqli_connect("localhost", "root", "");

if (!$conexao) {
  die("não foi possivel conectar ao banco de dados. Erro detectado: " . mysqli_connect_error());
}
echo "conexão bem sucedida ao mysql!<br>";

$banco = "CREATE DATABASE IF NOT EXISTS sis_academico";
if (mysqli_query($conexao, $banco)) {
  echo "banco de dados 'sis_academico' criado com sucesso.<br>";
} else {
  echo "erro ao criar banco de dados: " . mysqli_error($conexao) . "<br>";
}

mysqli_select_db($conexao, "sis_academico");

$tabela_matricula = "CREATE TABLE IF NOT EXISTS matricula (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(50) NOT NULL,
  curso VARCHAR(50) NOT NULL
)";
if (mysqli_query($conexao, $tabela_matricula)) {
  echo "tabela de matricula criada com sucesso.<br>";
} else {
  echo "erro ao criar tabela de matricula: " . mysqli_error($conexao) . "<br>";
}

$inserir_dados = "INSERT INTO matricula (nome, curso) VALUES
  ('fco ant', 'programador'),
  ('tanuzia', 'web designer'),
  ('lucas', 'programor')";
if (mysqli_query($conexao, $inserir_dados)) {
  echo "dados inseridos com sucesso.<br>";
} else {
  echo "erro ao inserir dados: " . mysqli_error($conexao) . "<br>";
}

mysqli_close($conexao);


  ?>  
</body>
</html>
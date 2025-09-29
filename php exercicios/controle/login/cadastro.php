<?php
// conectando ao banco de dados
require("conexao.php"); 

// Criando o banco de dados se não existir
require("criarBanco.php");
criarBanco($conn, "teste-login");

// Selecionando o banco de dados
mysqli_select_db($conn, "teste-login");

// Criando a tabela se não existir
require("criaTb.php");
criatb($conn, "teste-login", "usuario");

// Incluindo os dados do formulario
if (isset($_POST["usuario"], $_POST["senha"], $_POST["id_tipo_acesso"])) {
    $usuario = trim($_POST["usuario"]);
    $senha = md5(trim($_POST["senha"]));
    $tipo_usuario = $_POST["id_tipo_acesso"];
} else {
    echo 'Dados do formulário incompletos!';
    exit;
}

// Inserção dos dados na tabela usando prepared statement
$stmt = $conn->prepare("INSERT INTO usuario (usuario, senha, id_tipo_acesso) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $usuario, $senha, $tipo_usuario);

if ($stmt->execute()) {
  //Redireciona para a página de sucesso
  echo 'Usuário cadastrado com sucesso!';
  print "<script>setTimeout(function(){ location.href='dashboard.php'; }, 9000);</script>";
} else {
  echo 'Erro ao cadastrar usuário!';
  print "<script>setTimeout(function(){ location.href='cadastroForm.php'; }, 9000);</script>";
}
$stmt->close();
mysqli_close($conn);
?>

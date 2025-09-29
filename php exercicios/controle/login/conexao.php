

<?php
$servername = "localhost";
$username = "root";
$password = ""; // aqui vazio para teste

// Criar conexão
$conn = mysqli_connect($servername, $username, $password);

// Verificar conexão
if (mysqli_connect_errno()) {
    die('Não foi possível conectar ao Banco de Dados. Erro detectado: ' . mysqli_connect_error());
}
?>


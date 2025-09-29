<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <form method="POST" action="">
        <label>Nome*: <input type="text" name="nome" required></label><br>
        <label>CPF*: <input type="text" name="cpf" required></label><br>
        <label>Endereço*: <input type="text" name="endereco" required></label><br>
        <label>Complemento: <input type="text" name="complemento"></label><br>
        <label>CEP*: <input type="text" name="cep" required></label><br>
        <label>Bairro*: <input type="text" name="bairro" required></label><br>
        <label>Cidade*: <input type="text" name="cidade" required></label><br>
        <label>Estado*: <input type="text" name="estado" required></label><br>
        <label>Telefone*: <input type="text" name="telefone" required></label><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os dados do formulário via POST
        $nome = $_POST['nome'] ?? '';
        $cpf = $_POST['cpf'] ?? '';
        $endereco = $_POST['endereco'] ?? '';
        $complemento = $_POST['complemento'] ?? '';
        $cep = $_POST['cep'] ?? '';
        $bairro = $_POST['bairro'] ?? '';
        $cidade = $_POST['cidade'] ?? '';
        $estado = $_POST['estado'] ?? '';
        $telefone = $_POST['telefone'] ?? '';

        require("conexao.php");

        if (!isset($conexao) || !$conexao) {
            die("Erro na conexão com o banco de dados.");
        }

        // Verifica se todos os campos obrigatórios foram preenchidos
        if ($nome && $cpf && $endereco && $cep && $bairro && $cidade && $estado && $telefone) {
            $stmt = mysqli_prepare($conexao, "INSERT INTO aluno (nome, cpf, endereco, complemento, cep, bairro, cidade, estado, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
            if ($stmt) {
                mysqli_stmt_bind_param($stmt, "sssssssss", $nome, $cpf, $endereco, $complemento, $cep, $bairro, $cidade, $estado, $telefone);
                if (mysqli_stmt_execute($stmt)) {
                    echo "<span style='color:green;'>Aluno cadastrado com sucesso!</span>";
                } else {
                    echo "<span style='color:red;'>Erro ao cadastrar aluno: " . mysqli_stmt_error($stmt) . "</span>";
                }
                mysqli_stmt_close($stmt);
            } else {
                echo "<span style='color:red;'>Erro na preparação da query: " . mysqli_error($conexao) . "</span>";
            }
        } else {
            echo "<span style='color:red;'>Por favor, preencha todos os campos obrigatórios.</span>";
        }

        mysqli_close($conexao);
    }
    ?>
</body>
</html>
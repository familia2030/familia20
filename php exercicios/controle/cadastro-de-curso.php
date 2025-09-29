<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>curso</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["aluno"]) && isset($_POST["curso"])) {
    $nome = $_POST["aluno"];
    $curso = $_POST["curso"];
    echo "<h2>usando echo </h2>";
    echo "Nome: $nome <br />";
    echo "Curso:$curso <br />";

    print ("<h2>usando print </h2>");
    print ("Nome: $nome <br />");
    print("Curso:$curso <br />");
}
?>
    <h1>Cadastro de Alunos</h1>
    <form method="post"action="cadatastro de curso">
    <label for="aluno">nome:</label>
    <input type="text"name="aluno"id>
    <label for="curso">Curso: </label>
<input type="text" id="curso" name="curso" /><br />
<input type="reset" value="Limpar" name="limpar" >
<input type="submit" value="Enviar" name="submit" />
</form>
</body>

</html>
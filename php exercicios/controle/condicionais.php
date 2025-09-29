<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais</title>
</head>
<body>
    <form action="" method="post">
        <label for="idade">Digite sua idade:</label>
        <input type="number" min="0" max="100" id="idade" name="idade" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["idade"])) {
        $idade = (int)$_POST["idade"];
        if ($idade >= 18) {
            echo "Você é maior de idade.";
        } else {
            echo "Você é menor de idade.";
        }
    }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notas</title>
</head>
<body>
<form action="" method="post">
    <label for="prova1">Prova 1</label>
    <input type="number" name="prova1" id="prova1" step="0.5" min="0" max="10" required><br>
    <label for="prova2">Prova 2</label>
    <input type="number" name="prova2" id="prova2" step="0.5" min="0" max="10" required><br>
    <button type="reset">Limpar</button>
    <input type="submit" value="Calcular">
</form>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['prova1']) && isset($_POST['prova2'])) {
    $prova1 = floatval($_POST['prova1']);
    $prova2 = floatval($_POST['prova2']);
    $parcial = $prova1 + $prova2;
    $media = $parcial / 2;
    echo "Parcial da soma das provas: $parcial<br>";
    if ($media >= 7) {
        echo "<strong style='color:green;'>Aprovado</strong><br>";
    } else {
        echo "<strong style='color: red;'>Reprovado</strong><br>";
    }
}
?>

</body>
</html>
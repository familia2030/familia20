<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Justificar Falta</title>
</head>
<body>

  
    <form name="myform" action="#" method="get" autocomplete="off">
        <fieldset>
            <legend>Justificativa de Falta</legend>
            Nome do aluno:
            <input type="text" name="nome_aluno" required> <br>
            Data da falta:
            <input type="date" name="data_falta" required><br>
            Justificativa:
            <input type="text" name="justificativa" placeholder="Justificativa" required><br><br>
            <input type="button" value="Justificar Falta" onclick="justificar_falta(this.form)">
            <button type="reset">Limpar</button>
        </fieldset>
    </form>
    <div id="resultado"></div>
    <script>
        function justificar_falta(form) {
            let nome = form.nome_aluno.value.trim();
            if (!nome) {
                alert("Por favor, preencha o nome do aluno.");
                form.nome_aluno.focus();
                return;
            }
            let jf = confirm("Justificar falta para " + nome + "?");
            if (jf) {
                document.getElementById("resultado").innerHTML = "Falta justificada para " + nome + ".";
            } else {
                document.getElementById("resultado").innerHTML = "";
            }
        }
    </script>
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>preencher dados de aluno</title>
</head>
<body>

  <fieldset><legend>cadastro de alunos </legend>
  <form action="cadastro_de_alunos.php">
<label for="aluno">nome:</label>
<input type="text" id ="aluno"name="aluno"
required><br></br>
<label for="cpf">cpf:</label>
<input type="text" id ="cpf"name ="cpf"
required><br></br>
<label for="endereço">endereço:</label>
<input type="text" id ="endereço"name="endereço"
required><br></br>
<label for="complemento">complemento:</label>
<input type="text" id ="complemento"name="complemento"
required><br></br>
<label for="cep">cep:</label>
<input type="text" id ="cep"name="cep"
required><br></br>
<label for="bairro">bairro:</label>
<input type="text" id ="bairro"name="bairro"
required><br></br>
<label for="cidade">cidade:</label>
<input type="text" id ="cidade"name="cidade"
required><br></br>
<label for="estado">estado:</label>
<select name="estado" id="estado">
    <option value="">selecione o estado</option>
    <option value="ac">acre</option>
    <option value="al">alagoas</option>
    <option value="ap">amapá</option>
    <option value="am">amazonas</option>
    <option value="ba">bahia</option>
    <option value="ce">ceará</option>
    <option value="df">distrito federal</option>
    <option value="es">espírito santo</option>  
    <option value="go">goiás</option>
    <option value="ma">maranhão</option>
    <option value="mt">mato grosso</option>
    <option value="ms">mato grosso do sul</option>
    <option value="mg">minas gerais</option>
    <option value="pa">pará</option>    
    <option value="pb">paraíba</option>
    <option value="pr">paraná</option>
    <option value="pe">pernambuco</option>
    <option value="pi">piauí</option>
    <option value="rj">rio de janeiro</option>
    <option value="rn">rio grande do norte</option>
    <option value="rs">rio grande do sul</option>   
    <option value="ro">rondônia</option>
    <option value="rr">roraima</option> 
    <option value="sc">santa catarina</option>
    <option value="sp">são paulo</option>
    <option value="se">sergipe</option>
    <option value="to">tocantins</option>
</select>
<br/>
<label for="telefone">telefone</label>
<input type="text" name="telefone" id="telefone"/></br>
</br>
<input type="reset" value="limpar" name="limpar">
<input type="submit" value="enviar" name="submit">
</form>
  </fieldset>  
</body>
</html>
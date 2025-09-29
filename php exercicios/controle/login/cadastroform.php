<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <title>Cadastro de usuário</title>
</head>
<body>
  <form action="cadastro.php" method="post">
	<div>
	  <label for="usuario">Login</label>
	  <input type="text" name="usuario" required />
	</div>
	<div>
	  <label for="senha">Senha</label>
	  <input type="password" name="senha" required />
	</div>
	<div>
	  <label for="tipo_usuario">Tipo de usuário</label>
	  <select name="id_tipo_acesso" required>
		<option value="">Selecione</option>
		<option value="1">Administrador</option>
		<option value="2">Usuário Comum</option>
	  </select>
	</div>
	<div>
	  <button type="submit" name="cadastrar" value="cadastrar">Cadastrar</button>
	</div>
  </form>

</body>
</html>
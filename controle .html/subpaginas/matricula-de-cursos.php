<fieldset><legend> Cadastro de disciplina nos cursos</legend>
<form method="post" action="cadastro_curso_
disciplina.php">
     <label for="curso">Selecione o curso:</label>
     <select name="curso" id="select">
<?php
          require("conexao.php");
          mysql_select_db("sis_academico");
          $consulta=mysql_query("SELECT id_curso, nome
FROM curso");
          while ($dados = mysql_fetch_array($consulta)) {
                 echo("<option
value=".$dados['id_curso']."'>".$dados['nome']."</
option>");
          }
      ?>
     </select>
     <br />
     <label for="disciplina">Selecione a disciplina:</label>
     <select name="disciplina" id="select">
        <?php
          require("conexao.php");
          mysql_select_db("sis_academico");
          $consulta=mysql_query("SELECT id_disciplina,
nome FROM disciplina");
               while ($dados = mysql_fetch_array($consulta)) {
          echo("<optionvalue='".$dados['id_disciplina']."'>".$dados['nome']."</
option>");
          }
            ?>
    </select>
    <br /> <br />
     <input type=”reset” value=”Limpar” name=”limpar” >

    <input type=”submit” value=”Enviar” name=”submit” />
</fieldset>
</form>


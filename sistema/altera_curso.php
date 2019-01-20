<?php
session_start();
require "sessao_time.php"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<script type="text/javascript">
function formatar(mascara, documento) {
  var i = documento.value.length;
  var saida = mascara.substring(0, 1);
  var texto = mascara.substring(i);
  if (texto.substring(0, 1) != saida) {
    documento.value += texto.substring(0, 1);
    }
}
</script>
<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="menu_sistema">
	<ul>
    	<li><a href="sis_curso">Inserir Curso</a></li>
      <li><a href="visualizar_curso">Visualizar Cursos</a></li>
    </ul>
</div>
<div id="container">
<?php
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';

  $cod = $_GET['id'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $id_curso = test_input($_POST["id"]);
  $nome = test_input($_POST["curso"]);
  $data_inicio = test_input($_POST["inicio"]);
  $data_termino = test_input($_POST["termino"]);
			
  $servico = array (
    'nome_curso' => $nome,
    'data_curso' => $data_inicio,
	'fim_curso' => $data_termino
  );
  
  $altera = DBUpDate('cursos', $servico, "id_curso = '".$id_curso."'");
  
  
  if ($altera) {
    echo "<script> alert('Alteração realizada com sucesso!') </script>";
    echo "<script>location.href=('visualizar_curso.php')</script>";
  }
  else { 
    echo "Erro ao alterar dados da loja, tente novamente mais tarde!";
    exit;
    }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  //LÊ DADOS DO BANCO
  $le_curso = DBRead ("cursos", "WHERE id_curso = '$cod'", "id_curso, nome_curso, data_curso, fim_curso");

    foreach ($le_curso as $tr){
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
  <tr>
      <td height="67" align="CENTER">INSERIR SERVIÇO</td>

    </tr
    ><tr>
      <td width="133">Nome do Curso:
      <input type="hidden" name="id" value="<?php echo $tr['id_curso']; ?>">
      	<input type="text" name="curso" class="contato" style="width: 98%;" value="<?php echo $tr['nome_curso']; ?>">
      </td>
    </tr>
    <tr>
    	<td height="46">Data de início:
      	<input type="text" name="inicio" class="contato" maxlength="10" placeholder="dd/mm/aaaa" onkeyup="formatar('##/##/####', this, event)" style="width: 98%;" value="<?php echo $tr['data_curso']; ?>">
      </td>
    </tr>
    <tr>
    	<td height="46">Data de Termino:
      	<input type="text" name="termino" class="contato" maxlength="10" placeholder="dd/mm/aaaa" onkeyup="formatar('##/##/####', this, event)" style="width: 98%;" value="<?php echo $tr['fim_curso']; ?>">
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle">
      	<input type="submit" class="button" value="Inserir" >
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
<?php
  }
?>
</div>
</body>
</html>

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
<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container">
<table width="100%" border="0" cellpadding="4" cellspacing="4" class="table">
<tr>
		<td class="linha" valign="middle"><b>Nome do Usuário</b></td>
	  <td valign="middle"><b>Excluir</b></td>
    <td valign="middle"><b>Alterar</b></td>
  </tr>
<?php
require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';


  $numreg = 16; // Quantos registros por página vai ser mostrado
  if (!isset($pg)) {
      $pg = 0;
  }
  $inicial = $_GET['pg'] * $numreg; 

   //LÊ DADOS DO BANCO
	$lojas = DBRead ("usuario", "ORDER BY nome_usuario ASC LIMIT $inicial, $numreg", "id_usuario, nome_usuario");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("usuario");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($lojas as $lj) {
		if ($lj['nome_usuario'] == 'Administrador') {
      echo "";
    } else {
		?>
	<tr>
		<td class="linha" valign="middle"><?php echo $lj['nome_usuario']; ?></td>
	  <td valign="middle">
            <a href="javascript:aviso('<?=$lj['id_usuario'];?>');">Excluir</a>
    </td>
    <td valign="middle">
            <a href="altera_usuarios.php?id=<?php echo $lj['id_usuario'];?>">Alterar</a>
    </td>
  </tr>

<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir usuário <?php echo $lj['nome_usuario'];?>?")) {
      window.location.href = "../processos/bd_delet_usuario.php?id="+id;
  }
  else {
    location.href=('visualizar_usuarios.php')
  }
}
//-->
</script>
<?php
    }
	}
?>
</table>
<center>
<div id="paginacao">
<?php
  require "../paginacao.php";
?>
</div>
</center>
</div>
</body>
</html>

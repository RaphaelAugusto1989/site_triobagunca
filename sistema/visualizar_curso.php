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
		<td class="linha" valign="middle"><b>Curso</b></td>
        <td class="linha" align="center" valign="middle"><b>Data de início</b></td>
        <td class="linha" align="center" valign="middle"><b>Data de termino</b></td>
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
	$le_curso = DBRead ("cursos", "ORDER BY nome_curso ASC", "id_curso, nome_curso, data_curso, fim_curso");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("cursos");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($le_curso as $c) {
		
		?>
	<tr>
		<td class="linha" valign="middle"><?php echo $c['nome_curso']; ?></td>
        <td class="linha" align="center" valign="middle"><?php echo $c['data_curso']; ?></td>
        <td class="linha" align="center" valign="middle"><?php echo $c['fim_curso']; ?></td>
	  	<td valign="middle">
            <a href="javascript:aviso('<?=$c['id_curso'];?>');">Excluir</a>
    	</td>
    	<td valign="middle">
            <a href="altera_curso.php?id=<?php echo $c['id_curso'];?>">Alterar</a>
    	</td>
  </tr>

<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir este curso?")) {
      window.location.href = "../processos/bd_delet_curso.php?id="+id;
  }
  else {
    location.href=('visualizar_curso.php')
  }
}
//-->
</script>
<?php
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

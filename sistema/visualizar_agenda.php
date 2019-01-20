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
		<td width="26%" height="25" valign="middle" class="linha"><b>Evento</b></td>
        <td width="36%" align="center" valign="middle" class="linha"><b>Data e hora</b></td>
        <td width="17%" align="center" valign="middle" class="linha"><b>Tipo</b></td>
	  	<td width="9%" valign="middle"><b>Excluir</b></td>
    <td width="12%" valign="middle"><b>Alterar</b></td>
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
	$le_curso = DBRead ("agenda", "ORDER BY data ASC", "*");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("agenda");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($le_curso as $c) {
		
		?>
	<tr>
		<td class="linha" valign="middle"><?php echo $c['evento']; ?></td>
        <td class="linha" valign="middle"><?php echo "".$c['data']." (".$c['semana'].") as ".$c['hora']."" ?></td> 
        <td class="linha" align="center" valign="middle" <?php if ($c['tipo'] == 'Em Andamento') echo "style='color:#068200;'"; else echo "style='color:#C50003;'"; ?>><?php echo $c['tipo']; ?></td>
	  	<td valign="middle">
            <a href="javascript:aviso('<?=$c['id_agenda'];?>');">Excluir</a>
    	</td>
    	<td valign="middle">
            <a href="altera_agenda.php?id=<?php echo $c['id_agenda'];?>">Alterar</a>
    	</td>
  </tr>

<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir este evento?")) {
      window.location.href = "../processos/bd_delet_agenda.php?id="+id;
  }
  else {
    location.href=('visualizar_agenda.php')
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

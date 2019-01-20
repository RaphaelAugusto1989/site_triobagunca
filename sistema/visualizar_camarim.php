<?php
if (!isset($_SESSION)) {
     session_start();
}
require "sessao_time.php"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container" style="padding-left: 8%;">
  <p align="center" style="font-size: 20px; font-weight: bold;">Camarim Fashion</p>
<?php
require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';


  $numreg = 20; // Quantos registros por página vai ser mostrado
  if (!isset($pg)) {
      $pg = 0;
  }
  $inicial = $_GET['pg'] * $numreg; 

   //LÊ DADOS DO BANCO
	$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Camarim Fashion' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("servicos");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($lojas as $lj) {
?>

<table width="20%" border="0" cellpadding="0" cellspacing="0" class="tablesis">
<tr onmouseover="ChangeColor(this, true);" onmouseout="ChangeColor(this, false);" onclick="DoNav('altera_linhas.php?id=<?php echo $lj['id_servico'];?>');">
		<td class="linha" align="center" valign="middle">
      <?php echo "<img src='../img/servicos/".$lj['imagem_servico']."' class='imgserv'>";?>
        <a href="javascript:aviso('<?=$lj['id_servico'];?>');" id="excluir">
          <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir"></i>

        </a>
    </td>
</tr>
<tr>
		<td class="linha espaco" align="center" valign="middle">
      <?php echo $lj['nome_servico']; ?> <br />
      <?php echo $lj['tipo_servico']; ?>
    </td>
</tr>
</table>
<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir?")) {
      window.location.href = "../processos/bd_delet_servico.php?id="+id;
  }
  else {
    location.href=('visualizar_servico.php')
  }
}
//-->
</script>
<?php
	}
?>
</center>
<div id="paginacao">
<?php
  require "../paginacao.php";
?>
</div>
</center>
</div>
</body>
</html>

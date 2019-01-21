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
<?php
require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';

  $numreg = 5; // Quantos registros por página vai ser mostrado
  $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
  $inicial = ($pg * $numreg) - $numreg;

  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("trio");
  $countTotal = count($sql);// Quantidade de registros pra paginação

   //LÊ DADOS DO BANCO
	$lojas = DBRead ("trio", "ORDER BY id_trio ASC LIMIT $inicial, $numreg", "id_trio, nome, idade, funcao, alem, rede_social, foto");

foreach ($lojas as $lj) {
	$date = new DateTime($lj['idade']);
	$nascimento = $date->format('d/m/Y');
?>
<tr>
		<td class="linha" align="center" valign="middle" width="150"><?php echo "<img src='../img/parceiros/".$lj['foto']."' class='imgserv'>";?></td>
		<td valign="top" width="500">
    <b>Nome:</b> <?php echo $lj['nome']; ?> <br />
    <b>Data de Nascimento:</b> <?php echo $nascimento; ?><br />
    <b>Função:</b> <?php echo $lj['funcao']; ?> <br />
    <b>Além do Trio bagunça é:</b> <?php echo $lj['alem']; ?> <br />
    <b>Facebook:</b> <a href="<?php echo $lj['rede_social'];?>" target="_blank"><?php echo $lj['rede_social'];?></a> <br />
    </td>
	  <td valign="middle">
            <a href="javascript:aviso('<?=$lj['id_trio'];?>');">Excluir</a> <br />
            <a href="altera_trio.php?id=<?php echo $lj['id_trio'];?>;">Alterar</a>
            
    </td>
  </tr>

<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir parceiro?")) {
      window.location.href = "../processos/bd_delet_trio.php?id="+id;
  }
  else {
    location.href=('visualiza_trio.php')
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
    if ($countTotal > $numreg) {
       include("../paginacao.php"); // chamada do arquivo. ex: << Anterior 1 2 3 4 5 Próxima >>
    }
  ?>
</div>
</center>
</div>
</body>
</html>

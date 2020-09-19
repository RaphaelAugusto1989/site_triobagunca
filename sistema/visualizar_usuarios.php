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
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container">
<table width="100%" cellpadding="4" cellspacing="4" class="sis_table_evento">
<thead>
  <tr>
		<th align="left" ><b>Nome do Usuário</b></th>
    <th align="left" ><b>CPF</b></th>
    <th align="left" ><b>E-mail</b></th>
	  <th align="center"><b>Alterar</b></th>
    <th align="center"><b>Excluir</b></th>
  </tr>
</thead>
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
	$user = DBRead ("usuario", "ORDER BY nome_usuario ASC LIMIT $inicial, $numreg", "*");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("usuario");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($user as $us) {
		if ($lj['nome_usuario'] == 'Administrador') {
      echo "";
    } else {
		?>
	<tbody style="border-bottom: 1px solid #080077;">
  	<tr>
      <td valign="top"><?php echo $us['nome_usuario'].' '.$us['sobrenome_usuario']; ?></td>
      <td valign="top"><?php echo $us['cpf_usuario']; ?></td>
      <td valign="top"><?php echo $us['email_usuario']; ?></td>
      <td valign="top" align="center">
        <a href="altera_usuarios.php?id=<?php echo $us['id_usuario'];?>">
          <i class="fa fa-edit fa-2x" aria-hidden="true" title="Alterar" style="color: #006400; font-size: 25px;"></i>
        </a>
      </td>
      <td valign="top" align="center">
        <a href="javascript:aviso('<?=$us['id_usuario'];?>');">
          <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir" style="color: #EE0000; font-size: 25px;"></i>
        </a>
      </td>
    </tr>
  </tbody>

<script language= 'javascript'>
<!--
function aviso(id) {
  if (confirm ("Deseja realmente excluir usuário <?php echo $us['nome_usuario'];?>?")) {
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

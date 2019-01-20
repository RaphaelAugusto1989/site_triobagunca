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
   $recados = DBRead ("recados", "WHERE aprovacao = 'Sim' ORDER BY id_recado DESC LIMIT $inicial, $numreg", "id_recado, nome_recado, recado, data_hora, aprovacao, fotos");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("recados");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($recados as $rd) {
?>
<table width="90%" border="0" cellspacing="2" cellpadding="2" id="sis_table_recados">
  <tbody>
  	<tr>
      <td width="18%" rowspan="3" align="center" valign="top"> 
      	<?php
			if ($rd['fotos'] == false) { echo "<img src=\"../img/sombra.jpg\" class=\"foto_cliente\">"; }
			else { echo "<img src=\"../img/clientes/".$rd['fotos']."\" class=\"foto_cliente\">"; }
	  	?>
	  </td>
    </tr>
    <tr>
      <td width="82%" height="10" valign="top">
      <b><?php echo $rd['nome_recado']?></b> 
      <span style=" font-size: 12px; margin-left: 10px;"><?php echo $rd['data_hora']?></span>
      <a href="../processos/bd_delet_recado.php?id=<?php echo $rd['id_recado'];?>" style="float:right; margin-right: 30px;">
          <img src="../img/lixo.png" width='10%' class='excluir' >
        </a>
      </td>
    </tr>
    <tr>
      <td  valign="top">
	  	<?php echo $rd['recado']?>
      	
      </td>
    </tr>
  </tbody>
</table>

<?php
  }
?>
<div id="paginacao">
<?php
  require "../paginacao.php";
?>
</div>
</div>
</body>
</html>

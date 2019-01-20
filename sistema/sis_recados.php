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
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $id_recado = test_input($_POST["id_recado"]);
  $aprovacao = test_input($_POST["aprocacao"]); 
  
   
  $aprovado = array ('aprovacao' => $aprovacao);
  
  $altera = DBUpDate('recados', $aprovado, 'id_recado="'.$id_recado.'"');

}

  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

$numreg = 20; // Quantos registros por página vai ser mostrado
  if (!isset($pg)) {
      $pg = 0;
  }
  $inicial = $_GET['pg'] * $numreg; 

   //LÊ DADOS DO BANCO
  $recados = DBRead ("recados", "WHERE aprovacao = 'Não' ORDER BY data_hora DESC LIMIT $inicial, $numreg", "id_recado, nome_recado, recado, data_hora, aprovacao, fotos");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("recados");

  // Quantidade de registros pra paginação
  $quant = count($sql);

  foreach ($recados as $rd) {
	  $id = $rd['id_recado'];
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<table width="100%" border="0" cellspacing="2" cellpadding="2" id="sis_table_recados">
  <tbody>
  	<tr>
      <td width="17%" rowspan="3" align="center" valign="top"> 
      	<?php
			if ($rd['fotos'] == false) { echo "<img src=\"../img/sombra.jpg\" class=\"foto_cliente\">"; }
			else { echo "<img src=\"../img/clientes/".$rd['fotos']."\" class=\"foto_cliente\">"; }
	  	?>
	  </td>
    </tr>
    <tr>
      <td width="83%" height="10" valign="top">
      <b><?php echo $rd['nome_recado'];?></b> 
      <span style=" font-size: 12px; margin-left: 10px;"><?php echo $rd['data_hora'];?></span>
      <input type="hidden" name="id_recado" value="<?php echo $rd['id_recado'];?>"> 
      <input type="hidden" name="aprocacao" value="Sim">
      </td>
    </tr>
    <tr>
      <td  valign="top"><?php echo $rd['recado'];?></td>
    </tr>
    <tr>
      <td  valign="top" align="right" colspan="2">
	 	<input type="submit" value="Aprovar" class="aprovado" style=" padding-top: 8px;">
        <a href="../processos/bd_delet_recado.php?id=<?php echo $rd['id_recado'];?>" class="aprovado">
        	Descartar
        </a>
      </td>
    </tr>
  </tbody>
</table>
</form>
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

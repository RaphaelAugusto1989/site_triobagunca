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
<?php
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';

  $numreg = 20; // Quantos registros por página vai ser mostrado

  $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
  $inicial = ($pg * $numreg) - $numreg;

  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("agenda");
  $countTotal = count($sql);// Quantidade de registros pra paginação

   //LÊ DADOS DO BANCO
   $agenda = DBRead ("agenda", " ORDER BY data DESC LIMIT $inicial, $numreg", "*");

  foreach ($agenda as $rd) {
?>
<table width="90%" border="0" cellspacing="2" cellpadding="2" id="sis_table_recados">
  <tbody>
  	<tr>
      <td width="18%" rowspan="3" valign="top"> 
      	<?php
            $date = explode('-', $rd['data']);
            echo  $date[2].'/'.$date[1].'/'.$date[0];
	  	  ?>
	  </td>
    </tr>
    <tr>
      <td width="82%" height="10" valign="top">
      <span style="margin-left: 10px;"><?php echo $rd['evento']?></span>
        <a href="../processos/bd_delet_evento.php?id=<?php echo $rd['id_agenda'];?>" style="float:right; margin-right: 30px;">
              <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir" style="color: #EE0000; font-size: 25px;"></i>
        </a>
        <a href="altera_evento?id=<?php echo $rd['id_agenda'];?>" style="float:right; margin-right: 30px;">
            <i class="fa fa-edit fa-2x" aria-hidden="true" title="Alterar" style="color: #006400; font-size: 25px;"></i>
        </a>
      </td>
    </tr>
  </tbody>
</table>
<?php
  }
?>
<div id="paginacao">
<?php
    if ($countTotal > $numreg) {
       include("../paginacao.php"); // chamada do arquivo. ex: << Anterior 1 2 3 4 5 Próxima >>
    }
  ?>
</div>
</div>
</body>
</html>

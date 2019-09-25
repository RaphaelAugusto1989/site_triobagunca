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
<table width="90%" border="0" cellspacing="2" cellpadding="2" id="sis_table_evento">
  <thead>
    <tr>
      <th align="left">Data</th>
      <th align="left">Evento</th>
      <th align="left">Local</th>
      <th width="5%" align="center">Alterar</th>
      <th width="5%" align="center">Excluir</th>
    </tr>
  </thead>
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
  <tbody style="border-bottom: 1px solid #080077;">
  	<tr>
      <td width="18%" valign="top"> 
      	<?php
            $date = explode('-', $rd['data']);
            echo  $date[2].'/'.$date[1].'/'.$date[0];
	  	  ?>
	    </td>
      <td valign="top"> 
          <?php echo $rd['evento']?>
	    </td>
      <td  valign="top"> 
          <?php echo $rd['local']?>
      </td>
      <td width="5%" align="center">
          <a href="altera_evento?id=<?php echo $rd['id_agenda'];?>">
              <i class="fa fa-edit fa-2x" aria-hidden="true" title="Alterar" style="color: #006400; font-size: 25px;"></i>
          </a>
	    </td>
      <td width="5%" align="center">
          <a href="../processos/bd_delet_agenda.php?id=<?php echo $rd['id_agenda'];?>">
              <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir" style="color: #EE0000; font-size: 25px;"></i>
          </a>
      </td>
    </tr>
  </tbody>
<?php
  }
?>
</table>
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

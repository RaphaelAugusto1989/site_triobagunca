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
      <th width="9%" align="left">Data</th>
      <th width="14%" align="left">Hora</th>
      <th width="48%" align="left">Evento</th>
      <th width="17%" align="left">Local</th>
      <th width="4%" align="center">Alterar</th>
      <th width="4%" align="center">Excluir</th>
      <th width="4%" align="center">Lista</th>
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
   $agenda = DBRead ("agenda", " ORDER BY data_inicio ASC LIMIT $inicial, $numreg", "*");

  foreach ($agenda as $rd) {
?>
  <tbody style="border-bottom: 1px solid #080077;">
  	<tr>
      <td valign="middle"> 
      	<?php
            $date = explode('-', $rd['data_inicio']);
            echo  $date[2].'/'.$date[1].'/'.$date[0];
	  	  ?>
	    </td>
      <td valign="middle"> 
          <?php echo $rd['hora_inicio'].' as '.$rd['hora_termino'];?>
	    </td>
      <td valign="middle"> 
          <?php echo $rd['evento']?>
	    </td>
      <td  valign="middle"> 
          <?php echo $rd['local']?>
      </td>
      <td width="5%" align="center" valign="middle">
          <a href="altera_evento?id=<?php echo $rd['id_agenda'];?>">
              <i class="fa fa-edit fa-2x" aria-hidden="true" title="Alterar" style="color: #006400; font-size: 25px;"></i>
          </a>
	    </td>
      <td width="5%" align="center" valign="middle">
          <a href="../processos/bd_delet_agenda.php?id=<?php echo $rd['id_agenda'];?>">
              <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir" style="color: #EE0000; font-size: 25px;"></i>
          </a>
      </td>
      <td width="5%" align="center" valign="middle">
        <?php 
          if ($rd['local'] == 'Externo') {
        ?>
          <i class="fa fa-list-ul fa-2x" aria-hidden="true" title="Lista de Participantes" style="color: #B5B5B5; font-size: 25px;"></i>
        <?php
          } else {
        ?>
          <a href="lista_evento.php?id=<?php echo $rd['id_agenda'];?>">
              <i class="fa fa-list-ul fa-2x" aria-hidden="true" title="Lista de Participantes" style="color: #000000; font-size: 25px;"></i>
          </a>
        <?php
          }
        ?>
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

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
  
  $cod = $_GET['id'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $id		= test_input($_POST["id"]);
  $evento	= test_input($_POST["evento"]);
  $data 	= test_input($_POST["data"]);
  $semana 	= test_input($_POST["semana"]);
  $hora 	= test_input($_POST["hora"]);
  $local 	= test_input($_POST["local"]);
  $obs 		= test_input($_POST["obs"]);
  $tipo 	= test_input($_POST["tipo"]);
			
  
  $agenda = array (
    'evento' => $evento,
    'data' => $data,
	'semana' => $semana,
    'hora' => $hora,
	'local' => $local,
	'obs' => $obs,
	'tipo' => $tipo
  );
  
	$altera = DBUpDate('agenda', $agenda, "id_agenda = '".$id."'");
  
  if ($altera) {
    echo "<script> alert('Alterado com sucesso!') </script>";
    echo "<script>location.href=('altera_agenda.php?id=$id')</script>";
  }
  else { 
    echo "Erro ao alterar, tente novamente mais tarde!";
    exit;
    }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
  
    //LÊ DADOS DO BANCO
  $le_agenda = DBRead ("agenda", "WHERE id_agenda = '$cod'", "*");

  foreach ($le_agenda as $tr){

?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
  <tr>
      <td height="67" align="CENTER">ALTERAR EVENTO</td>

    </tr>
    <tr>
    	<td height="46">Nome do Evento:
        <input type="hidden" name="id" value="<?php echo $tr['id_agenda']; ?>">
      	<input type="text" name="evento" class="contato" style="width: 98%;"value="<?php echo $tr['evento']; ?>">
      </td>
    </tr>
    <tr>
      <td height="46">Data:
        <?php
            $date = explode('-', $rd['data']);
            $data = $date[2].'/'.$date[1].'/'.$date[0];
	  	  ?>
      	<input type="text" name="data" id="date" class="contato" style="width: 98%;" placeholder="DD/MM/AAAA"  maxlength="10" value="<?php echo $data; ?>">
      </td>
    </tr>
    <tr>
      <td width="133">Dia da Semana:
      	<select name="semana" class="contato" style="width: 100%; height: 40px;">
            <option <?php if ($tr['semana'] == 'Domingo') echo "selected"; ?>>Domingo</option>
            <option <?php if ($tr['semana'] == 'Segunda-Feira') echo "selected"; ?>>Segunda-Feira</option>
            <option <?php if ($tr['semana'] == 'Terça-Feira') echo "selected"; ?>>Terça-Feira</option>
            <option <?php if ($tr['semana'] == 'Quarta-Feira') echo "selected"; ?>>Quarta-Feira</option>
            <option <?php if ($tr['semana'] == 'Quinta-Feira') echo "selected"; ?>>Quinta-Feira</option>
            <option <?php if ($tr['semana'] == 'Sexta-Feira') echo "selected"; ?>>Sexta-Feira</option>
            <option <?php if ($tr['semana'] == 'Sábado') echo "selected"; ?>>Sábado</option>
      	</select>
      </td>
    </tr>
    <tr>
      <td height="46">Hora:
      	<input type="text" name="hora" id="time" class="contato" style="width: 98%;" placeholder="00:00" value="<?php echo $tr['hora']; ?>">
      </td>
    </tr>
    <tr>
      <td height="46">Local:
      	<input type="text" name="local" class="contato" style="width: 98%;" value="<?php echo $tr['local']; ?>">
      </td>
    </tr>
    <tr>
      <td height="46">Observação sobre o evento:
      	<textarea name="obs" class="contato" style="width: 98%; height: 100px;"><?php echo $tr['obs']; ?></textarea>
      </td>
    </tr>
    <tr>
      <td width="133">Tipo de Serviço:
      	<select name="tipo" class="contato" style="width: 100%; height: 40px;">
        	
            <option <?php if ($tr['tipo'] == 'Em Andamento') echo "selected"; ?>>Em Andamento</option>
            <option <?php if ($tr['tipo'] == 'Finalizado') echo "selected"; ?>>Finalizado</option>
      	</select>
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle">
      	<input type="submit" class="button" value="Alterar" >
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
<?php
  }
?>
</div>
<script src="../js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
        $.mask.definitions['~'] = "[+-]";
        $("#date").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
        $("#time").mask("99:99",{placeholder:"00:00"});
        $("#phoneExt").mask("(999) 999-9999? x99999");
        $("#iphone").mask("+33 999 999 999");
        $("#tin").mask("99-9999999");
        $("#ssn").mask("999-99-9999");
        $("#product").mask("a*-999-a999", { placeholder: " " });
        $("#eyescript").mask("~9.99 ~9.99 999");
        $("#po").mask("PO: aaa-999-***");
        $("#pct").mask("99%");
        $("#phoneAutoclearFalse").mask("(999) 999-9999", { autoclear: false, completed:function(){alert("completed autoclear!");} });
        $("#phoneExtAutoclearFalse").mask("(999) 999-9999? x99999", { autoclear: false });

        $("input").blur(function() {
            $("#info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });
</script>
</body>
</html>

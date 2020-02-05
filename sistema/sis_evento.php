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
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/mask.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>
<script type="text/javascript">
  function formatar(mascara, documento) {
    var i = documento.value.length;
    var saida = mascara.substring(0, 1);
    var texto = mascara.substring(i);
    if (texto.substring(0, 1) != saida) {
      documento.value += texto.substring(0, 1);
      }
  }
</script>
<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container">
<?php
date_default_timezone_set('America/Sao_Paulo');

require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //RECEBE DADOS DO FORMULARIO
  $dateInicio = explode('/', test_input($_POST["data_inicio"])); 
  $dateFinal = explode('/', test_input($_POST["data_final"])); 
  $valor = number_format(test_input($_POST["valor"]), 2, '.', ',');

  $dataHoje = date('Y-m-d');
  $titulo_evento = test_input($_POST["titulo"]);
  $data_inicio = $dateInicio[2].'-'.$dateInicio[1].'-'.$dateInicio[0];
  $data_final = $dateFinal[2].'-'.$dateFinal[1].'-'.$dateFinal[0];

  if ($data_final == '--') {
    $data_final = "0000-00-00"; 
  }

  $hora_inicio = test_input($_POST["inicio"]);
  $hora_termino = test_input($_POST["termino"]);
  $qtd_evento = test_input($_POST["qtd"]);
  $local_evento = test_input($_POST["local"]);
  $status_evento = test_input($_POST["status"]);
  $endereco_evento = test_input($_POST["endereco"]);
  $valor_evento = $valor;
  $file = $_FILES["capa"];
  $detalhe_evento = test_input($_POST["detalhe"]);
  $CreateUser = $_SESSION["id_user"];
  $CreateDate = date('Y-m-d H:i:s');

  // if ($data_inicio <= $dataHoje) {
  //   echo "<script> alert('Data Inicio menor ou igual ao dia do cadastramento do evento!') </script>";
  //   echo "<script>location.href=('sis_evento.php')</script>";
  //   exit;
  // } 

  // if ($data_final != '0000-00-00') {
  //   if ($data_final <= $dataHoje) {
  //     echo "<script> alert('Data Final menor ou igual ao dia do cadastramento do evento!') </script>";
  //     echo "<script>location.href=('sis_evento.php')</script>";
  //     exit;
  //   } else if ($data_final <= $data_inicio) {
  //     echo "<script> alert('Data Final menor ou igual a data de Inicio do evento!') </script>";
  //     echo "<script>location.href=('sis_evento.php')</script>";
  //     exit;
  //   }
  // }

  $diretorio = '../img/eventos/';
			if(!is_dir($diretorio)){
			   mkdir($diretorio);
			}

  // imagem 1
  if($file["name"] != "")  {
    $nome_dia = "capa_evento".date('YmdHis').".";
    $aux = explode(".",$file["name"]);
    $i=0;
    $ext="";

    while($aux[$i] != "") {
           $ext=$aux[$i];
           $i++;
    }

    $nomefoto = "$nome_dia$ext";
    $destino="$diretorio/$nomefoto";

    move_uploaded_file($file[tmp_name], $destino) or die("Erro na cópia da banner $file[name]! verifique a permissão do seu diretório!");
    //@copy("$file[tmp_name]","$destino") or die("Erro na cópia da imagem  $file[name]! verifique a permissão do seu diretório!");
  }

  $evento = array (
    'evento' => $titulo_evento,
    'data_inicio' => $data_inicio,
    'data_final' => $data_final,
    'hora_inicio' => $hora_inicio,
    'hora_termino' => $hora_termino,
    'qtd' => $qtd_evento,
    'local' => $local_evento,
    'endereco' => $endereco_evento,
    'valor' => $valor_evento,
    'status' => $status_evento,
    'obs' => $detalhe_evento,
    'capa_evento' => $nomefoto,
    'create_user' => $CreateUser,
    'create_date' => $CreateDate
  );

  $grava = DBCreate('agenda', $evento);
  
  if ($grava) {
    echo "<script> alert('Evento cadastrado com sucesso!') </script>";
    echo "<script>location.href=('sis_evento.php')</script>";
  } else { 
    echo "Erro ao cadastrar, tente novamente mais tarde!";
    exit;
  }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
    <tr>
      <td height="67" colspan='5' align="CENTER">CADASTRAR EVENTO</td>
    </tr>
    <tr>
      <td width="133" colspan='5'>Titulo:
      	<input type="text" name="titulo" class="contato" style="width: 98%;" require>
      </td>
    </tr>
    <tr>
    	  <td height="46">Data início do Evento:<br />
            <input type="text" name="data_inicio" class="contato data" maxlength="10" placeholder="dd/mm/aaaa" style="width: 90%;" require>
        </td>
        <td height="46">Data final do Evento:<br />
            <input type="text" name="data_final" class="contato data" maxlength="10" placeholder="dd/mm/aaaa" style="width: 90%;" title="* Campo não obrigatório, caso o evento seja no mesmo dia, não é preciso preencher a data final do evento.">
        </td>
        <td height="46">Hora Inicio do Evento:<br />
            <input type="text" name="inicio" class="contato hora" maxlength="5" placeholder="00:00" style="width: 93%;" require>
        </td>
        <td height="46">Hora Término do Evento:<br />
            <input type="text" name="termino" class="contato hora" maxlength="5" placeholder="00:00" style="width: 93%;" require>
        </td>
    </tr>
    <tr>
        <td height="46" colspan='2'>Qtd de Crianças:<br />
            <input type="text" name="qtd" class="contato" maxlength="5" placeholder="Quantidade" style="width: 95%;" require>
        </td>
        <td height="46" colspan='2'>Valor:<br />
            <input type="text" name="valor" class="contato moeda" placeholder="R$ 0,00" style="width: 97%;" require>
        </td>
    </tr>
    <tr>
    	<td height="46" colspan='3'>Local do Evento:<br />
        <select name="local" class="contato" style="width: 99%; height: 43px;">
            <option value="Espaço Bagunça">Espaço Bagunça</option>
            <option value="Externo">Externo</option>
        </select>
      </td>
      <td height="46" colspan='2'>Status:<br />
            <select name="status" class="contato" style="width: 98%; height: 43px;">
                <option value="1">Ativado</option>
                <option value="2">Desativado</option>
            </select>
        </td>
    </tr>
    <tr>
      <td width="133" colspan='5'>Endereço: 
      	<input type="text" name="endereco" class="contato" style="width: 98%;" placeholder="*Preencher só se o evento for externo!">
      </td>
    </tr>
    <tr>
    	<td height="46" colspan='5'>Capa do Evento: <br />
        <label for='uploadBtn' class="uploadBtn">Selecionar Foto</label>
        <input type="file" name="capa" class="foto_recado_file" id="uploadBtn" >
        <input id="uploadFile" disabled="disabled" class="uploadfile contato" style="width: 80%;"/>
        <br />
      </td>
    </tr>
    <tr>
    	<td height="46" colspan='5'>Detalhe do Evento:
        <textarea name="detalhe" class="contato" id="" style="width: 98%; height: 150px;" ></textarea>
      </td>
    </tr>
    <tr>
      <td height="64"  colspan='5' align="center" valign="middle">
      	<input type="submit" class="button" value="Inserir" onClick="validaForm">
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
</div>
<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };

    $( function() {
        $( ".data" ).datepicker({
            dateFormat : 'dd/mm/yy',
            // showOn: "button",
            // buttonImage: "img/calendar.png",
            // buttonSize: "10",
            // buttonImageOnly: true,
            // buttonText: "Select date"
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            nextText: 'Próximo',
            prevText: 'Anterior'
        });
    } );

    $( function() {
        $( document ).tooltip();
    } );

</script>
</body>
</html>

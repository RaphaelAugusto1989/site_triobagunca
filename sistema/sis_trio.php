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
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $nome_parceiro = test_input($_POST["nome"]);
  $idade_parceiro = test_input($_POST["idade"]);
  $funcao_parceiro = test_input($_POST["funcao"]);
  $alem_parceiro = test_input($_POST["alem"]);
  $facebook = test_input($_POST["facebook"]);
  $arquivo1 = $_FILES["imagem"];
			
  // imagem 1
if($arquivo1["name"] != "")
        {
  $nome_dia1="parceiro_".date("d")."_".date("m")."_".date("Y")."_".date("his").".";
  $aux1 = explode(".",$arquivo1["name"]   );
  $i1=0;
  $ext1="";
  while($aux1[$i1] != "")
  {
         $ext1=$aux1[$i1];
         $i1++;
  }
  $nomefoto = "$nome_dia1$ext1";
  $destino1="../img/parceiros/$nomefoto";
  //echo $destino;
  @copy("$arquivo1[tmp_name]","$destino1") or die("Erro na cópia da imagem 1 $arquivo1[name]! verifique a permissão do seu diretório!");
        }
  
  $parceiro = array (
    'nome' => $nome_parceiro,
	'idade' => $idade_parceiro,
	'funcao' => $funcao_parceiro,
	'alem' => $alem_parceiro,
    'rede_social' => $facebook,
	'foto' => $nomefoto
  );
  
  $grava = DBCreate('trio', $parceiro);
  
  
  if ($grava) {
    echo "<script> alert('Cadastrado com sucesso!') </script>";
    echo "<script>location.href=('sis_trio.php')</script>";
  }
  else { 
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
      <td height="67" align="CENTER">INSERIR PARCEIRO</td>

    </tr
    ><tr>
      <td width="133">Nome:
      	<input type="text" name="nome" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
    	<td height="46">Data de Nascimento:<br />
        <input type="date" name="idade" class="contato" maxlength="10" placeholder="dd/mm/aaaa" onkeyup="formatar('##/##/####', this, event)" style="width: 30%;">
      </td>
    </tr>
    <tr>
    	<td height="46">Função no Trio Bangunça:
      	<input type="text" name="funcao" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
    	<td height="46">Além do Trio Bagunça é:
      	<input type="text" name="alem" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
    	<td height="46">Facebook:
      	<input type="text" name="facebook" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
      <td height="46">Fotos:<br />
        <label for='uploadBtn' class="uploadBtn">Selecionar Foto</label>
        <input type="file" name="imagem" class="foto_recado_file" id="uploadBtn" >
        <input id="uploadFile" disabled="disabled" class="uploadfile contato" style="width: 80%;"/>
        <br />
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle">
      	<input type="submit" class="button" value="Inserir" >
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
</script>
</body>
</html>

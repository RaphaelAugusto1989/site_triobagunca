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
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			setTimeout(function(){
				$("#divCarregando").fadeOut("slow");		
			})
		});
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
  $tipo_servico = test_input($_POST["tipo_servico"]);
  $nome_servico = test_input($_POST["nome_imagem"]);
  $file = $_FILES["imagem"];
			
  // imagem 1
if($file["name"] != "")
        {
  $nome_dia="servico_".date("d")."_".date("m")."_".date("Y")."_".date("his").".";
  $aux = explode(".",$file["name"]   );
  $i=0;
  $ext="";
  while($aux[$i] != "")
  {
         $ext=$aux[$i];
         $i++;
  }
  $nomefoto = "$nome_dia$ext";
  $destino="../img/servicos/$nomefoto";
  //echo $destino;
  @copy("$file[tmp_name]","$destino") or die("Erro na cópia da imagem  $file[name]! verifique a permissão do seu diretório!");
        }


  
  $servico = array (
    'tipo_servico' => $tipo_servico,
    'nome_servico' => $nome_servico,
    'imagem_servico' => $nomefoto
  );
  
$grava = DBCreate('servicos', $servico);
  
  if ($grava) {
    echo "<script> alert('Cadastrado com sucesso!') </script>";
    echo "<script>location.href=('sis_servicos.php')</script>";
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
<table width="70%" border="0" cellspacing="3" cellpadding="0" class="sistable">
  <tbody>
  <tr>
      <td height="67" align="CENTER">INSERIR SERVIÇO</td>

    </tr>
    <tr>
      <td width="133">Tipo de Serviço:
      	<select name="tipo_servico" class="contato" style="width: 100%; height: 40px;">
            <option>Animação Infantil</option>
            <option>Animação Online</option>
            <option>Camarim Fashion</option>
            <option>Contação de História</option>
            <option>Oficina de Slime</option>
            <option>Personagem Vivo</option>
            <option>Pintura de Rosto</option>
            <option>Vídeo Chamada Mágica</option>
            <option>Vídeo Personalizado Mágico</option>
      	</select>
      </td>
    </tr>
    <tr>
    	<td height="46">Nome:
      	<input type="text" name="nome_imagem" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
      <td height="46">Fotos: <br />
          <label for='uploadBtn' class="uploadBtn">Selecionar Foto:</label>
					<input type="file" name="imagem" class="foto_recado_file" id="uploadBtn" >
					<input id="uploadFile" disabled="disabled" class="uploadfile contato" style="width: 78%;"/> 
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

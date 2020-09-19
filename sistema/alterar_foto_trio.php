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
  $id_trio = test_input($_POST["trio"]);
  $foto = test_input($_POST["nomefoto"]);
  $arquivo1 = $_FILES["foto"];
			
// imagem 1
if($arquivo1["name"] != "") {
  $nome_dia1="$foto";
  $aux1 = explode(".",$arquivo1["name"]);
  $i1=0;
  $ext1="";
  while($aux1[$i1] != "") {
         $ext1=$aux1[$i1];
         $i1++;
  }
  $nomefoto = "$nome_dia1";
  $destino1="../img/parceiros/$nomefoto";
  //echo $destino;
  @copy("$arquivo1[tmp_name]","$destino1") or die("Erro na cópia da imagem 1 $arquivo1[name]! verifique a permissão do seu diretório!");
        }
  
  $parceiro = array ('foto' => $foto);
  
  $altera = DBUpDate('trio', $parceiro, 'id_trio="'.$id_trio.'"');
  
  //var_dump($pedido);
  if ($altera) {
   echo "<script> alert('Alteração realizada com sucesso!') </script>";
   echo "<script>location.href=('visualizar_trio.php')</script>";
  }
  else { 
    echo "Erro ao alterar dados da loja, tente novamente mais tarde!";
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
  $letrio = DBRead ("trio", "WHERE id_trio = '$cod'", "id_trio, nome, foto");

    foreach ($letrio as $tr){
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="100%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
    <tr>
      <td height="67" align="CENTER" colspan="2" >ALTERAR FOTO DO PARCEIRO</td>
    </tr>
    <tr>
        <td width="15%" rowspan="3"> 
              <img src="../img/parceiros/<?php echo $tr['foto'];?>" width="99%">
        </td>
    </tr>
    <tr>
      <td valign="top"><h1><?php echo $tr['nome'];?></h1>
        <input type="hidden" name="trio" value="<?php echo $tr['id_trio']; ?>">
      </td>
    </tr>
    <tr>
      <td valign="top">Foto: <?php echo $tr['foto'];?><br />
        <input type="hidden" name="nomefoto" value="<?php echo $tr['foto']; ?>">
        <label for='uploadBtn' class="uploadBtn">Selecionar Foto</label>
        <input type="file" name="foto" class="foto_recado_file" id="uploadBtn" >
        <input id="uploadFile" disabled="disabled" class="uploadfile contato" style="width: 80%;"/>
        <br />
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle" colspan="2">
      	<input type="submit" class="button" value="Alterar" >
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>

</div>
<?php
  }
?>
<script type="text/javascript">
  document.getElementById("uploadBtn").onchange = function () {
      document.getElementById("uploadFile").value = this.value;
  };
</script>
</body>
</html>

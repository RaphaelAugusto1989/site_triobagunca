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

  $cod = $_GET['id'];
	
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
  //RECEBE DADOS DO FORMULARIO
  $id_trio = test_input($_POST["trio"]);
  $nome_parceiro = test_input($_POST["nome"]);
  $idade_parceiro = test_input($_POST["idade"]);
  $funcao_parceiro = test_input($_POST["funcao"]);
  $alem_parceiro = test_input($_POST["alem"]);
  $facebook = test_input($_POST["facebook"]);
  $nomefoto = test_input($_POST["foto"]);
			
  // imagem 1
if($arquivo1["name"] != "")
        {
  $nome_dia1="$nomefoto.";
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
    'rede_social' => $facebook
  );
  
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
  $letrio = DBRead ("trio", "WHERE id_trio = '$cod'", "id_trio, nome, idade, funcao, alem, rede_social");

    foreach ($letrio as $tr){
	$date = new DateTime($tr['idade']);
	$nascimento = $date->format('d/m/Y');
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
  <tr>
      <td height="67" align="CENTER">ALTERAR PARCEIRO</td>

    </tr
    ><tr>
      <td width="133">Nome:
        <input type="hidden" name="trio" value="<?php echo $tr['id_trio']; ?>">
      	<input type="text" name="nome" class="contato" style="width: 98%;" value="<?php echo $tr['nome'];?>">
      </td>
    </tr>
    <tr>
    	<td height="46">Data de Nascimento:<br />
        <input type="date" name="idade" class="contato" style="width: 30%;" value="<?php echo $tr['idade'];?>">
        </td>
    </tr>
    <tr>
    	<td height="46">Função no Trio Bangunça:
      	<input type="text" name="funcao" class="contato" style="width: 98%;" value="<?php echo $tr['funcao'];?>">
      </td>
    </tr>
    <tr>
    	<td height="46">Além do Trio Bagunça é:
      	<input type="text" name="alem" class="contato" style="width: 98%;" value="<?php echo $tr['alem'];?>">
      </td>
    </tr>
    <tr>
    	<td height="46">Facebook:
      	<input type="text" name="facebook" class="contato" style="width: 98%;" value="<?php echo $tr['rede_social'];?>">
      </td>
    </tr>
    <tr>
      <td height="46">
      <a href="alterar_foto_trio.php?id=<?php echo $tr['id_trio'];?>">Alterar Foto</a>
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

</div>
<?php
  }
  ?>
</body>
</html>

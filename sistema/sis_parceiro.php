<?php
	session_start();
	require "sessao_time.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/style.css" type="text/css" rel="stylesheet">
	<style>
		body {
			background-color: transparent;
		}
	</style>
	<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
			setTimeout(function(){
				$("#divCarregando").fadeOut("slow");		
			})
		});
	</script>
</head>
<body>
<div id="container">
<center>
<?php
	require '../processos/config.php';
  	require '../processos/connection.php';
  	require '../processos/database.php';

	date_default_timezone_set('America/Sao_Paulo');

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		//RECEBE DADOS DO FORMULARIO

		$titulo = $_POST["titulo"];
		$img = $_FILES["img"];

		if ($_POST["url"] == "") {
			$url = "#";
		} else {
			$url = $_POST["url"];
		}
		 

		$diretorio = '../img/parceiros_vips/';
			if(!is_dir($diretorio)){
			   mkdir($diretorio);
			}

		if($img["name"] != "") {
			  $nome="parceiro".date("dmYhis")."."; 
			  $aux = explode(".",$img["name"]   );
			  $i=0;
			  $ext="";
			  while($aux[$i] != "") {
			         $ext=$aux[$i];
			         $i++;
			  }

			  $NomeImg = "$nome$ext";

			  $destino = "$diretorio/$NomeImg";
			  //echo $destino;

			  move_uploaded_file($img[tmp_name], $destino) or die("Erro na cópia da banner $img[name]! verifique a permissão do seu diretório!");
			  //@copy("$banner[tmp_name]","$destino") or die("Erro na cópia da banner $banner[name]! verifique a permissão do seu diretório!");
		} 

		$array = array (
			'titulo_parceiro' => $titulo,
			'img_parceiro' => $NomeImg,
			'url_parceiro' => $url
		);

		$grava = DBCreate('parceiros', $array);

		if ($grava) {
			echo "<script> alert('PARCEIRO CADASTRADO COM SUCESSO!') </script>";
			echo "<script>location.href=('sis_parceiro.php')</script>";
		} else { 
			echo "Erro ao cadastrar banner, tente novamente mais tarde!";
			exit;
		}

	}//FIM IF REQUEST_METHOD

	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}

?>
<div id="divCarregando">
	<img src="../img/loading.gif"/>
	<p>Carregando...</p>
</div>
<form action="<?php echo htmlspecialchars($_SERVER[$PHP_SELF]); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table width="80%" border="0" cellspacing="3" cellpadding="0" class="sistable">
		<tbody>
			<tr>
				<td align="center">
					<h3>CADASTRAR PARCEIRO</h3>
				</td>
			</tr>
			<tr>
				<td>
					<label for="titulo">Nome:</label>
					<br />
					<input type="text" name="titulo" class="contato" style="width: 98%;">
				</td>
			</tr>
			<tr>
				<td>
				<label for="file" style="margin-botton: 10px"><p>Imagem:</p></label><br />
				<label for='uploadBtn' class="uploadBtn">Selecionar Foto</label>
					<input type="file" name="img" class="foto_recado_file" id="uploadBtn" >
					<input id="uploadFile" disabled="disabled" class="uploadfile contato" style="width: 80%;"/> 
					<p style="font-size: 12px; margin-top: 20px">*Tamanho recomendavel para o banner: 1286x300</p>
				</td>
			</tr>
			<tr>
				<td>
				<label for="url">Link Parceiro:</label>
				<br />
				<input type="text" name="url" class="contato" style="width: 98%;">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" class="button" value="Cadastrar" >
				</td>
			</tr>
		</tbody>
	</table>
</form>
</center>
</div>
<script type="text/javascript">
    document.getElementById("uploadBtn").onchange = function () {
        document.getElementById("uploadFile").value = this.value;
    };
</script>
</body>
</html>
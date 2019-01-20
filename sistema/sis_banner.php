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
	<script type="text/javascript" src="./../js/jquery-1.11.3.min.js"></script>
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
		$banner = $_FILES["banner"];
		$url = $_POST["url"];

		$diretorio = '../img/banners/';
			if(!is_dir($diretorio)){
			   mkdir($diretorio);
			}

		if($banner["name"] != "") {
			  $nome="banner".date("dmYhis")."."; 
			  $aux = explode(".",$banner["name"]   );
			  $i=0;
			  $ext="";
			  while($aux[$i] != "") {
			         $ext=$aux[$i];
			         $i++;
			  }

			  $NomeBanner = "$nome$ext";

			  $destino="$diretorio/$NomeBanner";
			  //echo $destino;

			  move_uploaded_file($banner[tmp_name], $destino) or die("Erro na cópia da banner $banner[name]! verifique a permissão do seu diretório!");
			  //@copy("$banner[tmp_name]","$destino") or die("Erro na cópia da banner $banner[name]! verifique a permissão do seu diretório!");
		} 

		$array = array (
			'titulo_banner' => $titulo,
			'img_banner' => $NomeBanner,
			'url_banner' => $url
		);

		$grava = DBCreate('banners', $array);

		if ($grava) {
			echo "<script> alert('BANNER INSERIDO COM SUCESSO!') </script>";
			echo "<script>location.href=('sis_banner.php')</script>";
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
	<img src="../img/load.gif"/>
	<p>Carregando...</p>
</div>
<form action="<?php echo htmlspecialchars($_SERVER[$PHP_SELF]); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table width="80%" border="0" cellspacing="3" cellpadding="0" class="sistable">
		<tbody>
			<tr>
				<td align="center">
					<h3>INSERIR BANNER</h3>
				</td>
			</tr>
			<tr>
				<td>
					<label for="titulo">Título:</label>
					<br />
					<input type="text" name="titulo" class="contato" style="width: 98%;"</label>
				</td>
			</tr>
			<tr>
				<td>
				<label for="file">Banner:</label>
				<br />
				<input type="file" name="banner" style="width: 99%;">
				<span style="font-size: 12px;">*Tamanho recomendavel para o banner: 1286x300</span>
				</td>
			</tr>
			<tr>
				<td>
				<label for="url">URL:</label>
				<br />
				<input type="text" name="url" class="contato" style="width: 98%;">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" class="button" value="Inserir" >
				</td>
			</tr>
		</tbody>
	</table>
</form>
</center>
</div>
</body>
</html>
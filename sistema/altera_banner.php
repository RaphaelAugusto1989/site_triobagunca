<?php
	session_start();
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
<?php
	require '../processos/config.php';
  	require '../processos/connection.php';
  	require '../processos/database.php';

	$id = $_GET['id'];

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
			  $nome="$banner"; 
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
			  @copy("$banner[tmp_name]","$destino") or die("Erro na cópia da banner $banner[name]! verifique a permissão do seu diretório!");
		} 

		$array = array (
			'titulo_banner' => $titulo,
			'img_banner' => $NomeBanner,
			'url_banner' => $url
		);

		$altera = DBUpDate('banners', $array, "id_banner = '$id'");

		if ($altera) {
			echo "<script> alert('BANNER ALTERADO COM SUCESSO!') </script>";
			echo "<script>location.href=('visualizar_banner.php')</script>";
		} else { 
			echo "Erro ao cadastrar usuário, tente novamente mais tarde!";
			exit;
		}

	}//FIM IF REQUEST_METHOD

	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}

	$LeBanner = DBRead('banners', "WHERE id_banner = '$id'", '*');

		foreach ($LeBanner as $bn) {

?>
<div id="divCarregando">
	<img src="../img/load.gif"/>
	<p>Carregando...</p>
</div>
<form action="<?php echo htmlspecialchars($_SERVER[$PHP_SELF]); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
	<table id="tabela">
		<tbody>
			<tr>
				<td align="center">
					<h3>ALTERA BANNER</h3>
				</td>
			</tr>
			<tr>
				<td>
					<label for="titulo">Título:</label>
					<br />
					<input type="text" name="titulo" class="text" value="<?php echo $bn['titulo_banner'];?>"></label>
				</td>
			</tr>
			<tr>
				<td>
				<label for="file">Banner:</label>
				<br />
				<img src="../img/banners/<?php echo $bn['img_banner'];?>" width="40%;">
				<input type="file" name="banner" class="file" value="<?php echo $bn['img_banner'];?>">
				<span class="obs">*Tamanho recomendavel para o banner: 1286x300</span>
				</td>
			</tr>
			<tr>
				<td>
				<label for="url">URL:</label>
				<br />
				<input type="text" name="url" class="text" value="<?php echo $bn['url_banner'];?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" value="Altera" class="botton">
				</td>
			</tr>
		</tbody>
	</table>

	<?php
		}
	?>
</form>
</body>
</html>
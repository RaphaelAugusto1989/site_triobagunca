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
<div id="divCarregando">
	<img src="../img/load.gif"/>
	<p>Carregando...</p>
</div>
<table cellpadding="1" class="sistable">
	<thead>
		<tr>
			<th align="center" colspan="5">
				<h3>BANNERS</h3>
			</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td width="15%" align="center" class="titulo_table"><strong>Banner</strong></td>
			<td width="39%" align="center" class="titulo_table"><strong>Titulo</strong></td>
			<td width="31%" align="center" class="titulo_table"><strong>URL</strong></td>
			<td width="8%" align="center" class="titulo_table"><strong>Alterar</strong></td>
			<td width="7%" align="center" class="titulo_table"><strong>Excluir</strong></td>
		</tr>
		<?php
			require '../processos/config.php';
  			require '../processos/connection.php';
  			require '../processos/database.php';

			$LeBanner = DBRead('banners');

			foreach ($LeBanner as $bn) {

		?>
		<tr bgcolor="#D5D5D5">
			<td class="td" >
				<img src="../img/banners/<?php echo $bn['img_banner'];?>" width="100%;">
			</td>
			<td class="td">
				<?php echo $bn['titulo_banner'];?>
			</td>
			<td class="td">
				<?php echo $bn['url_banner'];?>
			</td>
			<td class="td" align="center">
				<a href="altera_banner.php?id=<?php echo $bn['id_banner'];?>"  title="Alterar"><img src="../img/icon_alterar.png" title="Alterar" width="40%;"></a>
			</td>
			<td class="td" align="center">
				<a href="javascript:aviso('<?=$bn['id_banner'];?>');"  title="Excluir">
					<img src="../img/icon_delet.png" title="Excluir" width="40%;">
				</a>
			</td>
		</tr>
		<?php
			}
		?>
	</tbody>
</table>
		<script language= 'javascript'>
			function aviso(id) {
			  if (confirm ("Deseja realmente excluir o banner?")) {
			  		window.location.href = "../processos/bd_delet_banner.php?id="+id;
			  }
			  else {
			    location.href=('visualizar_banner.php')
			  }
			}
		</script>
</div>
</body>
</html>
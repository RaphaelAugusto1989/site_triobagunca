<?php
	session_start();
	require 'config.php';
  	require 'connection.php';
  	require 'database.php';
	
	$cod = $_GET['id'];

			$LeBanner = DBRead('banners', "WHERE id_banner = '$cod'", '*');

				foreach ($LeBanner as $bn) {
					$NomeBanner = $bn['img_banner'];
				}

				echo unlink("../../img/banners/$NomeBanner");

			$excluir = DBExcluir('banners', 'id_banner = "'.$cod.'"');

				if ($excluir == true) {
					echo "<script> alert ('BANNER EXCLUIDO COM SUCESSO!') </script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
				else {
					echo "<script> alert ('PROBLEMA AO EXCLUIR BANNER, TENTE NOVAMENTE!')</script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
	
?>
<?php
	session_start();
	require 'config.php';
  	require 'connection.php';
  	require 'database.php';
	
	$cod = $_GET['id'];
	

			$excluir = DBExcluir('recados', 'id_recado = "'.$cod .'"');
				if ($excluir == true) {
					echo "<script> alert ('DESCARTADO COM SUCESSO!') </script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
				else {
					echo "<script> alert ('PROBLEMA AO EXCLUIR USUÁRIO, TENTE NOVAMENTE!')</script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
	
?>
<?php
	session_start();
	require 'config.php';
  	require 'connection.php';
  	require 'database.php';
	
	$cod = $_GET['id'];
	
			$excluir = DBExcluir('servicos', 'id_servico = "'.$cod .'"');
				if ($excluir == true) {
					echo "<script> alert ('SERVIÇO EXCLUIDO COM SUCESSO!') </script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
				else {
					echo "<script> alert ('PROBLEMA AO EXCLUIR SERVIÇO, TENTE NOVAMENTE!')</script>";
					echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
				}
	
?>
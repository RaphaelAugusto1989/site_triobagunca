<?php
	session_start();
	require 'config.php';
  	require 'connection.php';
  	require 'database.php';
	
	$cod = $_GET['id'];

	//ALTERA NÚMERO DE INSCRITOS NO EVENTO
	$criancaEvento = DBRead ("crianca_evento", "WHERE id_crianca = '$cod'", "*");
		foreach ($criancaEvento as $ce) {
			$evento = DBRead ("agenda", "WHERE id_agenda = '".$ce['id_evento']."'", "*");
			foreach($evento as $ev) {
				$subInscritos = $ev['inscritos'] - 1;

				$subtrair = array (
					'inscritos' => $subInscritos
				);
				
				$save = DBUpDate('agenda', $subtrair, 'id_agenda = "'.$ce['id_evento'].'"');
			}
		} //TERMINA ALTERAÇÃO DO NÚMERO DE INSCRITOS

	$excluir = DBExcluir('crianca_evento', 'id_crianca = "'.$cod.'"');

		if ($excluir == true) {
			echo "<script> alert ('CRIANÇA EXCLUIDA DO EVENTO COM SUCESSO!') </script>";
			echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
		}
		else {
			echo "<script> alert ('PROBLEMA AO EXCLUIR CURSO, TENTE NOVAMENTE!')</script>";
			echo "<script> location.href=('javascript:window.history.go(-1)')</script>";
		}
	
?>
<?php
date_default_timezone_set('America/Sao_Paulo');

require 'config.php';
require 'connection.php';
require 'database.php';

$idcrianca = $_POST['id_crianca']; 
$idEvento = $_POST['remanejamento'];

$evento = DBRead ("agenda", "WHERE id_agenda = '$idEvento'", "*");

foreach($evento as $ev) {

    if ($ev['inscritos'] >= $ev['qtd']) {
        echo "<script> alert('EVENTO LOTADO, FAVOR REMANEJAR PARA OUTRO EVENTO!') </script>";
        echo "<script>location.href=('javascript:window.history.go(-1)')</script>";
    } else {
        //ALTERA NÚMERO DE INSCRITOS NO EVENTO
        $criancaEvento = DBRead ("crianca_evento", "WHERE id_crianca = '$idcrianca'", "*");
        foreach ($criancaEvento as $ce) {
            $eventoAnterior = DBRead ("agenda", "WHERE id_agenda = '".$ce['id_evento']."'", "*");
            foreach($eventoAnterior as $eva) {
                $subInscritos = $eva['inscritos'] - 1;

                $subtrair = array (
                    'inscritos' => $subInscritos
                );
                $save = DBUpDate('agenda', $subtrair, 'id_agenda = "'.$eva['id_evento'].'"');
            }
        } //TERMINA ALTERAÇÃO DO NÚMERO DE INSCRITOS

        $remanejamento = array (
            'id_evento' => $idEvento
        );

        $save = DBUpDate('crianca_evento', $remanejamento, 'id_crianca = "'.$idcrianca.'"');

        if ($save) {
            echo "<script> alert('Criança remanejada com sucesso!') </script>";
            echo "<script>location.href=('javascript:window.history.go(-1)')</script>";
        } else { 
            echo "<script> alert('Problema ao remanejar, favor entrar em contato com o responsavel do site!') </script>";
            echo "<script>location.href=('javascript:window.history.go(-1)')</script>";
        }
    } //FIM IF 
} //FIM FOREACH

?>
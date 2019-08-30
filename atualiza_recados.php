<?php

require 'processos/config.php';
require 'processos/connection.php';
require 'processos/database.php';

$sql = DBRead ("recados", "ORDER BY id_recado DESC");

//echo '<pre>';
//print_r($sql); exit;

foreach ($sql as $s) {
    $recado = str_replace("Recado:", "", $s['recado']);

    echo '<b> Antes</b><br />';
    echo $s['id_recado'].'<br />';
    echo $s['recado'].'<br /><br />';

    echo '<b>Depois</b><br />';
    echo $recado.'<br />';

    $uprecado = array (
        'recado' => $recado
    );

    $altera = DBUpDate('recados', $uprecado, "id_recado = '".$s['id_recado']."'");

    if ($altera == true) {
        echo "<span style='color: green;'>ALTERADO COM SUCESSO! <br /></span>";
    } else {
        echo "<span style='color: red;'> ERRO AO ALTERAR, VERIFIQUE ESSA PORRA DIREITO! <br /></span>";
    }
    echo '<hr>';
}

//while ()

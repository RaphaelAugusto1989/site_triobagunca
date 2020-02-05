<?php
    session_start();
    require "sessao_time.php"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link  type="text/css" href="../css/style.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/mask.js" charset="utf-8"></script>

<script type="text/javascript">
    function formatar(mascara, documento) {
        var i = documento.value.length;
        var saida = mascara.substring(0, 1);
        var texto = mascara.substring(i);
            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }
    }

</script>
<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container">
<ul class="print">
    <li>
        <a href="#" onclick="window.print()">
            <i class="fa fa-print" aria-hidden="true"></i> imprimir
        </a>
    </li>
</ul>
<?php
date_default_timezone_set('America/Sao_Paulo');

require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';

$cod = $_GET['id'];

//LÊ DADOS DO BANCO
$le_agenda = DBRead ("agenda", "WHERE id_agenda = '$cod'", "*");

    foreach ($le_agenda as $rd) {
?>
<table style="margin-bottom: 50px;">
    <thead>
        <tr >
            <td width="auto"><b>Evento:</b></td>
            <td width="80%" colspan="5"><?php echo $rd['evento']; ?></td>
        </tr>
        <tr>
            <td width="auto"><b>Data:</b></td>
            <td width="40%">
                <?php
                    $date = explode('-', $rd['data_inicio']);
                    echo $data = $date[2].'/'.$date[1].'/'.$date[0];
                  
                    if($rd['data_final'] != '0000-00-00') {
                        $datef = explode('-', $rd['data_final']);
                        echo ' à '.$dataFinal = $datef[2].'/'.$datef[1].'/'.$datef[0];
                    }
                ?>
            </td>
            <td width="auto"><b>Início:</b></td>
            <td width="30%"><?php echo $rd['hora_inicio']; ?></td>
            <td width="auto"><b>Fim:</b></td>
            <td width="30%"><?php echo $rd['hora_termino']; ?></td>
        </tr>
    </thead>
</table>
<table class="table_lista">
    <thead>
        <tr>
            <th align="left"></th>
            <th width="32%" align="left">Nome da Criança</th>
            <th width="35%" align="left">Responsável</th>
            <th width="15%" align="center">Idade</th>
            <th width="13%" align="center">Excluir</th>
            <th width="13%" align="center">Remanejar</th>
        </tr>
    </thead>
    <tbody>
<?php
    }//FIM FOREACH AGENDA
    $le_lista = DBRead ("crianca_evento", "WHERE id_evento = '$cod' ORDER BY nome_crianca ASC", "*");
   
    if (empty($le_lista)) {
        echo "<tr>";
           echo "<td colspan='4' align='center'>NENHUMA CRIANÇA CADASTRADA PARA ESTE EVENTO!</td>";
        echo "</tr>";
        exit;
    } 
    
    $n_linha = 1;

    foreach($le_lista as $li) {
        $idcli = $li['id_cliente'];
        $nascimento = $li['nascimento'];
        $dataHoje = date('Y-m-d');
        $idade = $dataHoje - $nascimento;

        $le_cliente = DBRead ("clientes", "WHERE id_cli = '$idcli'", "*");

        foreach ($le_cliente as $cli) {
            //for ($i = 1; $i <= count($le_lista); $i++) {
?>
    <tr>
        <td align="center"><?php echo $n_linha ?></td>
        <td><?php echo $li['nome_crianca']?></td>
        <td> <?php echo $cli['nome_cli']?></td>
        <td align="center"> <?php echo $idade; ?></td>
        <td align="center"> 
            <a href="../processos/bd_delet_crianca_evento.php?id=<?php echo $li['id_crianca'];?>">
              <i class="fa fa-trash fa-2x" aria-hidden="true" title="Exluir" style="color: #EE0000; font-size: 25px;"></i>
          </a>
        </td>
        <td align="center"> 
            <form action="../processos/remaneja_crianca_evento.php" method="post">
                <input type="hidden" name="id_crianca" value="<?= $li['id_crianca'];?>">
                <select name="remanejamento" style="width: 55px;">
                    <?php
                        $ev = DBRead ("agenda", "WHERE local = 'Espaço Bagunça'", "*");
                        foreach ($ev as $v) {
                            echo '<option value="'.$v["id_agenda"].'" style="padding: 5px;">'.$v["hora_inicio"].' - '.$v["evento"].'</option>';
                        }
                    ?>
                </select>
                <input type="submit" value="ok">
            </form>
        </td>
    </tr>
    <tr>
        <td></td>
        <td colspan="4" style="font-size:12px; color: #8B0000;">
            <?php 
                if ($li['nome_crianca'] == "S") { echo "*Criança com Transtorno do Espectro Autista! <br />";}
                if ($li['restricao_alimentar'] == "S") { echo "*Criança com restrição alimentar a ".$li['tipo_restricao']; }
            ?>
        </td>
    </tr>
    <span style="width:100%; border-bottom: 1px solid #080077;"></span>
<?php
    $n_linha++;
           // }
        }//FIM FOREACH CLIENTE
    }//FIM FOREACH LISTA
?>
    </tbody>
</table>
</form>
</div>
</body>
</html>
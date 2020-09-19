<?php
require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';

$date = explode('/', test_input($_POST["nascimento"])); ;

$idEvent = $_POST['idevento'];
$idCliente = $_POST['idcliente'];
$nome_crianca = $_POST['crianca'];
$nascimento = $date[2].'-'.$date[1].'-'.$date[0]; 
$tea = $_POST['tea'];
$restricao = $_POST['alimentar'];
$tipoRestricao = $_POST['tipo'];

$qtd_crianca = count($nome_crianca);
$i = $qtd_crianca;
//LÊ DADOS DO BANCO AGENDA
$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

//LÊ DADOS DO BANCO CLIENTE
$cliente = DBRead ("clientes", "WHERE id_cli = '$idCliente'", "*");

foreach ($agenda as $ag) {
	$valorTotal = $ag['valor'] * $qtd_crianca; 
	//$valorTotalConvertido = number_format($valorTotal, 2, ',', '.');

    foreach($nome_crianca as $indice => $c) {
		$criancas = array (
				'id_cliente' => $idCliente,
				'id_evento' => $idEvent,
				'nome_crianca' => $c,
                'nascimento' => $nascimento[$indice],
                'tea' => $tea[$indice],
                'restricao_alimentar' => $restricao[$indice],
                'tipo_restricao' => $tipoRestricao[$indice]
		);
		
        $addCrianca = DBCreate ("crianca_evento", $criancas);
    }
        if ($addCrianca) {
            echo "<script>alert('Compra efetuada com sucesso! Aguarde a confirmação por E-mail!')</script>";
            echo "<script>location.href=('index')</script>";
        }
}
	

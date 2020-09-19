<?php
require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';

$idEvent = $_POST['idevento'];
$idCliente = $_POST['idcliente'];
$nome_crianca = $_POST['crianca'];
$aniversario = $_POST['nascimento'];
$tea = $_POST['tea'];
$restricao = $_POST['alimentar'];
$tipoRestricao = $_POST['tipo'];

$qtd_crianca = count($nome_crianca);
$i = $qtd_crianca;
//LÊ DADOS DO BANCO AGENDA
$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

//echo "<pre>";
//print_r ($agenda); exit;

//LÊ DADOS DO BANCO CLIENTE
$cliente = DBRead ("clientes", "WHERE id_cli = '$idCliente'", "*");

foreach ($agenda as $ag) {
	$valorTotal = $ag['valor'] * $qtd_crianca; 
    $qtd_vagas = $ag['inscritos'] + $qtd_crianca;

    foreach($nome_crianca as $indice => $c) {
        $date = explode('/', $aniversario[$indice]);
        $nascimento = $date[2].'-'.$date[1].'-'.$date[0];

		$criancas = array (
				'id_cliente' => $idCliente,
				'id_evento' => $idEvent,
				'nome_crianca' => $c,
                'nascimento' => $nascimento,
                'tea' => $tea[$indice],
                'restricao_alimentar' => $restricao[$indice],
                'tipo_restricao' => $tipoRestricao[$indice]
		);
		
        $addCrianca = DBCreate ("crianca_evento", $criancas);
    }
        if ($addCrianca) {
            echo "<script>alert('Pronto! Compra realizada com sucesso! Agora você receberá um e-mail com a confirmação do evento! (Aguarde alguns minutos para o recebimento do e-mail, 
            caso não receba em alguns minutos, verifique sua pasta de spam ou lixo eletronico!) Obrigado!')</script>";
            echo "<script>location.href=('index')</script>";

            $vagasRestantes = array ('inscritos' => $qtd_vagas);
            $altera = DBUpDate('agenda', $vagasRestantes, "id_agenda = '".$idEvent."'");
        }
}
	

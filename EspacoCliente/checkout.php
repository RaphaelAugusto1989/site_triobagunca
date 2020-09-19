<?php
header("access-control-allow-origin: https://pagseguro.uol.com.br");
header("Content-Type: text/html; charset=UTF-8",true);
date_default_timezone_set('America/Sao_Paulo');

require_once("PagSeguro.class.php");
$PagSeguro = new PagSeguro();

require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';

$idEvent = $_POST['idevento'];
$idCliente = $_POST['idcliente'];
$nome_crianca = $_POST['crianca'];
$idade_crianca = $_POST['idade'];

$qtd_crianca = count($nome_crianca);
$i = $qtd_crianca;
//LÊ DADOS DO BANCO AGENDA
$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

//LÊ DADOS DO BANCO CLIENTE
$cliente = DBRead ("clientes", "WHERE id_cli = '$idCliente'", "*");

foreach ($agenda as $ag) {
	$valorTotal = $ag['valor'] * $qtd_crianca; 
	$valorTotalConvertido = number_format($valorTotal, 2, ',', '.');

	foreach ($cliente as $cli) {
		//EFETUAR PAGAMENTO	
		$venda = array(	"codigo"=>"1",
						"valor"=> $valorTotalConvertido,
						"descricao"=> $ag['evento'],
						"nome"=> $cli['nome_cli'],
						"email"=> $cli['email_cli'],
						"telefone"=> $cli['cel_cli'],
						"rua"=> $cli['rua_cli'],
						"numero"=> $cli['num_cli'],
						"bairro"=> $cli['bairro_cli'],
						"cidade"=> $cli['cidade_cli'],
						"estado"=> $cli['estado_cli'], //2 LETRAS MAIÚSCULAS
						"cep"=> $cli['cep_cli'],
						"codigo_pagseguro"=>"");
	}

}
if ($venda) {
	foreach($nome_crianca as $indice => $c) {
		$criancas = array (
				'id_cliente' => $idCliente,
				'id_evento' => $idEvent,
				'nome_crianca' => $c,
				'idade_crianca' => $idade_crianca[$indice]
		);
		
		$addCrianca = DBCreate ("crianca_evento", $criancas);
	}
}

$PagSeguro->executeCheckout($venda,"http://triobagunca.com.br/EspacoCliente/pedido.php?=codigo".$_GET['codigo']);

//----------------------------------------------------------------------------


//RECEBER RETORNO
if( isset($_GET['transaction_id']) ){
	$pagamento = $PagSeguro->getStatusByReference($_GET['codigo']);
	
	$pagamento->codigo_pagseguro = $_GET['transaction_id'];
	if($pagamento->status==3 || $pagamento->status==4){
		//ATUALIZAR DADOS DA VENDA, COMO DATA DO PAGAMENTO E STATUS DO PAGAMENTO
		$statusCompra = array (
			'id_evento' => $idEvent,
			'id_cliente' => $idCliente,
			'id_transacao' => $_GET['transaction_id'],
			'status' => $pagamento->status
		);
	
		$status = DBCreate ("ingressos", $statusCompra);
		
	}else{
		$statusCompra = array (
			'id_evento' => $idEvent,
			'id_cliente' => $idCliente,
			'id_transacao' => $_GET['transaction_id'],
			'status' => $pagamento->status
		);
	
		$status = DBCreate ("ingressos", $statusCompra);
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
require 'processos/config.php';
require 'processos/connection.php';
require 'processos/database.php';


  $numreg = 100; // Quantos registros por página vai ser mostrado
  if (!isset($pg)) {
      $pg = 0;
  }
  $inicial = $_GET['pg'] * $numreg; 

   //LÊ DADOS DO BANCO
	$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Personagem Vivo' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");
  
  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
  $sql = DBRead ("servicos");

  // Quantidade de registros pra paginação
  $quant = count($sql);
 // var_dump($lojas);
  foreach ($lojas as $lj) {
  	//echo $lj['nome_servico'];
  	$palavra = $lj['nome_servico'];

	$prisn = substr($palavra, 0, 1);

	echo $prisn."<br />";
}
?>
</body>
</html>
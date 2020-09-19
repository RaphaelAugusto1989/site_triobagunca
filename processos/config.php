<?php
	if ($_SERVER['HTTP_HOST'] == 'localhost') {
		//CONEXÃO COM O BANCO LOCAL
		define ('DB_HOSTNAME','localhost'); //NOME DO SERVIDOR
		define ('DB_USERNAME','root'); //USUARIO DO BANCO DE DADOS
		define ('DB_PASSWORD', ''); //SENHA DO BD "SENHA EM BRANCO É NULL"
		define ('DB_DATABASE','triob261_dev'); //NOME DO BANCO DE DADOS
		define ('DB_CHARSET','utf8'); //CODIFICAÇÃO DE CARACTERES DO BD
	} else if ($_SERVER['HTTP_HOST'] == 'dev.triobagunca.com.br') {
		//CONEXÃO COM O BANCO DE PRODUÇÃO
		define ('DB_HOSTNAME','localhost'); //NOME DO SERVIDOR
		define ('DB_USERNAME','triob261_admin'); //USUARIO DO BANCO DE DADOS
		define ('DB_PASSWORD', '002128'); //SENHA DO BD "SENHA EM BRANCO É NULL"
		define ('DB_DATABASE','triob261_dev'); //NOME DO BANCO DE DADOS
		define ('DB_CHARSET','utf8'); //CODIFICAÇÃO DE CARACTERES DO BD
	} else {
		//CONEXÃO COM O BANCO DE PRODUÇÃO
		define ('DB_HOSTNAME','localhost'); //NOME DO SERVIDOR
		define ('DB_USERNAME','triob261_admin'); //USUARIO DO BANCO DE DADOS
		define ('DB_PASSWORD', '002128'); //SENHA DO BD "SENHA EM BRANCO É NULL"
		define ('DB_DATABASE','triob261_bd'); //NOME DO BANCO DE DADOS
		define ('DB_CHARSET','utf8'); //CODIFICAÇÃO DE CARACTERES DO BD
	}
?>

<?php

//VERIFICA DOMINIO PARA QUAL BANCO DE DADOS CONECTAR
echo dirname(__FILE__); exit;

if (dirname(__FILE__) == 'D:\xampp\htdocs\triobagunca') {
	define ('ENVIRONMENT', 'development');
}
else {
	define('ENVIRONMENT', 'production');
}
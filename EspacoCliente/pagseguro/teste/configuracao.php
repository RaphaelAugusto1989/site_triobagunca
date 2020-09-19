<?php

//Necessário testar em dominio com SSL
define("URL", "https://triobagunca.com.br/EspacoCliente/pagseguro/");
//define("URL", "https://localhost/celke/");

$sandbox = true;
if($sandbox){
    define("EMAIL_PAGSEGURO", "financeirotriobagunca@gmail.com");
    define("TOKEN_PAGSEGURO", "796A878EEA33468C92792336FD1F7912");
    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}else{
    define("EMAIL_PAGSEGURO", "financeirotriobagunca@gmail.com");
    define("TOKEN_PAGSEGURO", "8d66662b-f05c-4e79-b419-85a308bb9aeef47ebfb44a2cb9fe001be214a357187f710b-242a-4478-87d6-bc4d4784fdf0");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
}
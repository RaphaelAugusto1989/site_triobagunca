<?php
include 'configuracao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - PagSeguro</title>
    </head>
    <body>
        
        <button onclick="pagamento()">Pagar</button>
        <span class="endereco" data-endereco="<?php echo URL; ?>"></span>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo SCRIPT_PAGSEGURO; ?>"></script>
        <script src="js/personalizado.js"></script>
    </body>
</html>

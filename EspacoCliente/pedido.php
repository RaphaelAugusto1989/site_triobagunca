<?php
session_start();
include "head.php";

if(isset($_GET['transaction_id'])){
    //ESSE É O CÓDIGO DA TRANSAÇÃO NO MERCADO LIVRE
    $transaction_id = $_GET['transaction_id'];
    $pedido = null;

    if(isset($_SESSION["pedido"])){
        $_SESSION["transaction_id"] = $transaction_id;
        $pedido = $_SESSION["pedido"];
    }else{
        /*
        $sql = "SELECT * FROM pedidos WHERE transaction_id = '$transaction_id' LIMIT 1";
        $res = mysqli_query($GLOBALS["conexao"],$sql) or die(mysql_error($GLOBALS["conexao"]));
        $lin = mysqli_num_rows($res);
        if($lin == 0){
            header("location:index.php");exit;
        }else{
            $row = mysqli_fetch_object($res);
            $pedido = $row->id;
        }
        */
    }
    
    //ATUALIZA O CODIGO DE TRANSACAO
    if($pedido!=null){
        //$sql = "UPDATE pedidos SET trasaction_id =  '$transaction_id' WHERE id = '$pedido' ";
        //$res = mysqli_query($GLOBALS["conexao"], $sql) or die(mysqli_error($GLOBALS["conexao"]));
    }else{
        header("location:EspacoCliente/pedido.php");exit;
    }
}else{
    header("location:EspacoCliente/index.php");exit;
}
?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
        <div class="texto">
            <div id="titulos">
                <?php echo $rd['evento']?>
            </div>
            <p>Sua compra foi efetuada com sucesso. Estamos aguardando a confirmação do pagamento pelo PagSeguro.</p>
            <p>Assim que foi confirmado, você receberá um e-mail informando a liberação do ingresso.</p>
		</div>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
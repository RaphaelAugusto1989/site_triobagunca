<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
<?php
	require 'processos/config.php';
	require 'processos/connection.php';
  require 'processos/database.php';
    
    //RECEBE DADOS DO FORMULARIO
    $id_cli = base64_decode($_GET["doc"]);
    
    //LÊ DADOS DO BANCO DE CLIENTES
    $cliente = DBRead ('clientes', "WHERE id_cli = '$id_cli'", '*');

    foreach ($cliente as $cli) {
        $idCliente = $cli["id_cli"];
        $nomeCliente = $cli["nome_cli"];
        $emailCliente = $cli["email_cli"];
        $cpfCliente = $cli["cpf_cli"];
    } //FIM FOREACH 

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

              //RECEBE DADOS DO FORMULARIO
              $idCliente = test_input($_POST["id"]);
              $nomeCliente = test_input($_POST["nome"]);
              $emailCliente = test_input($_POST["email"]);
              $cpfCliente = test_input($_POST["cpf"]);
              $pass1 = md5(test_input($_POST["pass1"]));
              $pass2 = md5(test_input($_POST["pass2"]));

              if ($pass1 === $pass2) {
                  
                  $cliente = array (
                      'pass_cli' => $pass1
                  );

                  $save = DBUpDate('clientes', $cliente, 'id_cli = "'.$idCliente.'"');
                      
                  if ($save) {
                      echo "<script> alert('Senha alterada com sucesso!') </script>";
                      echo "<script>location.href=('LoginCliente')</script>";
                  } else { 
                      $msgError = "<p class='msgerro'>Problema ao alterar senha, favor entrar em contato com o responsavel do site!</p>";	
                  }
              } else {
                  $msgError = "<p class='msgerro'>AS SENHAS NÃO SÃO IGUAIS, TENTE NOVAMENTE!</p>";
              }   
        }// FIM IF POST

	function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
	}
?>
<center>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
<table width="300" border="0" cellspacing="0" cellpadding="0" align="center">
  <tbody>
  	<tr>
      <td height="95" colspan="2" align="center" valign="bottom">
        <img src="img/logo-trio.png" style="width: 50%;">
      	<p><b>ALTERAR SENHA</b></p>
        <?= $msgError; ?>
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
          <p>Olá <?= $nomeCliente; ?>, verifique os dados a baixo se estão corretos e altere sua senha. Obrigado!</p>
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
        <input type="hidden" name="id" value="<?= $idCliente; ?>">
        <input type="hidden" name="nome" value="<?= $nomeCliente; ?>">
      	<input type="text" name="cpf" class="contato cpf" placeholder="CPF" style="width:100%;" value="<?= $cpfCliente; ?>">
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
      	<input type="text" name="email" class="contato" placeholder="email" style="width:100%;" value="<?= $emailCliente; ?>">
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
      	<input type="password" name="pass1" class="contato" placeholder="Senha" style="width:100%;" required>
      </td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center" valign="middle">
      	<input type="password" name="pass2" class="contato" placeholder="Repita a Senha" style="width:100%;" required>
      </td>
    </tr>
    <tr>
      <td height="69" colspan="2" align="center" valign="middle">
      	<input type="submit" name="button" value="Redefinir Senha" class="button">
      </td>
    </tr>
  </tbody>
</table>
</form>
</center>
		
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
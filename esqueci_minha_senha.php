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

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		
		//RECEBE DADOS DO FORMULARIO
		$cpf = test_input($_POST["cpf"]);
		$email = test_input($_POST["email"]);

		//LÊ DADOS DO BANCO DE CLIENTES
		$cliente = DBRead ('clientes', "WHERE cpf_cli = '$cpf' AND email_cli = '$email'", '*');

			foreach ($cliente as $cli) {
				$id_cli = base64_encode($cli["id_cli"]); 
            } //FIM FOREACH 
				if ($cliente == true) {
					echo "<script>location.href=('recuperar_senha?doc=$id_cli')</script>";
				} else { 
					$msgError = "<p class='msgerro'>CPF ou E-mail não conferem com o cadastrado!</p>";	
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
      	<p><b>ESQUECI MINHA SENHA</b></p>
          <?= $msgError; ?>
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
      	<input type="text" name="cpf" class="contato cpf" placeholder="CPF" style="width:100%;" required>
      </td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center" valign="middle">
      	<input type="email" name="email" class="contato" placeholder="E-mail" style="width:100%;" required>
      </td>
    </tr>
    <tr>
      <td height="69" colspan="2" align="center" valign="middle">
      	<input type="submit" name="button" value="Recuperar" class="button">
      </td>
    </tr>
  </tbody>
</table>
</form>
</center>
		
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
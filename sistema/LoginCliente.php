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
		$login = test_input($_POST["login"]);
		$senha = md5(test_input($_POST["senha"]));
		//echo $_SESSION["evento"] = test_input($_GET['event']);

		if ($login == "") {
			echo "<script>	alert ('você não digitou o Usuário!')	</script>";
			echo "<script>javascript:history.back()</script>";
		}

		if ($senha == "") {
			echo "<script>	alert ('você não digitou a senha!')	</script>";
			echo "<script>javascript:history.back()</script>";
		}

		//LÊ DADOS DO BANCO DE CLIENTES
		$cliente = DBRead ('clientes', "WHERE email_cli OR login_cli = '$login' AND pass_cli = '$senha'", '*');

			foreach ($cliente as $cli) {
				$id_cli = $cli["id_cli"];
				$nome_cli = $cli["nome_cli"];
			} //FIM FOREACH

				if ($cliente == true) {
					$_SESSION["time"] = time() + (60 * 1); //1 minuto
					$_SESSION["login"] = $login;
					$_SESSION["id_cli"] = $cli["id_cli"];
					$_SESSION["nome_cli"] = $cli["nome_cli"];

					//echo "<script> var id = '.$idEvent.';</script>";
					echo "<script>location.href=('EspacoCliente')</script>";
				} else { 
					echo "<center><b style='color: #B50003; position: absolute; top: 20%; left: 43%;'>Falha na Autenticação, <br />Login ou Senha Incorretos!</b> <br /><br /><br /></center>";	
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
      <td height="95" colspan="2" align="center" valign="top">
      	<img src="img/logo-trio.png" style="width: 70%;">
      </td>
    </tr>
    <tr>
      <td height="58" colspan="2" align="center" valign="middle">
      	<input type="text" name="login" class="contato" placeholder="Login ou E-mail" style="width:100%;">
      </td>
    </tr>
    <tr>
      <td height="42" colspan="2" align="center" valign="middle">
      	<input type="password" name="senha" class="contato" placeholder="Senha" style="width:100%;">
      </td>
    </tr>
	<tr>
      <td height="69" align="center" valign="top">
			<a href="esqueci_minha_senha" class="link">Esqueci minha senha!</a>
      </td>
	  <td height="69" align="center" valign="top">
			<a href="cadastrar-me" class="link">Não Sou Cadastrado!</a>
      </td>
    </tr>
    <tr>
      <td height="69" colspan="2" align="center" valign="middle">
      	<input type="submit" name="button" value="Entrar" class="button">
      </td>
    </tr>
  </tbody>
</table>
</form>
</center>
		
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
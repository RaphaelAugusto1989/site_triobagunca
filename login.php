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

	if ($login == "") {
			echo "<script>	alert ('você não digitou o Usuário!')	</script>";
			echo "<script> location.href = ('login.php') </script>";
			exit ();
		}
		
		if ($senha == "") {
			echo "<script>	alert ('você não digitou a senha!')	</script>";
			echo "<script> location.href = ('login.php') </script>";
			exit ();
		}

	//LÊ DADOS DO BANCO
	$user = DBRead ('usuario', "WHERE email_usuario = '$login' OR login_usuario = '$login' AND senha_usuario = '$senha'", 'id_usuario, nome_usuario, login_usuario');
	
	// Quantidade de registros pra paginação
	foreach ($user as $us) {
		$nome_user = $us["nome_usuario"];
		$id_usuario = $us["id_usuario"];	
	}

	if ($user == true) {
		$_SESSION["time"] = time() + (60 * 1); //1 minuto
		$_SESSION ["login"] = $login;
		$_SESSION ["nome"] = $us["nome_usuario"];
		$_SESSION ["id_user"] = $us["id_usuario"];

		echo "<script>location.href=('sistema')</script>";
	} else { 
		$msgError = "<p class='msgerro'>Falha na Autenticação, <br />Login ou Senha Incorretos!</p>";	
	}
}
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
      <td height="95" align="center" valign="top">
	  <img src="img/logo-trio.png" style="width: 50%;">
      	<p><b>ÁREA DO COLABORADOR</b></p>
        <?= $msgError; ?>
      </td>
    </tr>
    <tr>
      <td height="58" align="center" valign="middle">
      	<input type="text" name="login" class="contato" placeholder="Login" style="width:100%;">
      </td>
    </tr>
    <tr>
      <td height="42" align="center" valign="middle">
      	<input type="password" name="senha" class="contato" placeholder="Senha" style="width:100%;">
      </td>
    </tr>
    <tr>
      <td height="69" align="center" valign="middle">
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
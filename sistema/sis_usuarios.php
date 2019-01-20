<?php
session_start();
require "sessao_time.php"; 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sem título</title>
<link href="../css/style.css" type="text/css" rel="stylesheet">
<style>
body {
	background-color: transparent;
}
</style>
</head>

<body>
<div id="container">
<?php
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $nome = test_input($_POST["nome"]);
  $email = test_input($_POST["email"]);
  $usuario = test_input($_POST["usuario"]);
  $senha = test_input($_POST["senha"]);
			
  $user = array (
    'nome_usuario' => $nome,
    'email_usuario' => $email,
	'login_usuario' => $usuario,
    'senha_usuario' => $senha
  );
  
  $grava = DBCreate('usuario', $user);
  
  
  if ($grava) {
    echo "<script> alert('Cadastrado com sucesso!') </script>";
    echo "<script>location.href=('sis_usuarios.php')</script>";
  }
  else { 
    echo "Erro ao cadastrar, tente novamente mais tarde!";
    exit;
    }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
  <tr>
      <td height="67" align="CENTER" colspan="2">INSERIR USUÁRIO</td>

    </tr
    ><tr>
      <td width="133" colspan="2">Nome:
      	<input type="text" name="nome" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
    	<td height="46" colspan="2">E-mail:
      	<input type="text" name="email" class="contato" style="width: 98%;">
      </td>
    </tr>
    <tr>
      <td>Usuário:<br />
      <input type="text" name="usuario" class="contato" style="width: 94%;">
      </td>
      <td>
      Senha:<br />
      <input type="password" name="senha" class="contato" style="width: 95%;">
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle" colspan="2">
      	<input type="submit" class="button" value="Inserir" >
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
</div>
</body>
</html>

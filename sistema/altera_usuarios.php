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

  $cod = $_GET['id'];

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $id_user = test_input($_POST["id"]);
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
  
  $altera = DBUpDate('usuario', $user, "id_usuario = '".$id_user."'");
  
  
  if ($altera) {
    echo "<script> alert('Alteração realizada com sucesso!') </script>";
    echo "<script>location.href=('visualizar_usuarios.php')</script>";
  }
  else { 
    echo "Erro ao alterar dados da loja, tente novamente mais tarde!";
    exit;
    }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  //LÊ DADOS DO BANCO
  $letrio = DBRead ("usuario", "WHERE id_usuario = '$cod'", "id_usuario, nome_usuario, email_usuario, login_usuario, senha_usuario");

    foreach ($letrio as $tr){
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="80%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
  <tr>
      <td height="67" align="CENTER" colspan="2">ALTERA USUÁRIO</td>

    </tr
    ><tr>
      <td width="133" colspan="2">Nome:
        <input type="hidden" name="id" value="<?php echo $tr['id_usuario']; ?>">
      	<input type="text" name="nome" class="contato" style="width: 98%;" value="<?php echo $tr['nome_usuario']; ?>">
      </td>
    </tr>
    <tr>
    	<td height="46" colspan="2">E-mail:
      	<input type="text" name="email" class="contato" style="width: 98%;" value="<?php echo $tr['email_usuario']; ?>">
      </td>
    </tr>
    <tr>
      <td>Usuário:<br />
      <input type="text" name="usuario" class="contato" style="width: 94%;" value="<?php echo $tr['login_usuario']; ?>">
      </td>
      <td>
      Senha:<br />
      <input type="password" name="senha" class="contato" style="width: 95%;" value="<?php echo $tr['senha_usuario']; ?>">
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle" colspan="2">
      	<input type="submit" class="button" value="Alterar" >
      </td>
    </tr>
  </tbody>
</table>
</center>
</form>
<?php
  }
?>
</div>
</body>
</html>

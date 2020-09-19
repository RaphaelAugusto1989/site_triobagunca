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
<link href="../css/jquery-ui.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="../js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.min.js"></script>
<script type="text/javascript" src="../js/mask.js" charset="utf-8"></script>
<script type="text/javascript" src="../js/jquery-ui.js"></script>

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
  $sobrenome = test_input($_POST["sobrenome"]);
  $sexo = test_input($_POST["sexo"]);
  $email = test_input($_POST["email"]);
  $cpf = test_input($_POST["cpf"]);
  $nascimento = date('Y-m-d', strtotime(test_input($_POST["nascimento"])));
  $usuario = test_input($_POST["usuario"]);
  $senha = md5(test_input($_POST["senha"]));
			
  $user = array (
    'nome_usuario' => $nome,
    'sobrenome_usuario' => $sobrenome,
    'sexo_usuario' => $sexo,
    'email_usuario' => $email,
    'cpf_usuario' => $cpf,
    'nascimento_usuario' => $nascimento,
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
    </tr>
    <tr>
      <td width="133">CPF: <br />
      	<input type="text" name="cpf" class="contato cpf" maxlength="14" style="width: 97%;" placeholder="CPF" required>
      </td>
      <td width="133">Data de Nascimento:
        <input type="text" name="nascimento" class="contato data" id="data" maxlength="10" style="width: 97%;">
      </td>
    </tr>
    <tr>
      <td width="133">Nome:
      	<input type="text" name="nome" class="contato" style="width: 97%;">
      </td>
      <td width="133">Sobrenome:
        <input type="text" name="sobrenome" class="contato" style="width: 97.5%;">
      </td>
    </tr>
    <tr>
    	<td height="46">E-mail:
      	<input type="text" name="email" class="contato" style="width: 97%;">
      </td>
      <td height="46">Sexo:
        <select name="sexo" style="width: 100%; height: 40px;" class="contato">
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Usuário:<br />
      <input type="text" name="usuario" class="contato" style="width: 97%;">
      </td>
      <td>
      Senha:<br />
      <input type="password" name="senha" class="contato" style="width: 98%;">
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
<script type="text/javascript">
    $( function() {
        $( ".data" ).datepicker({
            dateFormat : 'dd/mm/yy',
            // showOn: "button",
            // buttonImage: "img/calendar.png",
            // buttonSize: "10",
            // buttonImageOnly: true,
            // buttonText: "Select date"
            dayNames: ['Domingo','Segunda','Terça','Quarta','Quinta','Sexta','Sábado'],
            dayNamesMin: ['D','S','T','Q','Q','S','S','D'],
            dayNamesShort: ['Dom','Seg','Ter','Qua','Qui','Sex','Sáb','Dom'],
            monthNames: ['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
            monthNamesShort: ['Jan','Fev','Mar','Abr','Mai','Jun','Jul','Ago','Set','Out','Nov','Dez'],
            nextText: 'Próximo',
            prevText: 'Anterior'
        });
    } );

    $( function() {
        $( document ).tooltip();
    } );

</script>
</body>
</html>

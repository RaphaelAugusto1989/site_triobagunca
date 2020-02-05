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

$cod = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $id_user = test_input($_POST["id"]);
  $senha = md5(test_input($_POST["senha1"]));
  $senha2 = md5(test_input($_POST["senha2"]));

  if ($senha === $senha2) {
    $user = array (
      'senha_usuario' => $senha
    );
  
        $altera = DBUpDate('usuario', $user, "id_usuario = '".$id_user."'");
        
        if ($altera) {
            echo "<script> alert('Senha Alterada Sucesso!') </script>";
            echo "<script>location.href=('altera_senha_usuario.php?id=".$id_user."')</script>";
        }
        else { 
            echo "Erro ao cadastrar, tente novamente mais tarde!";
            exit;
        }
    } else {
        echo "<script> alert('Senhas não são idênticas, tente novamente!') </script>";
        echo "<script>location.href=('altera_senha_usuario.php?id=".$id_user."')</script>";
    }
}
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }

  //LÊ DADOS DO BANCO
  $letrio = DBRead ("usuario", "WHERE id_usuario = '$cod'", "*");

    foreach ($letrio as $tr) {
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
<center>
<table width="50%" border="0" cellspacing="3" cellpadding="0">
  <tbody>
    <tr>
      <td height="67" align="CENTER" colspan="2">ALTERAR SENHA</td>
    </tr>
    <tr>
      <td width="133">Nova Senha: <br />
        <input type="hidden" name="id" value="<?php echo $tr['id_usuario']; ?>">
      	<input type="password" name="senha1" class="contato" style="width: 97%;" required>
      </td>
    </tr>
    <tr>
      <td width="133">Confirme a Nova Senha:<br />
        <input type="password" name="senha2" class="contato" style="width: 97%;" required>
      </td>
    </tr>
    <tr>
      <td height="64" align="center" valign="middle" colspan="2">
      	<input type="submit" class="button" value="ALTERAR" >
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

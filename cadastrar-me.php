<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			MEU CADASTRO
		</div>

        <?php
  require '../processos/config.php';
  require '../processos/connection.php';
  require '../processos/database.php';
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $cpf	        = test_input($_POST["cpf"]);
  $nascimento 	= test_input($_POST["nascimento"]);
  $nome 	    = test_input($_POST["nome"]);
  $fixo 	    = test_input($_POST["fixo"]);
  $celular 	    = test_input($_POST["celular"]);
  $email 		= test_input($_POST["email"]);
  $cep 	        = test_input($_POST["cep"]);
  $rua	        = test_input($_POST["rua"]);
  $cidade 	    = test_input($_POST["cidade"]);
  $bairro 	    = test_input($_POST["bairro"]);
  $estado 	    = test_input($_POST["estado"]);
  $complemento 	= test_input($_POST["complemento"]);
  $login 		= test_input($_POST["login"]);
  $senha 	    = test_input($_POST["senha"]);
			
  
  $agenda = array (
    'cpf_cli' => $cpf,
    'nome_cli' => $nome,
	'nasc_cli' => $nascimento,
    'fixo_cli' => $fixo,
	'cel_cli' => $celular,
	'email_cli' => $email,
    'cep_cli' => $cep,
    'rua_cli' => $rua,
    'cidade_cli' => $cidade,
	'bairro_cli' => $bairro,
    'estado_cli' => $estado,
	'comp_cli' => $complemento,
	'login_cli' => $login,
	'pass_cli' => $senha
  );
  
	$altera = DBUpDate('agenda', $agenda, "id_agenda = '".$id."'");
  
  if ($altera) {
    echo "<script> alert('Alterado com sucesso!') </script>";
    echo "<script>location.href=('altera_agenda.php?id=$id')</script>";
  }
  else { 
    echo "Erro ao alterar, tente novamente mais tarde!";
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
  $le_agenda = DBRead ("agenda", "WHERE id_agenda = '$cod'", "*");

  foreach ($le_agenda as $tr){

?>

		<center>
			<form action="cadastro_cliente.php" method="post" autocomplete="on">
				<table border="0" align="center" width="100%"  cellpadding="0" cellspacing="0">
                  <tr height="30">
					<td align="left" colspan="2">
					 <div style="border-bottom: 1px solid #000142; width: 99.5%;"><b>Dados Pessoais</b></div>
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
						<input type="text" name="cpf" class="contato cpf" maxlength="14" style="width: 48%;" placeholder="CPF" required>
                        <input type="text" name="nascimento" class="contato data" style="width: 49%;" placeholder="Data de Nascimento" required >
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
						<input type="text" name="nome" class="contato" placeholder="Nome Completo" required >
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
                        <input type="text" name="fixo" class="contato fixo" placeholder="Telefone Fixo" style="width: 48%;">
					    <input type="text" name="celular" class="contato cel" placeholder="Celular" style="width: 49%;" required>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<input type="email" name="email" autocomplete="off" class="contato" placeholder="E-mail" required>
					</td>
				  </tr>
                  <tr height="40" valign="top">
					<td align="left" colspan="2">
					    <div style="border-bottom: 1px solid #000142; width: 99.5%; margin-top: 10px;"><b>Endereço</b></div>
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
						<input type="text" name="cep" class="contato cep" id="cep" style="width: 30%;" placeholder="CEP" onblur="pesquisacep(this.value);" required>
                        <span style="font-size:12px; font-size: 14px \9; color:#000000; text-align: left;">*Preenchimento Automatico!</span>

					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
                        <input type="text" name="rua" class="contato" id="rua" placeholder="Rua" style="width: 48%;">
					    <input type="text" name="cidade" class="contato" id="cidade" placeholder="Cidade" style="width: 49%;">
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
                        <input type="text" name="bairro" class="contato" id="bairro" placeholder="Bairro" style="width: 48%;">
					    <input type="text" name="estado" class="contato" id="estado" placeholder="Estado" maxlength="2" style="width: 49%;">
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
						<input type="text" name="complemento" class="contato" placeholder="Complemento">
					</td>
				  </tr>
                  <tr height="40" valign="top">
					<td align="left" colspan="2">
					 <div style="border-bottom: 1px solid #000142; width: 99.5%; margin-top: 10px;"><b>Login</b></div>
					</td>
				  </tr>
                  <tr>
					<td align="left" valign="top">
                        <input type="text" name="login" class="contato" placeholder="Login" style="width: 48%;">
					    <input type="pass" name="senha" class="contato" placeholder="Senha" maxlength="2" style="width: 49%;">
					</td>
                  </tr>
				  <tr>
					<td height="70" align="center" valign="middle">
					<input type="submit" name="button" class="button" value="Cadastrar" style="width: 30%;">
					</td>
				  </tr>
				</table>
			</form>
		</center>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
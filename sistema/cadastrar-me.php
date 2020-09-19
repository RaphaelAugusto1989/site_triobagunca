<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			MEU CADASTRO
		</div>

<?php
date_default_timezone_set('America/Sao_Paulo');

require 'processos/config.php';
require 'processos/connection.php';
require 'processos/database.php';
  
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  $cpf	        = test_input($_POST["cpf"]);
  $nascimento 	= date('Y-m-d', strtotime(test_input($_POST["nascimento"])));
  $nome 	    = test_input($_POST["nome"]);
  $fixo 	    = test_input($_POST["fixo"]);
  $celular 	    = test_input($_POST["celular"]);
  $email 		= test_input($_POST["email"]);
  $cep 	        = test_input($_POST["cep"]);
  $rua	        = test_input($_POST["rua"]);
  $num	        = test_input($_POST["numeero"]);
  $cidade 	    = test_input($_POST["cidade"]);
  $bairro 	    = test_input($_POST["bairro"]);
  $estado 	    = test_input($_POST["estado"]);
  $complemento 	= test_input($_POST["complemento"]);
  $login 		= test_input($_POST["login"]);
  $senha 	    = md5(test_input($_POST["senha"]));
  $CreateDate   = date('Y-m-d H:i:s');
 
  //LÊ DADOS DO BANCO
  $le_cliente = DBRead ("clientes", "WHERE cpf_cli = '$cpf' OR email_cli = '$email' OR login_cli = '$login'", "*");
	
	if ($le_cliente) {	
		foreach ($le_cliente as $cl) {
			if ($cpf == $cl['cpf_cli']) {
				echo "<script> alert('CPF já Cadastrado!') </script>";
				echo "<script>javascript:history.back()</script>";
			} if($email == $cl['email_cli']) {
				echo "<script> alert('E-mail já Cadastrado!') </script>";
				echo "<script>javascript:history.back()</script>";
			} if($login == $cl['login_cli']) {
				echo "<script> alert('Esté Login já está sendo utilizado!') </script>";
				echo "<script>javascript:history.back()</script>";
			} 
		} //FIM FOREACH
	} else {
			$cliente = array (
				'cpf_cli' => $cpf,
				'nome_cli' => $nome,
				'nasc_cli' => $nascimento,
				'fixo_cli' => $fixo,
				'cel_cli' => $celular,
				'email_cli' => $email,
				'cep_cli' => $cep,
				'rua_cli' => $rua,
				'num_cli' => $num,
				'cidade_cli' => $cidade,
				'bairro_cli' => $bairro,
				'estado_cli' => $estado,
				'comp_cli' => $complemento,
				'login_cli' => $login,
				'pass_cli' => $senha,
				'create_datetime' => $CreateDate
			);

			//echo ' <pre>';
			//print_r($cliente);
			//exit;
			
			$save = DBCreate('clientes', $cliente);
			
			if ($save) {
				echo "<script> alert('Você foi cadastrado com sucesso!') </script>";
				echo "<script>location.href=('LoginCliente')</script>";
			} else { 
				echo "Erro ao se cadastrar, tente novamente mais tarde!";
				exit;
			}
	} //FIM ELSE
}//FIM IF POST

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
		<center>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
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
						<input type="text" name="nome" class="contato" placeholder="Nome Completo do Responsável" required >
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
					<input type="text" name="email" class="contato" placeholder="E-mail" required>
					</td>
				  </tr>
				  <tr height="30">
					<td align="left" colspan="2">
					 <div style="border-bottom: 1px solid #000142; width: 99.5%;"><b>Dados dos Pais</b></div>
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
						<input type="text" name="mae" class="contato" placeholder="Nome Completo da Mãe" required >
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
						<input type="text" name="pai" class="contato" placeholder="Nome Completo do Pai">
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
                        <input type="text" name="rua" class="contato" id="rua" placeholder="Rua" style="width: 38%;">
						<input type="text" name="numero" class="contato" id="num" placeholder="Nº" style="width: 8.5%;">
					    <input type="text" name="cidade" class="contato" id="cidade" placeholder="Cidade" style="width: 48.7%;">
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
                        <input type="text" name="login" class="contato" placeholder="Login" style="width: 48%;" required>
					    <input type="password" name="senha" class="contato" placeholder="Senha" style="width: 49%;" required>
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
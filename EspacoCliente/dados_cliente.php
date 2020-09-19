<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			MEU DADOS
		</div>

<?php
date_default_timezone_set('America/Sao_Paulo');

$idCliente = $_SESSION["id_cli"];

require '../processos/config.php';
require '../processos/connection.php';
require '../processos/database.php';
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    //RECEBE DADOS DO FORMULARIO
    $cpf	        = test_input($_POST["cpf"]);
    $nascimento 	= date('Y-m-d', strtotime(test_input($_POST["nascimento"])));
    $nome 	      = test_input($_POST["nome"]);
    $parentesco   = test_input($_POST["parentesco"]);
    $fixo 	      = test_input($_POST["fixo"]);
    $celular 	    = test_input($_POST["celular"]);
    $email 		    = test_input($_POST["email"]);
    $cep 	        = test_input($_POST["cep"]);
    $rua	        = test_input($_POST["rua"]);
    $num	        = test_input($_POST["numero"]);
    $cidade 	    = test_input($_POST["cidade"]);
    $bairro 	    = test_input($_POST["bairro"]);
    $estado 	    = test_input($_POST["estado"]);
    $complemento 	= test_input($_POST["complemento"]);
    $login 		    = test_input($_POST["login"]);
    $senha 	      = md5(test_input($_POST["senha"]));
    $AlterDate    = date('Y-m-d H:i:s');
 
    if (empty($senha)) {
        $cliente = array (
            'cpf_cli' => $cpf,
            'nome_cli' => $nome,
            'parentesco_cli' => $parentesco,
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
            'alter_datetime' => $AlterDate
        );
    } else {
        $cliente = array (
            'cpf_cli' => $cpf,
            'nome_cli' => $nome,
            'parentesco_cli' => $parentesco,
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
            'alter_datetime' => $AlterDate
        );
    }

    $save = DBUpDate('clientes', $cliente, "id_cli = '".$idCliente ."'");

    if ($save) {
        echo "<script> alert('Dados Alterado com sucesso!') </script>";
        echo "<script>location.href=('dados_cliente')</script>";
    } else { 
        echo "Erro ao alterar dados, tente novamente mais tarde!";
        exit;
    }
}
function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

    $dados = DBRead ("clientes", "WHERE id_cli = '$idCliente'", "*");

    foreach($dados as $cli) {
        //echo '<pre>';
        //print_r($cli); exit;
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
              <input type="text" name="cpf" class="metadecontato contato cpf" maxlength="14" placeholder="CPF" required value="<?= $cli['cpf_cli'] ?>">
              <input type="text" name="nascimento" class="metadecontato contato data" placeholder="Data de Nascimento" required  value="<?= date('d/m/Y', strtotime($cli['nasc_cli'])); ?>">
            </td>
          <tr>
					<td align="left" valign="top">
						<input type="text" name="nome" class="contato" placeholder="Nome Completo do Responsável" required   value="<?= $cli['nome_cli'] ?>">
						<select name="parentesco" class="metadecontato contato select" style="height:45px;">
							<option disabled selected>Tipo de parentesco com a criança</option>
							<option value="M" <?php if ($cli['parentesco_cli'] == 'M') { echo "selected"; } ?>>Mãe</option>
							<option value="P" <?php if ($cli['parentesco_cli'] == 'P') { echo "selected"; }  ?>>Pai</option>
							<option value="O" <?php if ($cli['parentesco_cli'] == 'O') { echo "selected"; }  ?>>Outro Familiar</option>
						</select>
					</td>
				  </tr>
				  </tr>
				  <tr>
					<td align="left" valign="top">
              <input type="text" name="fixo" class="metadecontato contato fixo" placeholder="Telefone Fixo" value="<?= $cli['fixo_cli']?>">
					    <input type="text" name="celular" class="metadecontato contato cel" placeholder="Celular" required value="<?= $cli['cel_cli']?>">
					</td>
				  </tr>
				  <tr>
					<td align="left" valign="top">
					<input type="text" name="email" class="contato" placeholder="E-mail" required value="<?= $cli['email_cli'] ?>">
					</td>
				  </tr>
          <tr height="40" valign="top">
            <td align="left" colspan="2">
                <div style="border-bottom: 1px solid #000142; width: 99.5%; margin-top: 10px;"><b>Endereço</b></div>
            </td>
				  </tr>
          <tr>
					<td align="left" valign="top">
						<input type="text" name="cep" class="metadecontato contato cep" id="cep" placeholder="CEP"  onblur="pesquisacep(this.value);" required value="<?= $cli['cep_cli'] ?>">
            <span style="font-size:12px; font-size: 14px \9; color:#000000; text-align: left;">*Preenchimento Automatico!</span>
					</td>
				  </tr>
          <tr>
            <td align="left" valign="top">
              <input type="text" name="rua" class="metadecontato contato" id="endereco" placeholder="Rua" value="<?= $cli['rua_cli'] ?>">
              <input type="text" name="numero" class="contato" id="num" placeholder="Nº" onkeypress='return SomenteNumero(event)' style="width: 7%" value="<?= $cli['num_cli'] ?>">
              <input type="text" name="cidade" class="metadecontato contato" id="cidade" placeholder="Cidade" style="width: 40%"  value="<?= $cli['cidade_cli'] ?>">
            </td>
				  </tr>
          <tr>
            <td align="left" valign="top">
                <input type="text" name="bairro" class="metadecontato contato" id="bairro" placeholder="Bairro"  value="<?= $cli['bairro_cli'] ?>">
                <input type="text" name="estado" class="metadecontato contato" id="estado" placeholder="Estado" maxlength="2" value="<?= $cli['estado_cli'] ?>">
            </td>
				  </tr>
          <tr>
            <td align="left" valign="top">
              <input type="text" name="complemento" class="contato" placeholder="Complemento" value="<?= $cli['comp_cli'] ?>">
            </td>
				  </tr>
          <tr height="40" valign="top">
            <td align="left" colspan="2">
              <div style="border-bottom: 1px solid #000142; width: 99.5%; margin-top: 10px;"><b>Login</b></div>
            </td>
				  </tr>
          <tr>
            <td align="left" valign="top">
                <input type="text" name="login" class="metadecontato contato" placeholder="Login" required value="<?= $cli['login_cli'] ?>">
                <input type="password" name="senha" class="metadecontato contato" placeholder="Senha">
            </td>
          </tr>
				  <tr>
            <td height="70" align="center" valign="middle">
              <input type="submit" name="button" class="button button_compra" value="Alterar">
            </td>
				  </tr>
				</table>
			</form>
		</center>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php 
    }
    include "footer.php"; 
?>
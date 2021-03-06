<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<?php  
			require '../processos/config.php';
			require '../processos/connection.php';
			require '../processos/database.php';

			$idEvent = $_SESSION['evento'];
			$idCli = $_SESSION['id_cli'];
			$numreg = 20; // Quantos registros por página vai ser mostrado

			$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
			$inicial = ($pg * $numreg) - $numreg;

			// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
			$sql = DBRead ("agenda");
			$countTotal = count($sql);// Quantidade de registros pra paginação

			//LÊ DADOS DO BANCO
			$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

			$diretorio = 'img/eventos';

			foreach ($agenda as $rd) {
				
				$data = date('D', strtotime($rd['data']));

                $semana = array(
                    'Sun' => 'Domingo',
                    'Mon' => 'Segunda-Feira',
                    'Tue' => 'Terca-Feira',
                    'Wed' => 'Quarta-Feira',
                    'Thu' => 'Quinta-Feira',
                    'Fri' => 'Sexta-Feira',
                    'Sat' => 'Sábado'
                );
        ?>
        <div class="texto">
            <div id="titulos">
                <?php echo $rd['evento']?>
            </div>
			<?php 
				if(empty($rd['capa_evento'])) { echo ""; } 
				else {
					echo "<img src='".$diretorio."/".$rd['capa_evento']."' class='foto_evento'>";
				}
			?>
            <p><b>Data:</b> <?php echo date('d/m/Y', strtotime($rd['data'])).' - '.$semana[$data];?></p>
            <p><b>Horário de Início:</b> <?php echo $rd['hora_inicio']?> <b style="margin-left: 30px;">Horário de Término:</b> <?php echo $rd['hora_termino']?></p>
			<?php 
				if ($rd['valor'] == '0') {
					echo "<p><b>Valor:</b> Grátis!</p>";
				} else {
					echo "<p><b>Valor:</b> R$ ".number_format($rd['valor'], 2, ',', '.')."</p>";
				}
			?>
			<p><b>Local:</b> <?php echo $rd['local']?></p>
			<p><b>Vagas:</b> 
				<?php 
					$inscricao = $rd['qtd'] - $rd['inscritos'];
					echo $inscricao.' de '.$rd['qtd']
				?>
			</p>
            <p> <b>Detalhes sobre o evento:</b><br />
				<?php echo $rd['obs']?>
			</p>
			<p>*Você sabia que o Trio Bagunça é a única empresa de Animação Infantil habilitada para trabalhar com crianças do Espectro Autista?</p>
			<!-- <?php 
				// if ($rd['valor'] == '0') {
				// 	echo '<form action="cadastro_cliente_evento.php" method="post">';
				// } else {
				// 	echo '<form action="checkout.php" method="post">';
				// }
			?> -->
			<form action="cadastro_cliente_evento.php" method="post">
				<input type="hidden" name="idevento" value="<?php echo $rd['id_agenda']?>">
				<input type="hidden" name="idcliente" value="<?php echo $_SESSION['id_cli']; ?>">
				<div id="dynamicDiv">
					<div id="remov" class="form-row">
						<input type="text" name="crianca[]" class="contato" placeholder="Nome Completo da Criança" style="width: 73%" autofocus require>
						<input type="text" name="nascimento[]"  class="contato data" placeholder="Data de Nascimento" style="width: 20%" require>
						<br />*A criança escrita tem TEA (Transtorno do Espectro Autista)? <input type="radio" name="tea[]" value="S"> Sim <input type="radio" name="tea[]" value="N"> Não
						<br />*A criança escrita tem alguma restrição alimentar? <input type="radio" name="alimentar[]" value="S"> Sim <input type="radio" name="alimentar[]" value="N"> Não 
						<input type="text" name="tipo[]"  class="contato" placeholder="Se sim, Qual?" style="width: 20%; height: 15px; margin-left: 10px;">
						<br /><br />
					</div>
				</div>
				<div class="form-row">
					<div class="form-group col-md-12">
						<a href="" id="addInput" class="btn btn-primary"><i class="fas fa-plus"> </i> Adicionar Criança</a>
					</div>
				</div>
				<br />
				<center><input type="submit" value="Comprar" <?php 
							if ($rd['valor'] == '0') {
								echo 'value="Cadastre-se"';
							} else {
								echo 'value="Comprar"';
							}
						?>class="button button_compra" <?php if ($rd['qtd'] == '0') echo 'disabled style="background: #BEBEBE; color: #696969;"';?>></center>
			</form>
		</div>
        
		<?php
			}
		?>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->

<script>
	//ADICIONA MAIS UM INPUT DATE NA INDISPONIBILIDADE
	$(function () {
		var scntDiv = $('#dynamicDiv');
		$(document).on('click', '#addInput', function () {
			$('<div id="remov" class="form-row">'+
				'<div class="form-group col-md-11">'+
					'<input type="text" name="crianca[]" class="contato" placeholder="Nome Completo da Criança" style="width: 73%" require>'+
					'<input type="text" name="nascimento[]"  class="contato data" placeholder="Data de Nascimento" style="width: 20%" require>'+
					'<a class="btn btn-danger" href="javascript:void(0)" id="remInput">'+
						'<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>'+
						'<i class="fas fa-times" title="Remover"></i>'+
					'</a>'+
					'<br />*A criança escrita tem TEA (Transtorno do Espectro Autista)? <input type="radio" name="tea[]" value="S"> Sim <input type="radio" name="tea[]" value="N"> Não'+
					'<br />*A criança escrita tem alguma restrição alimentar? <input type="radio" name="alimentar[]" value="S"> Sim <input type="radio" name="alimentar[]" value="N"> Não'+
					'<input type="text" name="tipo[]"  class="contato" placeholder="Se sim, Qual?" style="width: 20%; height: 15px; margin-left: 10px;">'+
					'<br /><br />'+
				'</div>'+
			'</div>').appendTo(scntDiv);
			return false;
		});
		$(document).on('click', '#remInput', function () {
			$(this).parents('#remov').remove();
			return false;
		});
	});
</script>
<?php include "footer.php"; ?>
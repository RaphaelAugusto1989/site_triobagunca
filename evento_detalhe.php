<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';
            
            $idEvent = $_GET['id'];

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

				$dataInicio = date('D', strtotime($rd['data_inicio']));
				$dataFinal = date('D', strtotime($rd['data_final']));

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
				<?php 
					$_SESSION["evento"] = $rd['id_agenda'];
					echo $rd['evento'];
				?>
			</div>
			<?php 
				if(empty($rd['capa_evento'])) { echo ""; } 
				else {
					echo "<img src='".$diretorio."/".$rd['capa_evento']."' class='foto_evento'>";
				}
			?>
				<p><b>Data:</b> <?php echo date('d/m/Y', strtotime($rd['data_inicio'])).' - '.$semana[$dataInicio]; if ($rd['data_final'] == '0000-00-00') { echo ' ';} else { echo ' até '.date('d/m/Y', strtotime($rd['data_final'])).' - '.$semana[$dataFinal];} ?></p>
				<p><b>Horário de Início:</b> <?php echo $rd['hora_inicio']?></p>
				<p><b>Horário de Término:</b> <?php echo $rd['hora_termino']?></p>
				<?php 
					if ($rd['valor'] == '0') {
						echo "<p><b>Valor:</b> Grátis!</p>";
					} else {
						echo "<p><b>Valor:</b> R$ ".number_format($rd['valor'], 2, ',', '.')."</p>";
					}
				?>
				<p><b>Local:</b> 
					<?php
						if ($rd['local'] == 'Externo') {
							echo $rd['endereco'];
						} else {
							echo $rd['local'];
						}
					?>
				</p>
				<?php 
					if ($rd['inscritos'] >= $rd['qtd']) { echo $lotado = '<p><b>Vagas:</b> - LOTADO!';}
					/*if ($rd['qtd'] != '0') {
						$inscricao = $rd['qtd'] - $rd['inscritos'];
							echo "<p><b>Vagas:</b> ";
								echo $inscricao.' de '.$rd['qtd'].' '.$lotado;
							echo "</p>";
					} else {
						echo "";
					}
					*/
				?>
				<p> <b>Detalhes sobre o evento:</b><br />
					<?php echo $rd['obs'];?>
				</p>
			<br />
			<br />
				<?php
					if ($rd['local'] == 'Externo') {
						echo "</div>";
					} else {
				?>
			<p>
				<center>
					<button onclick="location.href='LoginCliente?event=<?php echo $idEvent;?>'" class="button button_compra" <?php if ($rd['inscritos'] >= $rd['qtd']) { echo 'disabled style="background: #BEBEBE; color: #696969;"';}?>>
						<?php 
							if ($rd['valor'] == '0') {
								echo "<b>Cadastre-se</b>";
							} else {
								echo "<b>Comprar</b>";
							}
						?>
					</button>
				</center>								
			</p>
        </div>
		<?php
					}
			}
		?>
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
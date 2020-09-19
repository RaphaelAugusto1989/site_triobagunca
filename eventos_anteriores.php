<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			EVENTOS ANTERIORES
		</div>
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';

			$numreg = 20; // Quantos registros por página vai ser mostrado

			$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
			$inicial = ($pg * $numreg) - $numreg;

			// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
			$sql = DBRead ("agenda", "WHERE local = 'Externo'");
			$countTotal = count($sql);// Quantidade de registros pra paginação

			//LÊ DADOS DO BANCO
			$agenda = DBRead ("agenda", "WHERE local = 'Externo' AND status = '1' ORDER BY data_inicio DESC LIMIT $inicial, $numreg", "*");

			$diretorio = 'img/eventos';

			if(!empty($agenda)){
				$DataHoje = date("Ymd");
				$temEvento = false;
				foreach($agenda as $rd){
					if(str_replace("-","",$rd['data_inicio']) < $DataHoje){		
						if (empty($rd['capa_evento'])) {
		?>
							<a href="evento_detalhe.php?id=<?php echo $rd['id_agenda'];?>" class="event">
								<div class="capa_evento">
									<?php 
										$dateInicio = explode('-', $rd['data_inicio']);
										$dateFinal = explode('-', $rd['data_Final']);

										
										echo '<b><center>'.$rd['evento'].'</center></b><br />'; 
										echo 'Data: '.$dateInicio[2].'/'.$dateInicio[1].'/'.$dateInicio[0].''; if($rd['data_final'] == '0000-00-00') { echo ' ';} else { echo ' até '.$dateFinal[2].'/'.$dateFinal[1].'/'.$dateFinal[0];}
										echo 'Início: '.$rd['hora_inicio'].'<br />';
										echo 'Final: '.$rd['hora_termino'].'<br />';
									?>
								</div>
							</a>
					<?php	
						} else {
					?>
							<a href="evento_detalhe.php?id=<?php echo $rd['id_agenda'];?>" class="event">
								<div class="capa_evento">
									<img src="<?php echo $diretorio.'/'.$rd['capa_evento']; ?>">
								</div>
							</a>
		<?php
						}
					}
				}
			}

			if (empty($agenda)) {
				echo '<center>Infelizmente não temos eventos cadastrados no momento!</center>';
			}
		?>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos"> ESPAÇO BAGUNÇA</div>
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';

			$numreg = 20; // Quantos registros por página vai ser mostrado

			$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
			$inicial = ($pg * $numreg) - $numreg;

			// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
			$sql = DBRead ("agenda", "WHERE local = 'Espaço Bagunça'");
			$countTotal = count($sql);// Quantidade de registros pra paginação

			//LÊ DADOS DO BANCO
			$agenda = DBRead ("agenda", "WHERE local = 'Espaço Bagunça' ORDER BY data ASC LIMIT $inicial, $numreg", "*");

			/*
			foreach ($agenda as $rd) {
				echo $DataHoje = date('Ymd').'<br>';
				echo $dataEvento = str_replace("-","",$rd['data']);
				if ($dataEvento >= $DataHoje) {
					$temEvento = false;
					if ($temEvento == false) {
						echo "Não tem evento!";
					} else
			*/

			if(!empty($agenda)) {
				$DataHoje = date("Ymd");
				$temEvento = false;
				foreach($agenda as $rd) {
					if(str_replace("-","",$rd['data']) >= $DataHoje) {		
		?>
		<a href="evento_detalhe.php?id=<?php echo $rd['id_agenda'];?>" class="event">
			<table width="100%" align="center" border="0" cellspacing="2" cellpadding="2" id="table_recados">
				<tbody>
					<tr>
						<td></td>
						<td width="15%" align="center"><b>Data</b></td>
						<td></td>
						<td width="15%" align="center"><b>Horário</b></td>
						<td style="padding-left: 30px;"><b>Evento</b></td>
					</tr>
					<tr>
					    <td width="3%"></td>
						<td align="center" valign="middle" class="borda"> 
							<div class="dia">
								<?php 
									$date = explode('-', $rd['data']);
									echo $date[2]; 
								?>
							</div>
							<div class="mesanos">
								<?php
									echo $date[1].'/'.$date[0];
								?>
							</div>
						</td>
						<td width="5%" align="center" valign="middle">
						ás 
						</td>
						<td width="15%" align="center" valign="middle" class="borda">
							<div class="dia">
								<?php 
									$hr = explode(':', $rd['hora']);
									echo $hr[0].'h'; 
								?>
							</div>
							<div class="mesanos">
								<?php
									echo $hr[1];
								?>
							</div>
						</td>
						<td valign="top">
							<div class="titevent">
							<?php echo $rd['evento'] ?>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</a>
		<?php
					}
				}
			}	

			if ($temEvento == false) {
				echo '<center>Infelizmente não temos eventos cadastrados no momento!</center>';
			}
		?>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
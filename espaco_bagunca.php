<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos"> ESPAÇO BAGUNÇA</div>
		<p>O Espaço Bagunça é o espaço criativo da equipe de animação infantil Trio Bagunça.</p>
		<p>O Trio Bagunça atua em todo o DF com animação, personagens vivos, pintura de rosto e vários outros serviços, porém, faltava um lugar próprio para desenvolver sua nova proposta de entretenimento infantil.
		Localizado no Metrópole Shopping, Águas Claras, juntamente com a nossa central de atendimento, o Espaço Bagunça oferece aos pequenos e sua família, a segurança de um shopping muito bem localizado com estacionamento grátis é um mix de lojas conhecidas. O espaço de diversão é exclusivo para as crianças, todo adaptado com forração própria, banheiro privativo dentro da loja, de uso restrito aos pequeninos, inclusive com fraldário, sistema inteligente de energia elétrica antichoque, cozinha completa para refeições quando proposto, estrutura de cinema kids, circuito de câmeras para que os responsáveis acompanhem o andamento e equipe de recreadores com padrão Trio Bagunça de animação, habilitados para atuar com crianças do espectro autista, a única equipe de Brasília certificada para tal.
		Tudo isso e muito mais, só aqui no Espaço Bagunça.</p>
		<p>Adquira no conforto de sua casa o ingresso de seus pequenos, é muito simples, basta escolher a atividade preferida, escolher a data e hora, efetuar o cadastro e realizar o pagamento. Pronto! </p>
		<p>Ti esperamos lá!</p>
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
			$agenda = DBRead ("agenda", "WHERE local = 'Espaço Bagunça' AND status = '1' ORDER BY data DESC LIMIT $inicial, $numreg", "*");

			$diretorio = 'img/eventos';

			if(!empty($agenda)) {
				//$DataHoje = date("Ymd");
				$temEvento = false;
				foreach($agenda as $rd) {
					//if(str_replace("-","",$rd['data']) >= $DataHoje) {
						if (empty($rd['capa_evento'])) {
		?>
							<a href="evento_detalhe.php?id=<?php echo $rd['id_agenda'];?>" class="event">
								<div class="capa_evento">
									<?php 
										$date = explode('-', $rd['data']);
										echo '<b><center>'.$rd['evento'].'</center></b><br />';
										echo 'Data: '.$date[2].'/'.$date[1].'/'.$date[0].'<br />';
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
					//}
				}
			}	

			if (empty($agenda)) {
				echo '<center>Infelizmente não temos eventos cadastrados no momento!</center>';
			}
		?>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
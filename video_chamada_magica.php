<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
            Vídeo Chamada Mágica
		</div>
			<p>
            A vídeo chamada mágica têm feito muito sucesso, pois além de poder receber a ligação daquele personagem tão querido no próprio conforto de casa, o valor se torna um grande atrativo. 
            </p>
            <p>
            O personagem escolhido faz uma ligação e conversa com a criança ao vivo. Durante a chamada, o personagem conversar, interage, brinca com a criança ou crianças e a diversão não fica de fora. 
            Além disso, o personagem pode passar algum recadinho importante a pedido do papai e da mamãe ou de alguém querido. A vídeo chamada mágica rompe fronteiras e pode ser feita para crianças em outras 
            cidades, estados ou países. Tem duração média de 30 minutos. 
			</p>
<div id="corpo_galeria">
	<div id="corpo_fotos">
		<?php
		require 'processos/config.php';
		require 'processos/connection.php';
		require 'processos/database.php';

		$numreg = 16; // Quantos registros por página vai ser mostrado

		$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
		$inicial = ($pg * $numreg) - $numreg;

		// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
		$sql = DBRead ("servicos", "WHERE tipo_servico = 'Vídeo Chamada Mágica'");
		$countTotal  = count($sql); // Quantidade de registros pra paginação 

		//LÊ DADOS DO BANCO
			$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Vídeo Chamada Mágica' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

		foreach ($lojas as $lj) {
		?>
			<?php echo "<a href='img/servicos/".$lj['imagem_servico']."' data-lightbox='roadtrip' title='".$lj['nome_servico']."'>
					<div class='hoverzoom'>
						<img src='img/servicos/".$lj['imagem_servico']."'>
					</div>
				</a>";?>
		<?php
			}
		?>
			<div id="paginacao">
			<?php
				if ($countTotal > $numreg) {
					include("paginacao.php"); // chamada do arquivo. ex: << Anterior 1 2 3 4 5 Próxima >>
				}
			?>
			</div>
	</div>
</div>	
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
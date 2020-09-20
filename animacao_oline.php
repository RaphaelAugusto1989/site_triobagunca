<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
            Animação Online
		</div>
			<p>
            A animação online é uma ótima opção para quem quer reunir os primos e/ou amigos para um momento de diversão, seja em uma data comemorativa ou apenas para divertir a criançada. 
            Durante o tempo da animação, o animador ou animadora escolhe diversas brincadeiras de acordo com a idade e perfil das crianças e também de acordo com o perfil do(a) aniversariante. 
            As brincadeiras desenvolvidas não necessitam de materiais específicos e nem de muito espaço. Tudo é pensado para que todos consigam se divertir do outro lado das telinhas. 
            A duração pode ser de 30 minutos ou de 1 hora. 
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
		$sql = DBRead ("servicos", "WHERE tipo_servico = 'Animação Online'");
		$countTotal  = count($sql); // Quantidade de registros pra paginação 

		//LÊ DADOS DO BANCO
			$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Animação Online' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

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
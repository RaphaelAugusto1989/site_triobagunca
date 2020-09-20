<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
            Vídeo Personalizado Mágico
		</div>
			<p>
            O vídeo personalizado é uma ótima forma de presentear uma criança ou até mesmo de passar uma mensagem emocionante e mágica para clientes, amigos ou funcionários de uma empresa. </br>
            O conteúdo do vídeo é escolhido pelo próprio contratante.  O personagem escolhido grava a mensagem de acordo com o que foi solicitado. E a edição do vídeo fica por nossa conta. </br>
            A duração varia de acordo com o conteúdo da mensagem, mas tem em média 5 minutos.
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
		$sql = DBRead ("servicos", "WHERE tipo_servico = 'Vídeo Personalizado Mágico'");
		$countTotal  = count($sql); // Quantidade de registros pra paginação 

		//LÊ DADOS DO BANCO
			$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Vídeo Personalizado Mágico' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

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
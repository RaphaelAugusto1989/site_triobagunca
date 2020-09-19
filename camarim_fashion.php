<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Camarim Fashion
		</div>
		<p>
			O Camarim Fashion consiste em uma estrutura de mini salão, no qual as colaboradoras se dividem para realizar a pintura facial/corporal e tatuagens temporárias com variadas opções, além dos penteados femininos e masculinos, os quais podem ser incrementados com spray colorido para o cabelo, fitas coloridas, glitter, entre outros adereços. Além disso, também é oferecido esmalte infantil e adesivo para as unhas, assim como maquiagem infantil com muito brilho, do jeitinho que a criançada gosta!
		</p>
		<p>
			Esse serviço tem sido muito solicitado e tem feito muito sucesso por onde passa, pois oferece às crianças um momento de glamour e diversão.
		</p>
		<p>
			Tanto as meninas quanto os meninos podem usufruir desse serviço, pois nossa equipe é preparada para agradar a todos, de todas as idades.
		</p>
		<p>
			Solicite um orçamento e garanta esse serviço diferenciado para a festa do(a) seu(sua) pequeno(a)!!!!!
		</p>
<br />
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
		$sql = DBRead ("servicos", "WHERE tipo_servico = 'Camarim Fashion'");
		$countTotal  = count($sql); // Quantidade de registros pra paginação 

		//LÊ DADOS DO BANCO
			$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Camarim Fashion' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

		foreach ($lojas as $lj) {
		?>
		<?php 
			echo "<a href='img/servicos/".$lj['imagem_servico']."' data-lightbox='roadtrip' title='".$lj['nome_servico']."'>
				<div class='hoverzoom'>
					<img src='img/servicos/".$lj['imagem_servico']."'>
				</div>
				</a>";
		?>
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
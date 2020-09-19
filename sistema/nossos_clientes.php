<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			NOSSOS CLIENTES
		</div>
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
		$sql = DBRead ("clientes");
		$countTotal  = count($sql); // Quantidade de registros pra paginação

		//LÊ DADOS DO BANCO
		$lojas = DBRead ("clientes", "ORDER BY id_cliente DESC LIMIT $inicial, $numreg", "*");

		foreach ($lojas as $lj) {

		echo "<a href='img/clientes_vips/".$lj['imagem_cliente']."' data-lightbox='roadtrip'>
				<div class='hoverzoom'>
					<img src='img/clientes_vips/".$lj['imagem_cliente']."'>
				</div>
			 </a>";
		  }
		?>
		<br />
		</div>
		<div id="paginacao">
			<?php
			    if ($countTotal > $numreg) {
			       include("paginacao.php"); // chamada do arquivo. ex: << Anterior 1 2 3 4 5 Próxima >>
			    }
			 ?>
		</div>
	</div>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Oficina de Slime
		</div>
		<p>
			
		</p>
		
<br />
<div id="corpo_galeria">
<?php
	require 'processos/config.php';
	require 'processos/connection.php';
	require 'processos/database.php';

	  $numreg = 16; // Quantos registros por página vai ser mostrado
	  
	  $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
	  $inicial = ($pg * $numreg) - $numreg;

	  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
	  $sql = DBRead ("servicos", "WHERE tipo_servico = 'Oficina de Slime'");
	  $countTotal  = count($sql); // Quantidade de registros pra paginação 

	   //LÊ DADOS DO BANCO
		$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Oficina de Slime' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

	  foreach ($lojas as $lj) {
	?>

	<div id="fotos">
		<?php echo "<a href='img/servicos/".$lj['imagem_servico']."' data-lightbox='roadtrip' title='".$lj['nome_servico']."'>
				<div class='hoverzoom'>
					<img src='img/servicos/".$lj['imagem_servico']."'>
				</div>
				</a>";?>
	</div>
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
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
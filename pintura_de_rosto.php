<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			PINTURA DE ROSTO
		</div>
			<p>
				A pintura de rosto é um dos serviços mais clássicos no mundo das festas infantis, e o seu resultado é tão notável, criativo e divertido que mesmo com o passar dos anos ela não fica ultrapassada, inclusibe até alguns papais, mamães e convidados gostam de fazer as pinturinhas.
			</p>
			<p>
				Os nossos pintores são capazes de fazer os mais distintos desenhos corporais, desde os badalados heróis e princesas, até os bichos mais conhecidos da natureza. É super comum ver crianças de todas as idades encantadas com essa arte nos braços, mãos e rosto. Vale lembrar que a nossa equipe sempre leva em consideração as recomendações dos responsáveis.
			</p>
			<p>
				O serviço de Pintura de Rosto é oferecido pelo período de 3 horas, mas a depender do seu desejo, esse tempo pode ser maior ou menor.
			</p>
			<p>
				Também é possível introduzir a arte de Balão Mania, entre outras opções. Confira um pouco de nosso trabalho e solicite o seu orçamento o quanto antes.
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
	  $sql = DBRead ("servicos", "WHERE tipo_servico = 'Pintura de Rosto'");
	  $countTotal  = count($sql); // Quantidade de registros pra paginação 

	   //LÊ DADOS DO BANCO
		$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Pintura de Rosto' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

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
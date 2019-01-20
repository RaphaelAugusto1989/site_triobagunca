<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Contação de Histórias / Teatro
		</div>
<p>
Qual papai ou mamãe nunca contou uma historinha a seu pequeno(a) antes de dormir? As histórias possuem um poder mágico de encantar e levar as crianças a mundos inimagináveis, e sempre será assim, mesmo que os anos passem e passem...
</p>
<p>
O Trio Bagunça conta com os serviços de contação de Histórias que podem ser clássicas (Contos já conhecidos) ou personalizadas (A história de sua família e/ou do aniversariante), e também com espetáculos teatrais temáticos, tudo para estimular nas crianças valores positivos como ajudar, respeitar e valorizar o próximo ou simplesmente divertir a todos.
</p>
<p>
Estes serviços são oferecidos com duração média de 1 hora, mas a depender de seu desejo o tempo pode ser maior.
</p>
<p>
Confira um pouco de nosso trabalho e solicite o seu orçamento o quanto antes para não ficar sem agenda.
</p>
<div id="corpo_galeria">
	<?php
	require 'processos/config.php';
	require 'processos/connection.php';
	require 'processos/database.php';


	  $numreg = 16; // Quantos registros por página vai ser mostrado

	  $pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
	  $inicial = ($pg * $numreg) - $numreg;

	  // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
	  $sql = DBRead ("servicos", "WHERE tipo_servico = 'Contação de História'");
	  $countTotal  = count($sql); // Quantidade de registros pra paginação 

	   //LÊ DADOS DO BANCO
		$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Contação de História' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

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
<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Contação de Histórias / Teatro
		</div>
			<p>
				Qual papai e mamãe nunca contaram uma historinha ao seu pequeno (a) antes de dormir? As histórias possuem um poder mágico de encantar e levar as crianças a mundos inimagináveis... 
			</p>
			<p>
				O Trio Bagunça conta com o serviço de Contação de Histórias, as quais podem ser clássicas (histórias já conhecidos) ou personalizadas (a história é adaptada ou criada de acordo com o pedido do cliente), tudo para estimular  valores positivos como ajudar, respeitar e valorizar o próximo , além de ter o poder de divertir a todos.
			</p>
			<p>
				Estes serviços são oferecidos com duração média de 30 minutos a 1 hora, mas a depender de seu desejo, o tempo pode ser maior.
			</p>
			<p>
				Confira um pouco de nosso trabalho e solicite o seu orçamento para levar esse serviço de puro sucesso para a sua festa.
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
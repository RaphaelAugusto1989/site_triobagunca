<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Oficina de Slime
		</div>
		<p>
			O slime é a nova moda de massa de modelar que vem dominando o mundo infantil. A palavra significa viscoso ou pegajoso.
		</p>
		<p>
			Também conhecida como amoeba, o Slime é a gourmetização da antiga geleca, brinquedo que fez muito sucesso nos anos 80. A novidade é que ela ganhou cores e texturas. A verdadeira graça está em fazê-lo e personaliza-lo com as próprias mãos. Juntar os ingredientes, fazer toda a alquimia da mistura e ver a mágica acontecer é o que deixa tudo mais divertido! Com as diversas possibilidades, fazer o próprio slime é uma atividade quase que terapêutica! Ao fazerem, os pequenos exercitam sua paciência, estimulam sua imaginação e criatividade e contribuem com o desenvolvimento motor e cognitivo, raciocínio, visão, sensorialidade, entre outras funções.
		</p>
		<p>
			Nossa oficina de Slime é realizada por um monitor, o qual irá, juntamente com as crianças, realizar a receita do Slime. Cada criança recebe um Slime e pode personaliza-lo da forma que quiser. É sucesso total!! Conheça nossos pacotes e leve ainda mais diversão para a sua festa.
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
<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			ANIMAÇÃO INFANTIL
		</div>
        <p>
          A Animação Infantil é um dos serviços mais contratados e de maior sucesso entre os oferecidos pela empresa.
        </p>
        <p>
          Os nossos animadores contam com vestuário colorido (uniforme padrão de uso obrigatório), muita energia, disposição, educação e materiais que fazem as crianças gastarem as energias. Eles atraem a atenção dos pequenos na festa e agitam todo mundo, fazendo com que os seus convidados, quase que obrigatoriamente, comentem o trabalho do Trio Bagunça no fim da festinha. Esse é um jeito super divertido de deixar o aniversário do seu filho(a) com outra cara.
        </p>
        <p>
          O serviço de animação infantil é oferecido pelo período de 3 horas, mas a depender do seu desejo, esse tempo pode ser maior ou menor.
        </p>
        <p>
          Nós possuímos pacotes para todos os tipos de gostos e bolsos, como o “Bagunça Top”, por exemplo, que é o nosso serviço de animação mais completo, o qual apresenta som/microfone de melhor performance e brincadeiras exclusivas a esse pacote, como o “torta na cara”, caça ao tesouro com pistas, enceradeira humana e futebol de pano . Além do "Bagunça Top", temos outros pacotes mais simples que atendem bem a necessidade da criançada, além de pacotes promocionais que acabam saindo mais em conta.
        </p>
        <p>
          Confira um pouco mais do nosso trabalho e solicite o quanto antes seu orçamento, assim você pode garantir muito mais diversão para a sua festa!!!
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
  $sql = DBRead ("servicos", "WHERE tipo_servico = 'Animação Infantil'");
  $countTotal  = count($sql); // Quantidade de registros pra paginação 

   //LÊ DADOS DO BANCO
	$lojas = DBRead ("servicos", "WHERE tipo_servico = 'Animação Infantil' ORDER BY id_servico DESC LIMIT $inicial, $numreg", "id_servico, tipo_servico, nome_servico, imagem_servico");

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
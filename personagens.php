<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/destaque.css" type="text/css" rel="stylesheet" />
<link href="css/lightbox.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
<script type="text/javascript" src="js/jquery.destaques.js"></script>
<script type="text/javascript" src="js/lightbox-2.6.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/textzoom.js"></script>
<script type="text/javascript" src="js/slick.js" charset="utf-8"></script>
<style>
		body {
			background-color: transparent;
		}
</style>
<body>
  <div id="corpo_galeria">
    <div id="corpo_fotos">
      <?php
        require 'processos/config.php';
        require 'processos/connection.php';
        require 'processos/database.php';

        $letra = $_GET['letra'];

        #$numreg = 16; // Quantos registros por página vai ser mostrado

        #$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
        #$inicial = ($pg * $numreg) - $numreg;

        // Serve para contar quantos registros você tem na seua tabela para fazer a paginação
        #$sql = DBRead ("servicos", "WHERE tipo_servico = 'Personagem Vivo'");
        #$countTotal  = count($sql); // Quantidade de registros pra paginação 
      
        //LÊ DADOS DO BANCO
        $lojas = DBRead ("servicos", "WHERE tipo_servico = 'Personagem Vivo' ORDER BY id_servico DESC", "id_servico, tipo_servico, nome_servico, imagem_servico");
        
        echo "<h4 style='color: #000142;'>Parabêns, você selecionou os personagens com a letra inícial <b>".$letra."</b>!</h4>";

        foreach ($lojas as $lj) {
          $palavra = $lj['nome_servico'];
          $prisn = substr($palavra, 0, 1);

          if ($prisn == $letra) {
            echo "
                  <a href='img/servicos/".$lj['imagem_servico']."' data-lightbox='roadtrip' title='".$lj['nome_servico']."'>
                    <div class='hoverzoom'>
                        <img src='img/servicos/".$lj['imagem_servico']."'>
                    </div>
                  </a> ";
          } 
          // else {
          //   echo "<br /><br /> <h4 style='color: #000142;'>Infelizmente não temos personagens com a letra ".$letra."! =(</h4>"; exit;
          // }
        }
      ?>
      <div id="paginacao">
        <?php
            if ($countTotal > $numreg) {
              include("paginacao.php"); // chamada do arquivo. ex: Anterior 1 2 3 4 5 Próxima 
            }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
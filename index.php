<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
    <div id="blocoDestaques"><!--INICIO DESTAQUE-->
        <ul>
            <?php
            require 'processos/config.php';
            require 'processos/connection.php';
            require 'processos/database.php';

            $LeBanner = DBRead ('banners', "ORDER BY ordem_banner ASC");

            //var_dump($LeBanner);
            foreach ($LeBanner as $bn) {
                echo "<li>
                  <a href='".$bn['url_banner']."'><img src='img/banners/".$bn['img_banner']."' alt='".$bn['titulo_banner']."'/></a>
              </li>";
            }
            ?>
        </ul>
    </div><!--FIM DESTAQUE-->
	
<div id="recados">
	<div id="titulos">
		<center> Já foi cliente Trio Bagunça? Conte-nos o que achou!</center>
	</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
  //RECEBE DADOS DO FORMULARIO
  date_default_timezone_set('America/Sao_Paulo');
  
  $nome = test_input($_POST["nome"]);
  $recado = test_input($_POST["recado"]);
  $data_hora = date('d/m/Y H:i:s');
  $aprovacao = 'Não';
  $file = $_FILES["imagem"];

  // imagem 1
  if($file["name"] != "")  {
    $nome_dia="clientes_".date("d")."_".date("m")."_".date("Y")."_".date("his").".";
    $aux = explode(".",$file["name"]   );
    $i=0;
    $ext="";

    while($aux[$i] != "") {
           $ext=$aux[$i];
           $i++;
    }

    $nomefoto = "$nome_dia$ext";
    $destino="img/clientes/$nomefoto";

    @copy("$file[tmp_name]","$destino") or die("Erro na cópia da imagem  $file[name]! verifique a permissão do seu diretório!");
  }
		
  if ($nome == 'Nome:') {
  	$ErrNome = "<span style='color: #C40003; font-size:12px; '>Você esqueceu de digitar seu nome!</span>";
  } else if ($nomefoto == false) {
  	$ErrFile = "<span style='color: #C40003; font-size:12px; '>Insira uma foto sua!</span>"; 		
  } else {
      $recados = array (
          'nome_recado' => $nome,
          'recado' => $recado,
          'data_hora' => $data_hora,
      	  'aprovacao' => $aprovacao,
      	  'fotos' => $nomefoto
      );
   
      $grava = DBCreate('recados', $recados);
    
      if ($grava) {
        echo "<script> alert('Recado eviado com sucesso! Aguarde a aprovação do adaministrador do site!') </script>";
        echo "<script>location.href=('index')</script>";
      }
      else { 
        echo "Erro ao enviar recado, tente novamente mais tarde! ";	
        exit;
      }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
	<table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td>
      <?php echo @$ErrNome; ?><br />
      <input type="text" name="nome"<?php if ($ErrNome == true) { echo "style='width: 50%; color: #C40003; border: 2px #A70002 solid;'";} ?> class="nomerecado" required placeholder="Nome">
      
      <span class="foto_recado">Inserir Foto: <?php echo @$ErrFile; ?>
      	<input type="file" name="imagem"  class="foto_recado_file" <?php if ($ErrFile == true) { echo "style='color: #C40003; border: 2px #A70002 solid;'";} ?>>
      </span>
      </td>
    </tr>
    <tr>
      <td>
      	<textarea name="recado" class="contato" style="margin-bottom: 5px; height: 100px;" required placeholder="Deixe seu Recado!" value=""></textarea>
      </td>
    </tr>
    <tr>
     <td>
      <input type="submit" name="button" class="button" value="Enviar Comentário" style="margin-bottom: 50px; margin-top: 10px; width: 100%;">
     </td>
    </tr>
  </tbody>
</table>
</form>
<?php 
$numreg = 5; // Quantos registros por página vai ser mostrado

$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
$inicial = ($pg * $numreg) - $numreg;

// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
$sql = DBRead ("recados");
$countTotal  = count($sql); // Quantidade de registros pra paginação


//LÊ DADOS DO BANCO
$recados = DBRead ("recados", "WHERE aprovacao = 'Sim' ORDER BY id_recado DESC LIMIT $inicial, $numreg", "nome_recado, recado, data_hora, fotos");

  foreach ($recados as $rd) {
?>
<table width="100%" border="0" cellspacing="2" cellpadding="2" id="table_recados">
  <tbody>
  	<tr>
      <td width="13%" rowspan="3" align="center" valign="top"> 
      	<?php
          if ($rd['fotos'] == false) { echo "<img src=\"img/sombra.jpg\" class=\"foto_cliente\">"; }
          else { echo "<img src=\"img/clientes/".$rd['fotos']."\" class=\"foto_cliente\">"; }
          ?>
	      </td>
    </tr>
    <tr>
      <td width="87%" height="10" valign="top"><b><?php echo $rd['nome_recado']?></b> <span style=" font-size: 12px; margin-left: 10px;"><?php echo $rd['data_hora']?></span></td>
    </tr>
    <tr>
      <td  valign="top"><?php echo $rd['recado']?></td>
    </tr>
  </tbody>
</table>

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
</div><!--FIM RECADOS-->	
</div><!--FIM CORPO-->

<?php include "footer.php"; ?>
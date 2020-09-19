<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';
            
            $idEvent = $_GET['id'];

			$numreg = 20; // Quantos registros por página vai ser mostrado

			$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
			$inicial = ($pg * $numreg) - $numreg;

			// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
			$sql = DBRead ("agenda");
			$countTotal = count($sql);// Quantidade de registros pra paginação

			//LÊ DADOS DO BANCO
			$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

			$diretorio = 'img/eventos';

			foreach ($agenda as $rd) {
        ?>
        <div class="texto">
            <div id="titulos">
				<?php 
					$_SESSION["evento"] = $rd['id_agenda'];
					echo $rd['evento'];
				?>
			</div>
			<img src="<?php echo $diretorio.'/'.$rd['capa_evento']; ?>" class="foto_evento">
				<p><b>Data:</b> <?php echo date('d/m/Y', strtotime($rd['data']));?></p>
				<p><b>Horário de Início:</b> <?php echo $rd['hora_inicio']?> <b style="margin-left: 30px;">Horário de Término:</b> <?php echo $rd['hora_termino']?></p>
				<?php 
					if ($rd['valor']) {
						echo "<p><b>Valor:</b> R$ ".number_format($rd['valor'], 2, ',', '.')."</p>";
					}
				?>
				<p><b>Local:</b> <?php echo $rd['local']?></p>
				<p> <b>Detalhes sobre o evento:</b><br />
					<?php echo $rd['obs']?>
				</p>
			<br />
			<br />
			<br />
			<p>
				<center><button onclick="location.href='LoginCliente?event=<?php echo $idEvent;?>'" class="button" style="width: 30%;"><b>Comprar</b></button></center>
			</p>
        </div>
        
		<?php
			}
		?>
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
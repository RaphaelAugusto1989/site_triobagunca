<?php 
	session_start();
	include "head.php"; 
?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<?php  
			require '../processos/config.php';
			require '../processos/connection.php';
			require '../processos/database.php';

			$idEvent = $_SESSION['evento'];
			$numreg = 20; // Quantos registros por página vai ser mostrado

			$pg = isset($_GET["pg"]) ? $_GET["pg"] : 1;
			$inicial = ($pg * $numreg) - $numreg;

			// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
			$sql = DBRead ("agenda");
			$countTotal = count($sql);// Quantidade de registros pra paginação

			//LÊ DADOS DO BANCO
			$agenda = DBRead ("agenda", "WHERE id_agenda = '$idEvent'", "*");

			foreach ($agenda as $rd) {
        ?>
        <div class="texto">
            <div id="titulos">
                <?php echo $rd['evento']?>
            </div>
            <p><b>Data:</b> <?php echo date('d/m/Y', strtotime($rd['data']));?></p>
            <p><b>Horário:</b> <?php echo $rd['hora']?></p>
			<?php 
				if ($rd['valor']) {
					echo "<p><b>Valor:</b> R$ ".$rd['valor']."</p>";
				}
			?>
            <p><b>Local:</b> <?php echo $rd['local']?></p>
            <p> <b>Detalhes sobre o evento:</b><br />
				<?php echo $rd['obs']?>
			</p>
			<form action="" method="">
				<input type="hidden" name="idevento" value="<?php echo $rd['id_agenda']?>">
				<input type="text" name="crianca" class="contato" placeholder="Nomde Completo da Criança" style="width: 75%" id="">
				<input type="text" name="idade"  class="contato" placeholder="Idade da Criança" style="width: 20%" id="">
				<br />
				<center><input type="submit" value="Comprar" class="button" style="width: 30%; font-weight: bold;"></center>
			</form>
		</div>
        
		<?php
			}
		?>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
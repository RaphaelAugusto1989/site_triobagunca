<?php include "head.php"; ?>
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

			foreach ($agenda as $rd) {
        ?>
        <div class="texto">
            <div id="titulos">
                <?php echo $rd['evento']?>
            </div>
            <p><b>Data:</b> <?php echo date('d/m/Y', strtotime($rd['data']));?></p>
            <p><b>Horário:</b> <?php echo $rd['hora']?></p>
            <p><b>Local:</b> <?php echo $rd['local']?></p>
            <p><?php echo $rd['obs']?></p>
        </div>
        
		<?php
			}
		?>
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
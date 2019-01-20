<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			QUEM FAZ TRIO BAGUNÇA
		</div>
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';


			//LÊ DADOS DO BANCO
			$lojas = DBRead ("trio", "ORDER BY id_trio ASC", "id_trio, nome, idade, funcao, alem, rede_social, foto");

			foreach ($lojas as $lj) {
				date_default_timezone_set('America/Sao_Paulo');
				$data_atual = date("Y/m/d");
				$date = new DateTime($lj['idade']); // data de nascimento
				$invertdate = $date->format('m/d/Y');
				$interval = $date->diff( new DateTime($data_atual) ); // data definida
				$idade = $interval->format('%Y Anos'); // idade	
		?>
			<table width="100%" border="0" cellpadding="4" cellspacing="4" class="table">
				<tr>
					<td class="linha" align="left" valign="top" width="150">
					<?php echo "<img src='img/parceiros/".$lj['foto']."' class='imgserv'>";?>
					</td>
					<td valign="middle" width="500">
						<h2><?php echo $lj['nome']; ?> </h2>
						<h3><?php 
					if ($lj['idade'] == '0000-00-00') {echo "";}
					else { echo $idade;}?></h3>
						<b>Função:</b> <?php echo $lj['funcao']; ?> <br />
						<b>Além do Trio bagunça é:</b> <?php echo $lj['alem']; ?> <br />
						<?php 
							if ($lj['rede_social'] == false) {
								echo "<br /> <br /> ";
							} 
							else {
								echo "
								<a href=\"'".$lj['rede_social']."'\" target=\"_blank\">
								<img src=\"img/logo-facebook.png\" class=\"sociais\" style=\"width: 7%;\"></a>
								";
							}
						?>
					</td>
			  </tr>
			<?php
				}
			?>
			</table>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
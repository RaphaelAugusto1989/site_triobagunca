<?php include "head.php"; ?>
<div id="corpo"><!--INICIO CORPO-->
	<div class="texto">
		<div id="titulos">
			Próximos Eventos
		</div>
		<?php
			require 'processos/config.php';
			require 'processos/connection.php';
			require 'processos/database.php';


			//LÊ DADOS DO BANCO
			$lojas = DBRead ("trio", "ORDER BY id_trio ASC", "id_trio, nome, idade, funcao, alem, rede_social, foto");
		?>

			</table>
	</div><!--FIM TEXTO-->
</div><!--FIM CORPO-->
<?php include "footer.php"; ?>
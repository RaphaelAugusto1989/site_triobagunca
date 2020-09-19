<?php
   $quant_pg = ceil($countTotal/$numreg);
   $quant_pg++;
   #$url_ant = "http://localhost/trio/index.php?pg=";
   $url_ant = $_SERVER['PHP_SELF']."?pg=";
   
   // anterior  
   if ( $pg > 1) {
      echo "<span class='pg'><a href=".$url_ant.($pg-1) .">Anterior</a></span>";
   } else {
      echo "<span class='pg'></span>";
   }

   // Faz controle das páginas que irá mostrar na paginação	
   if(($pg - 2) < 1) {
      $anterior = 1;
   } else {
      $anterior = $pg - 2;
   }

   if(($pg + 3) > $quant_pg) {
      $proximo = $quant_pg;
   } else {
      $proximo = $pg + 3;
   }

   // Crio os números das páginas entre Anterior e Próximo	
   for($i_pg = $anterior; $i_pg < $proximo; $i_pg++) {
      if ($pg == ($i_pg)) {
      echo "<span class='pg_select'>$i_pg</span>";
      } else {
         $i_pg2 = $i_pg;
         echo "<span class='pg'><a href={$url_ant}{$i_pg2}>$i_pg</a></span>";
      }
   }
   
   // proximo
   if (( $pg + 1 ) < $quant_pg) {
      echo "<span class='pg'><a href=".$url_ant.($pg+1).">Próxima</a></span>";
   } else {
      echo "<span class='pgoff'></span>";
   }
?>
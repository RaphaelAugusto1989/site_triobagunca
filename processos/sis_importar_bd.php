<?php
header('Content-Type: text/html; charset=utf-8');

// dados de conex�o com o banco de dados
$usuario = "triob261_admin";
$senha = "002128";
$dbname = "triob261_bd";
$HostName = "localhost";
$NameBd = "bkp_bd.sql";

date_default_timezone_set('America/Sao_Paulo');

// conectando ao banco
$conexao = mysqli_connect($HostName, $usuario,$senha) or die(mysqli_error());
mysqli_select_db($conexao, $dbname) or die(mysqli_error());
mysqli_set_charset($conexao, "utf8");

$diretorio_para_grava_backup = 'backupBd';
if(!is_dir($diretorio_para_grava_backup)){
   mkdir($diretorio_para_grava_backup);
}

// gerando um arquivo sql. Como?
// a fun��o fopen, abre um arquivo, que no meu caso, ser� chamado como: nomedobanco.sql
// note que eu estou concatenando dinamicamente o nome do banco com a extens�o .sql.
$back = fopen($diretorio_para_grava_backup."/".$NameBd,"w");

// aqui, listo todas as tabelas daquele banco selecionado acima
$res = mysqli_query($conexao,"SHOW TABLES") or die(mysqli_error($conexao));

//Em seguida, vamos, verificar quais s�o as tabelas daquela base, lista-las, e em um la�o for, vamos mostrar cada uma delas, e resgatar as fun��es descria��o da tabela, para serem gravadas no arquivo sql mais adiante.

// resgato cada uma das tabelas, num loop
while ($row = mysqli_fetch_row($res)) {
	$table = $row[0]; 
    // usando a fun��o SHOW CREATE TABLE do mysql, exibo as fun��es de cria��o da tabela, 
    // exportando tamb�m isso, para nosso arquivo de backup
	$res2 = mysqli_query($conexao, "SHOW CREATE TABLE $table");
    // digo que o comando acima deve ser feito em cada uma das tabelas

    while ( $lin = mysqli_fetch_row($res2)){ 
        
        // instru��es que ser�o gravadas no arquivo de backup
		fwrite($back,"\n#\n# Cria��o da Tabela : $table\n#\n\n");
		fwrite($back,"$lin[1] ;\n\n#\n# Dados a serem inclu�dos na tabela\n#\n\n");

        //Teremos ent�o de pegar os dados que est�o dentro de cada campo de cada tabela, e abri-los tamb�m para serem gravados no nosso arquivo de backup.
    
        // seleciono todos os dados de cada tabela pega no while acima
        // e depois gravo no arquivo .sql, usando comandos de insert
    	$res3 = mysqli_query($conexao, "SELECT * FROM $table");
        
		while($r=mysqli_fetch_row($res3)){ 
	       $sql="INSERT INTO $table VALUES (";

            //Agora vamos pegar cada dado do campo de cada tabela, e executar tarefas como, quebra de linha, substitui��o de aspas, espa�os em branco, etc. Deixando o arquivo confi�vel para ser importado em outro banco de dados.
        
            // este la�o ir� executar os comandos acima, gerando o arquivo ao final, 
            // na fun��o fwrite (gravar um arquivo)
            // este la�o tamb�m ir� substituir as aspas duplas, simples e campos vazios
            // por aspas simples, colocando espa�os e quebras de linha ao final de cada registro, etc
            // deixando o arquivo pronto para ser importado em outro banco
           
            for($j=0; $j<mysqli_num_fields($res3);$j++){
                if(!isset($r[$j]))
                    $sql .= " '',";
                elseif($r[$j] != "")
                    $sql .= " '".addslashes($r[$j])."',";
                else
                    $sql .= " '',";
            }
            $sql = str_replace(",$", "", $sql);
            $sql .= ");\n";
    
    		fwrite($back,$sql);
		}
	}
}

//E finalmente, vamos fechar (internamente, no servidor) o arquivo que geramos, dando um nome para o mesmo, e gerando o arquivo que ser� ent�o disponibilizado para download.

// fechar o arquivo que foi gravado
fclose($back);
// gerando o arquivo para download, com o nome do banco e extens�o sql.
   //$arquivo = $dbname.".sql";

   //ob_start();

  //require('zip.lib.php');

  //Gera o objeto
   //$zipfile = new zipfile("backup".date("Y-m-d").".zip",'', '');

  //Adiciona o diretorio corrente com todos arquivos
  //$zipfile->addDirContent('./');

  //Adicionado o aquivo criado
  //$zipfile->addFileAndRead($arquivo);

  //Saida do aquivo compactado
  //echo $zipfile->file();
  
 system('find backupBd/ -name .recycle -type d -exec find {} -mtime +1 \; | xargs rm -f');
if($back == true)
    include_once("../processos/db_import.php");
	//echo "<span style='color: #03B401;'>Backup do Banco de Dados Realizado com sucesso as ".date("H:i:s")."!</span>";
else
	echo "<span style='color: #AC0002;'>ENTRE EM CONTATO COM O ADMINISTRADOR DO SISTEMA PARA VERIFICAR O PORQUE N�O OCORREU O BACKUP DO BANCO DE DADOS!</span>";

?>

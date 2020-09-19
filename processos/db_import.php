
<?php
//header('Content-Type: text/html; charset=utf-8');
// Name of the file
$filename = 'backupBd/bkp_bd.sql';
// MySQL host
$mysql_host = 'localhost';
// MySQL username
$mysql_username = 'triob261_admin';
// MySQL password
$mysql_password = '002128';
// Database name
$mysql_database = 'triob261_dev';

// Connect to MySQL server
$conected = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_database) or die('Error connecting to MySQL server: ' . mysql_error());
mysqli_set_charset($conected,"utf8");

if ($conected) {
    $query = "DROP DATABASE IF EXISTS triob261_dev";
    $deleted = mysqli_query($conected, $query);



    if ($deleted) {

        $createTable = "CREATE DATABASE triob261_dev";
        $create = mysqli_query($conected, $createTable) or die(mysqli_error($conected));

        echo "<pre>";
        //echo "<p>BANCO DE DADOS DELETADO COM SUCESSO!</p>";

        if($create) {
            //echo "<p>BANCO DE DADOS CRIADO COM SUCESSO!</p>";
            
            //DIZNEDO QUE VAI USAR O BANCO TRIOBAGUNCA
            $sql = "USE triob261_dev";
            $res = mysqli_query($conected, $sql) or die(mysqli_error($conected));

            // Temporary variable, used to store current query
            $templine = '';
            // Read in entire file
            $lines = file($filename);
            //print_r($lines);exit;
            // Loop through each line
            $conta = 0;
            foreach ($lines as $line) {
                $conta++;
            // Skip it if it's a comment
                if (substr($line, 0, 2) == '--' || $line == '')
                    continue;
                    // Add this line to the current segment
                    $templine .= $line;
                    
                    // If it has a semicolon at the end, it's the end of the query
                    if (substr(trim($line), -1, 1) == ';') {
                        //COLOQUEI ESSE STR_REPLACE PRA TIRAR BUGS Q ESTAVAM VINDO NO SQL.
                        //OS INSERTS ESTAVAM ACABANDO EM ,);
                        //Como depois da virgula deveria ter uma coluna, eu retirei essa virgula e mantive o parenteses e o ponto e virgula.

                        $templine = str_replace(",);",");", $templine);   
                    //Perform the query
                       
                        mysqli_query($conected, $templine) or print('<br/>Error performing query \'' .$templine. '\': ' .mysqli_error($conected).'');
                       
                        //Reset temp variable to empty
                        $templine = '';
                    }
            }
            echo "<p>BANCO DE DADOS IMPORTADO COM SUCESSO!</p>";
       
        }
    } else {
        echo "<p>PROBLEMA AO EXCLUIR BANCO!</p>";
    }
}
?>
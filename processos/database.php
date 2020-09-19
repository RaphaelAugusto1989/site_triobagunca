<?php

//OCULTA OS ERROS
error_reporting(0);

//EXCLUIR REGISTROS
function DBExcluir($table, $where = null){
	$where = ($where) ? " WHERE {$where}" : null;

	$query = "DELETE FROM {$table}{$where}";
	//echo $query;
	return DBExecute($query);
}

//ALTERA REGISTROS
function DBUpDate($table, array $data, $where = null){
	foreach ($data as $key => $value) {
		$fields[] = "{$key} = '{$value}'";
	}

	$fields = implode(', ', $fields);

	$where = ($where) ? " WHERE {$where}" : null;

	$query = "UPDATE {$table} SET {$fields}{$where}";
	//echo $query; exit;
	return DBExecute($query);
}


//LER REGISTROS
function DBRead ($table, $params = null, $fields = '*') {
	$params = ($params) ? " {$params}" : null;
	
		$query = "SELECT {$fields} FROM {$table}{$params}";
		$result = DBExecute($query);
		
		if (!mysqli_num_rows($result))
			return false;
		else {
			while ($res = mysqli_fetch_assoc($result)) {
				$data[] = $res;
			}
			//echo $query; echo "<br />";
			//var_dump($query);
			return $data;
		}
}


//GRAVA REGISTROS
function DBCreate ($table, array $data) {
	$date = DBEscape($data);
	
	$fields = implode(', ', array_keys($data));
	$values = "'".implode("', '", $data)."'";
	
	$query = "INSERT INTO {$table} ({$fields}) VALUES ({$values})";
	//echo $query; echo "<br />";
	//var_dump($query);
	return DBExecute ($query);
}

//EXECUTA QUERYS
function DBExecute($query){
	$link = DBConnect();
	$result = @mysqli_query($link, $query) or die (mysqli_error($link));
	
	DBClose($link);
	return $result;
}
?>
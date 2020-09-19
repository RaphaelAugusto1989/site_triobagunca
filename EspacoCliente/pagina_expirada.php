<?php
if (!isset($_SESSION)) {
     session_start();
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>.:: Trio Bagunça ::.</title>
</head>

<body>
<?php
     $_SESSION = array();
     session_unset ();
     session_destroy ();
     echo "<p>Sua sessão foi Expirada, favor <a href='../LoginCliente.php' target='_top'>clique aqui</a> para logar novamente! </p>";
?>

</body>
</html>

     

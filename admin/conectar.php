<?php 
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "rabd";
$user = "root";
$pass = "";

	// Conecta com o Banco de Dados
$con = mysqli_connect($host, $user, $pass) or die (mysql_error ());


?>
<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "rabd";
$user = "root";
$pass = "";

	// Conecta com o Banco de Dados
$con = mysqli_connect($host, $user, $pass) or die (mysql_error ());

	// Seleciona o Banco de Dados
mysqli_select_db($con, $db) or die(mysqli_error());

	// query SQL
$strSQL = "SELECT * FROM configs";

	// Executa a query (o recordset $rs contém o resultado da query)
$rs = mysqli_query($con, $strSQL);
	
	// Loop pelo recordset $rs
$row = mysqli_fetch_array($rs);


	   // Escreve o valor da coluna FirstName e BirthDate
//echo $row['nomedosite'] . " " . $row['url'] . "<br />";

	 
	  
function getTitulo($row) {
	return $row['nomedosite'];
}

function getDescricao($row) {
    return $row['descricao'];
}

function getURL($row) {
    return $row['url'];
}

function getEmail($row) {
    return $row['email'];
}

function getTelefone1($row) {
    return $row['telefone'];
}

function getTelefone2($row) {
    return $row['telefone2'];
}

function getFacebook($row) {
    return $row['facebook'];
}

function getBio($row) {
    return $row['bio'];
}



mysqli_close($con);

?>
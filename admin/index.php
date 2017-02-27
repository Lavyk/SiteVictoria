<?php 
if(isset($_COOKIE["usuario"])){
	include('cpanel.php');
} else {
	include('login.php');
}

?>
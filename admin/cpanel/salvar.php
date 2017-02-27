<?php

//include("../conectar.php");

$con=mysqli_connect("localhost","root","","rabd");


$nomedosite = $_POST["nomedosite"];
$descri = $_POST['descri'];
$url = $_POST['url'];
$email = $_POST['email'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$facebook = $_POST['facebook'];
$bio = $_POST['bio'];

echo $url;

$sqlinsert = "UPDATE `configs` SET
                         nomedosite='$nomedosite' ,
                         descricao='$descri',
                         url='$url' ,
						 email='$email',
						 telefone='$tel1',
						 telefone2='$tel2',
						 facebook='$facebook',
						 bio='$bio'
               WHERE 1 ";

mysqli_query($con, $sqlinsert) or die(mysqli_error($con));
mysqli_query($con, $sqlinsert) or die(mysqli_error($con));


mysqli_close($con);

echo '<script>parent.window.location.reload(true);</script>';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
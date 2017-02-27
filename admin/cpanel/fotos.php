<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="css/fotosStyle.css">

<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>


<style type="text/css">

.thumb {
	background-image: url("https://scontent-gru2-2.xx.fbcdn.net/v/t1.0-9/17021645_1851768821760318_2004550651394729558_n.jpg?oh=470f3043ae3d487cc65e83d696576e7d&oe=5942B792");
	background-size: cover;	
	border: 1px solid #000;
	width: 20%;
	height: 30%;
	float:left;
	margin:5px;
	text-align:center;
    line-height: 380px;
	font-size:80%;
	color:white;
	text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
	-webkit-filter: grayscale(50%); /* Chrome, Safari, Opera */
   	filter: grayscale(50%);
}

.thumb:hover{
   -webkit-filter: grayscale(0%); /* Chrome, Safari, Opera */
   filter: grayscale(0%);
}

.layer {
	background: -webkit-linear-gradient(bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)); /* For Opera 11.1 to 12.0 */
    background: -moz-linear-gradient(bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)); /* For Firefox 3.6 to 15 */
    background: linear-gradient(to bottom, rgba(0,0,0,0), rgba(0,0,0,0.8)); /* Standard syntax (must be last) */
	position:relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

</style>


</head>

<body>

<div> <h3>Gerenciador de fotos </h3></div>




<button id="show" class="log-btn" style="margin:10px; width:20%;" onclick="window.location.replace('fotos/criarAlbum.php');">Criar álbum</button>

<h5>Álbuns</h5>


<?php
$db = new mysqli('localhost', 'root', '', 'rabd');
if(mysqli_connect_errno()){
echo mysqli_connect_error();
}
$result = $db->query('SELECT * FROM `albuns`');
if($result){
   while ($row = $result->fetch_assoc()){
	   echo '<a href="#">';
       echo '<div  class="thumb">';
	   echo '<div class="layer">';
    
       print_r($row['nome']);
	   
	   echo '</div></div>';
	   echo '</a>';
   }
   $result->free();
}
$db->close();
?>

</body>
</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>


<link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
<link rel="stylesheet" type="text/css" href="../css/fotosStyle.css">

<script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>

<body>





<form method="post" action="upload.php">
<input type="text" placeholder="Nome do álbum" style=" width:50%" /><br />
<textarea cols="60" style=" width:50%" rows="4" placeholder="Pequena descrição sobre o álbum.">
</textarea>
<input type="submit" id="btn" class="log-btn" value="Salvar" style="width:50%;" /> 
</form>


<div style="float:left; margin: 20px; width:50%;" class="log-btn" align="center" >
<div style="padding:3px; margin:10px" id="hide" onclick="window.location.replace('../fotos.php');"> Sair </div>
</div>

</div>

</div>




</body>
</html>
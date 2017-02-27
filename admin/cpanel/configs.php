<?php
include("functions.php");

?>


<head>

<link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>

<style type="text/css">

html, body{
	height:100%;
	margin-left: 30px;
	margin-top: 20px;
	padding: 0px;
	font-family: 'Aclonica';
	font-size: 22px;
	color: #232864;
	background-color: #f1f1f1;
	
}



.log-btn {
  background: #0AC986;
  dispaly: inline-block;
  width: 20%;
  font-size: 16px;
  height: 40px;
  color: #fff;
  text-decoration: none;
  border: none;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  border-radius: 4px;
}

.log-btn:hover {
	cursor: pointer;
	background-color: #09A26C;	
}


input[type=text] {
     border-color: #dddddd;
     border-style: solid;
     border-width: 1px;
     border-radius: 0px;
     font-size: 17px;
     padding: 3px;
     box-shadow: 0px 0px 14px 0px rgba(184, 184, 184, .65);
     font-weight: normal;
     font-style: none;
     font-family: serif;
	 width: 100%;
 }
input[type=text]:focus {
     outline: none;
	 border-color: #06C;
 }
 
textarea {
     border-color: #dddddd;
     border-style: solid;
     border-width: 1px;
     border-radius: 0px;
     font-size: 17px;
     padding: 3px;
     box-shadow: 0px 0px 14px 0px rgba(184, 184, 184, .65);
     font-weight: normal;
     font-style: none;
     font-family: serif;
	 width: 100%;
 }
textare:focus {
     outline: none;
	 border-color: #06C;
 }

td, th {
	padding:20px;	
}

</style>
</head>


<body>
<h3>Configurações gerais</h3>
<form method="post" action="salvar.php">

<table width="100%" border="0">
    

  <tr >
    
    <td width="20%">Título do site:</td>
    <td width="25%"><input id="nomedosite" name="nomedosite" type="text" value="<?php echo(getTitulo($row)); ?>"></td>
    <th>Bio: </th>
    <th rowspan="7"><textarea style="resize:none;"id="bio" name="bio" rows="30" cols="30" style="width:100%;"><?php echo(getBio($row)); ?></textarea></th>
    
  </tr>
  <tr>
    <td>Descrição do site: </td>
    <td><input id="descri" name="descri" type="text" value="<?php echo(getDescricao($row)); ?>"></td>
  </tr>
  <tr>
    <td>Endereço do site (URL): </td>
    <td><input id="url" name="url" type="text" value="<?php echo(getURL($row)); ?>"></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><input id="email" name="email" type="text" value="<?php echo(getEmail($row)); ?>"></td>
  </tr>
  <tr>
    <td>Telefone: </td>
    <td><input id="tel1" name="tel1" type="text" value="<?php echo(getTelefone1($row)); ?>"></td>
  </tr>
  <tr>
    <td>Telefone2:</td>
    <td><input id="tel2" name="tel2" type="text" value="<?php echo(getTelefone2($row)); ?>"></td>
  </tr>
  <tr>
    <td>Facebook: </td>
    <td><input id="facebook" name="facebook" type="text" value="<?php echo(getFacebook($row)); ?>"></td>
  </tr>
  
   <tr>
    <td colspan="2" align="right"><input type="submit" class="log-btn" value="Salvar" /></td>
  </tr>
</table>



</form>


</body>


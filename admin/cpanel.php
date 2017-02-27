<?php
include("seguranca.php");
protegePagina();
include("cpanel/functions.php");
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $_SESSION['usuarioNome'];?></title>

<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="application/javascript" src="js/main.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<link href='//fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>


<style type="text/css">
/* Grand Hotel */

html, body{
	height:100%;
	margin: 0px !important;
	padding: 0px;
	font-family: 'Aclonica';;
	
}
.head {
	width: 100%;
	/* background-image: linear-gradient(to bottom, #555, #000); */
	background-color: #23282d;
	
}

.tudo {
	width: 100%;
	height: 700px;
}

.menu {
	float: left;
	width: 15%;
	background-color: #23282d;
	height: 700px;
}

.content {
	float: left;
	width: 90%;
	height: 700px;
}

#sidebar {
	background-color: #474747;
    width: 10%;
    height: 100%;
    left: 0;
    float:left;
}

#menubar {
	background-color: #474747;
    width: 10%;
    height: 100%;
    left: 0;
    float:left;
}
 
a:link, a:visited {
    background-color: #474747;
    color: white;
    padding: 10px 25px;
    text-align: center; 
    text-decoration: none;
    display: inline-block;
	width: 100%
}

a:hover, a:active {
    background-color: #191e23;
	color: #06C;
	color: #00b9eb;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.frame {
	width: 100%;
	height: 100%;
}

</style>

</head>

<body>
<div class="head">
    <br />
    <div style="color:#FFF; margin-left: 20px; float:left; width: 85%;"><?php echo getTitulo($row); ?> </div>
    <div class="text-right" style="color:#FFF; 	margin-right: 20px; float:left">
		<?php
        echo "Olá, " . $_SESSION['usuarioNome'];
        ?>
        </div>
        <br /><br />
</div>


<div class="tudo">
<section id="sidebar">
				<ul>
                <li><a href="cpanel/painel.php" target="content">Painel</a></li>
                <li><a href="cpanel/fotos.php" target="content">Fotos</a></li>
                <li><a href="settings.php" target="content">Slide</a></li>
                <li><a href="cpanel/configs.php" target="content">Config</a></li>
                <li><a href="cpanel/user.php" target="content">Users</a></li>
                </ul>

        </section>
        
        
        
<div class="content"><iframe src="cpanel/painel.php" class="frame" name="content"> </iframe></div>


</div>

</body>
</html>
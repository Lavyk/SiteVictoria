<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Retratos de afeto</title>
  
  
  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

   
<form method="post" action="valida.php">



  <div class="login-form">
     <p><img src="imgs/logo_preto.png" width="100%"></p>
     <div class="form-group ">
     
       <input name="usuario" type="text" class="form-control" placeholder="Username " id="UserName">
       <i class="fa fa-user"></i>
    </div>
     <div class="form-group log-status">
       <input name="senha" type="password" class="form-control" placeholder="Password" id="Passwod">
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
     <input type="submit" class="log-btn" value="Log in" />
     
    
   </div>
</form>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

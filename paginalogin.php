<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Pagina de login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body background="img/001.jpg" >

<body class="text-center">
<br><br><br><br><br><br>
    <form class="form-signin" action="valida.php">
  <img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"> <h5 class="my-5 mr-md-auto font-weight-normal"><b>QUICK APOSTAS</b></h5><br>
  <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1><br>
  <label for="inputEmail" class="sr-only">Digite seu E-mail</label>
  <input type="email" id="inputEmail" class="form-signin" placeholder="Digite o seu E-mail" required="" autofocus="" maxlength="25" ></br></br>
  <label for="inputPassword" class="sr-only">Senha</label>
  <input type="password" class="form-signin" placeholder="Senha" required=""><br>
  <div class="checkbox mb-1">
    <label>
   <input type="checkbox" value="remember-me"> Lembre-me   
  </label>
  </div>
  <br>
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-0 bg-white border-bottom shadow-sm" >
  <a href="pag1.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Logar</a>
  <a href="pag4.php" class="btn btn-primary btn-sm" role="button" aria-pressed="true">Esqueci minha senha</a>

</div>	


</html>

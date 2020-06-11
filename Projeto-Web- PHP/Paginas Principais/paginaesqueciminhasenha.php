<?php include_once("lib/includes.php");?>
<?php
session_start();
?>

<!doctype html>
<html>
  <head>
  <title> ESQUECI MINHA SENHA</title>>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">

  </head>
  <body background="img/001.jpg">
  <?php echo verifica_dados($con);?>
<div class="container">
  <?php
           
           require 'vendor/autoload.php';
           
          
           $from = new SendGrid \ Email(null, "quickapostas@hotmail.com");
           $subject = "Quick Apostas - Esqueci minha senha ";
           $to = new SendGrid \ Email(null, "mpg-sg@hotmail.com");
           $content = new SendGrid\Content("text/html", "Olá Matheus, <br><br><h2>Você Esqueceu sua senha?</h2>
           <h3>Se sim, aqui está o link para você cadastrar uma nova sua senha: </br> http://localhost/Projeto-Web/paginacadastrarsenha.php </h3>
           <h5>Não foi você quem solicitou? Se não foi você ignore este email.</h5>
           <hr> <br><br><br> <br>");
           $mail = new SendGrid\Mail( $from,$subject, $to, $content);
           $apiKey = '';
           $sg = new SendGrid($apiKey);

           $response = $sg->client->mail()->send()->post($mail);
           ?>
  <body class="text-center">
   <div class="form-signin" style="background: #eeee">

    <form method="POST">
	  <img class="mb-10" src="img/002.jpg" alt="" width="200" height="200"><h5 class="my-5 mr-md-auto font-white-normal"><a href="paginainicial.php"class="btn btn-light" role="button" aria-pressed="true" >QUICKAPOSTAS</a></h5>
  <h1 class="h3 mb-3 font-weight-normal">Esqueci minha senha</h1><br>
  <p>Introduza seu nome de usu&aacute;rio ou e-mail para iniciar o processo de recuperação de sua senha.</p><br>
  <input type="email" name="email"  class="form-signin" placeholder="E-mail do usu&aacute;rio" autofocus="" maxlength="35" required>
  <div class="checkbox mb-1">
  <br>
  </div>

	<input type="submit" value="Enviar"class="btn btn-primary btn-sm"  aria-pressed="true"></br>
  <input type="hidden" name="env" value="form">
  </form>

  
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>
</html>
